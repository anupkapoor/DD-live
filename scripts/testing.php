<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://suite.endole.co.uk/insight/company/00445790-tesco-plc?page=overview",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: 790f11ab-2665-c149-6b33-268d9a26dc59"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $text = '<script>document.getElementById("full_price").innerHTML = "New text!";</script>';
  echo $response.$text;
}

die();

// function getOAPResult_new($url, $action = "GET", $query = false) {
//     try {
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $url);
//         curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Api-Appid:2_21081_i2IJ6uMoT', 'Api-Key:3beSoC1g7HJO8jG'));
//         switch ($action) {
//             case "POST":
//                 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//                 curl_setopt($ch, CURLOPT_POST, 1);
//                 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query['data']));
//                 break;
//             case "GET":
//                 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//                 break;
//             case "PUT":
//                 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//                 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query['data']));
//                 break;

//             default:
//                 break;
//         }

//         $curl_errno = curl_errno($ch);
//         $curl_error = curl_error($ch);
//         $output = curl_exec($ch);
//         $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//         curl_close($ch);
//         if ($httpcode == 200 && !empty($output)) {
//             $decoded = json_decode($output);
//             if (!empty($decoded->data) && $decoded->data != '') {
//                 return $decoded->data;
//             } else {
//                 $error['error'] = "No Data Recieved" . print_r($decoded, true);
//                 return false;
//             }
//         } else if ($curl_errno > 0) {
//             $error['error'] = "cURL Error (#$curl_errno): $curl_error";
//             return $error;
//         } elseif ($httpcode == 404 || $httpcode == 500 || $httpcode == 400) {
//             $error['error'] = "Error Invalid request: ( $httpcode:$output )";
//             return $error;
//         } else {
//             $error['error'] = "Unknown response: ( $httpcode : $output ) ";
//             return $error;
//         }
//     } catch (Exception $e) {
//         $error['error'] = 'Message: ' . $e->getMessage();
//         return $error;
//     }
// }

// function verifyEmailInOAP($email) {
//     $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" . urldecode("email='" . $email . "'");
//     $result = getOAPResult_new($url);
//     if ((isset($result[0]->id)) && $result[0]->id != '') {
//         $contact_ID = (string) $result[0]->id;
//         return $contact_ID;
//     } elseif (isset($result['error'])) {
//         return $result;
//     } elseif (!isset($result[0]->id) && $result === false) {
//         return false;
//     }
//     return Null;
// }

// function verifyEmailIn_ContractEmail($email) {
//     $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" . urldecode("f1695='" . $email . "'");
//     $result = getOAPResult_new($url);
//     if ((isset($result[0]->id)) && $result[0]->id != '') {
//         $contact_ID = (string) $result[0]->id;
//         return $contact_ID;
//     } elseif (isset($result['error'])) {
//         return $result;
//     } elseif (!isset($result[0]->id) && $result === false) {
//         return false;
//     }
//     return Null;
// }

// function updateOAPContact($con_id, $field_value) {

//     $url = 'https://api.ontraport.com/1/objects';
//     $action = 'PUT';
//     $query = array(
//         'data' => array(
//             'objectID' => 0,
//             'id' => $con_id,
//             'f1694' => $field_value
//         )
//     );
//     $result = getOAPResult_new($url, $action, $query);
//     if ((isset($result->attrs) && !empty($result))) {
//         return true;
//     } elseif (isset($result['error'])) {
//         return $result;
//     } elseif (!isset($result->attrs->dlm) || $result == '') {
//         return false;
//     }
//     return Null;
// }

// $request_body = '<?xml version="1.0" encoding="UTF-8"?><callback><callback-type>Document</callback-type><guid>EWZVLMI685WL5NTBYYVDWI</guid><redirect-token></redirect-token><status>recipient_signed</status><recipient><name>Vishal Bhatia</name><email>vishal@ultimatevirtualemployee.com</email></recipient><created-at>2017-09-25 23:39:44 -0700</created-at></callback>';

// try {
//     $result = new SimpleXMLElement($request_body);
// } catch (Exception $e) {
//     $error['error'] = 'Message: ' . $e->getMessage() . ':: Response :' . var_export($response, true);
// }

// if (isset($result->callback->recipient->email) && !empty($result->callback->recipient->email) && strpos($email, 'vishal') == false) {
//     $email = (string) $result->callback->recipient->email;
//     $con_id = verifyEmailIn_ContractEmail($email);
//     if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
//         updateOAPContact($con_id, 222);
//     } elseif ($con_id === false && !is_array($con_id)) {
//         $con_id = verifyEmailInOAP($email);
//         if (isset($con_id) && is_numeric($con_id) && $con_id != false) {
//             updateOAPContact($con_id, 222);
//         }
//     }
// } elseif (strpos($email, 'vishal') !== false) {
//     updateOAPContact($con_id, 220);
// }




// $file = @fopen("RT_callback.log", 'a+');
// @fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . $request_body .' : '. print_r($result, true) . "\t\n");
// @fclose($file);
