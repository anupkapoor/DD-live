<?php

class integration {

    public $contact_ID = '';
    public $email = '';
    public $FName = '';
    public $LName = '';
    public $name = '';
    public $demo_date = '';
    public $demo_time = '';
    public $status = array('scheduled' => '194', 'canceled' => '196');
    public $current_status = '194';
    public $error = array();
    public $event_name = '';
    public $contents = '';
    public $interested_in = '';
    public $company = '';
    public $phone = '';

    public function __construct($email = '', $Name = '', $phone = '') {
        $this->email = $email;
        $fullname = explode(' ',$Name , 2);
        $this->FName = $fullname[0];
        $this->LName = (isset($fullname[1]))?$fullname[1]:'';
        $this->phone = $phone;
    }

    private function getOAPResult_new($url, $action = "GET", $query = false) {
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

    public function verifyEmailInOAP() {
        $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" . urldecode("email='" . $this->email . "'");
        $result = $this->getOAPResult_new($url);
        if ((isset($result[0]->id)) && $result[0]->id != '') {
            $this->contact_ID = (string) $result[0]->id;
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif (!isset($result[0]->id) && $result === false) {
            return false;
        }
        return Null;
    }

    public function addOAPContact() {

        $url = 'https://api.ontraport.com/1/objects';
        $action = 'POST';
        $query = array(
            'data' => array(
                'objectID' => 0,
                'firstname' => $this->FName,
                'lastname' => $this->LName,
                'email' => $this->email,
                'office_phone' => $this->phone
            )
        );
        $result = $this->getOAPResult_new($url, $action, $query);

        if (isset($result->id) && $result->id != '') {
            $this->contact_ID = $result->id;
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif (!isset($result->id)) {
            return false;
        }
        return Null;
    }

    public function updateOAPContact() {

        $url = 'https://api.ontraport.com/1/objects';
        $action = 'PUT';
        $query = array(
            'data' => array(
                'objectID' => 0,
                'id' => $this->contact_ID,
                'firstname' => $this->FName,
                'lastname' => $this->LName,
                'office_phone' => $this->phone
            )
        );
        $result = $this->getOAPResult_new($url, $action, $query);

        if ((isset($result->attrs) && !empty($result))) {
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif (!isset($result->attrs->dlm) || $result == '') {
            return false;
        }
        return Null;
    }

    public function addOAPContactTag() {
        $url = 'https://api.ontraport.com/1/objects/tag';
        $action = 'PUT';
        $query = array(
            'data' => array(
                'objectID' => 0,
                'add_list' => 99,
                'ids' => $this->contact_ID,
            )
        );
        $result = $this->getOAPResult_new($url, $action, $query);
        if (!isset($result['error']) && $result == 'The tag is now being processed.') {
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif ($result == '') {
            return false;
        }
        return null;
    }

}

$error[] = array();
if (isset($_REQUEST['email'])) {
    if (isset($_REQUEST['email']) && $_REQUEST['email'] != '') {
        $obj = new integration($_REQUEST['email'], $_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['phone']);
        $verify = $obj->verifyEmailInOAP();
        if ($verify == true) {
            $contact_updated = $obj->updateOAPContact();
            if ($contact_updated == false) {
                $error[] = 'Unable to update contact';
            } else {
            	ob_start();
            	echo "http://aquib.ddconsultation.respond.ontraport.net";
                //header("location:http://aquib.ddconsultation.respond.ontraport.net");
            }
        } else if ($verify == false) {
            $contact_created = $obj->addOAPContact();
            if ($contact_created == false) {
                $error[] = 'Unable to create contact';
            } else {
            header("location:http://aquib.ddconsultation.respond.ontraport.net");
                //$obj->addOAPContactTag();
            }
        } else {
            $error[] = 'Unable to Verify Email';
        }
    }
} else {
    $error[] = 'No Data Recieved from Calendly to process.';
}
$file = @fopen("Opt-in.log", 'a+');
@fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . $_REQUEST . "\t Error:" . json_encode($error) . "\n");
@fclose($file);
?>