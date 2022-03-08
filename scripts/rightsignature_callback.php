<?php

error_reporting(E_ALL);
$error = array();

function getOAPResult_new($url, $action = "GET", $query = false) {
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Api-Appid:2_21081_i2IJ6uMoT', 'Api-Key:3beSoC1g7HJO8jG'));
        switch ($action) {
            case "POST":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query['data']));
                break;
            case "GET":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query['data']));
                break;

            default:
                break;
        }

        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
        $output = curl_exec($ch);
        echo '<pre>';
        print_r($output);
        echo '===================';
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpcode == 200 && !empty($output)) {
            $decoded = json_decode($output);
            if (!empty($decoded->data) && $decoded->data != '') {
                return $decoded->data;
            } else {
                $error['error'] = "No Data Recieved" . print_r($decoded, true);
                return false;
            }
        } else if ($curl_errno > 0) {
            $error['error'] = "cURL Error (#$curl_errno): $curl_error";
            return $error;
        } elseif ($httpcode == 404 || $httpcode == 500 || $httpcode == 400) {
            $error['error'] = "Error Invalid request: ( $httpcode:$output )";
            return $error;
        } else {
            $error['error'] = "Unknown response: ( $httpcode : $output ) ";
            return $error;
        }
    } catch (Exception $e) {
        $error['error'] = 'Message: ' . $e->getMessage();
        return $error;
    }
}

function verifyEmailInOAP($email) {
    $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" . urldecode("email='" . $email . "'");
    $result = getOAPResult_new($url);
    if ((isset($result[0]->id)) && $result[0]->id != '') {
        $contact_ID = (string) $result[0]->id;
        return $contact_ID;
    } elseif (isset($result['error'])) {
        return $result;
    } elseif (!isset($result[0]->id) && $result === false) {
        return false;
    }
    return Null;
}

function verifyDocumentGuid($field, $guid) {
    $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" . urldecode($field . "='" . $guid . "'");
    $result = getOAPResult_new($url);
    if ((isset($result[0]->id)) && $result[0]->id != '') {
        $contact_ID = (string) $result[0]->id;
        return $contact_ID;
    } elseif (isset($result['error'])) {
        return $result;
    } elseif (!isset($result[0]->id) && $result === false) {
        return false;
    }
    return Null;
}

function updateOAPContact($con_id, $field = 'f1694', $field_value) {

    $url = 'https://api.ontraport.com/1/objects';
    $action = 'PUT';
    $query = array(
        'data' => array(
            'objectID' => 0,
            'id' => $con_id,
            $field => $field_value
        )
    );
    $result = getOAPResult_new($url, $action, $query);
    if ((isset($result->attrs) && !empty($result))) {
        return true;
    } elseif (isset($result['error'])) {
        return $result;
    } elseif (!isset($result->attrs->dlm) || $result == '') {
        return false;
    }
    return Null;
}

$request_body = file_get_contents('php://input');


try {
    $result = new SimpleXMLElement($request_body);
    echo '<pre>';
    print_r($result);
} catch (Exception $e) {
    $error['error'] = 'Message: ' . $e->getMessage() . ':: Response :' . var_export($response, true);
}
$sender_ids = array('vishal@dedicateddevelopers.com', 'vishal@ultimatevirtualemployee.com','vbhatia@dedicateddevelopers.com');
if (!isset($_REQUEST['service_agreement'])) {
    if (isset($result->guid) && !empty($result->recipient->email) && $result->status != 'viewed' && $result->status != 'created') {

        if (in_array($result->recipient->email, $sender_ids)) {
            $guid = (string) $result->guid;
            $con_id = verifyDocumentGuid('f1693', $guid);
            if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
                updateOAPContact($con_id, 'f1694', 220);
            } elseif ($con_id == false) {
                $con_id = verifyDocumentGuid('f1698', $guid);
                if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
                    updateOAPContact($con_id, 'f1697', 231);
                } else {
                    $error[] = "Unable to fing the document ID";
                }
            }
        } else {
            echo $guid = (string) $result->guid;
            echo $con_id = verifyDocumentGuid('f1693', $guid);
            if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
                updateOAPContact($con_id, 'f1694', 222);
            } elseif ($con_id == false) {
                $con_id = verifyDocumentGuid('f1698', $guid);
                if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
                    updateOAPContact($con_id, 'f1697', 228);
                } else {
                    $error[] = "Unable to fing the document ID";
                }
            } else {
                $error[] = "Unable to fing the document ID";
            }
        }
    } else {
        $error[] = "Unable to recieve proper callback";
    }
}




$file = @fopen("RT_callback.log", 'a+');
@fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . $request_body . ' : ' . json_encode($result, true) . "\t\n");
@fclose($file);