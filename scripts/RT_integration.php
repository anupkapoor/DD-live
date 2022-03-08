<?php

error_reporting(E_ALL);

class integration {

    public $contact_ID = '';
    public $email = '';
    //public $RT_secure_token = 'Rqb2CUl2RfQ78J4fWONddzMq0gF9liLYTfGoM1t2';
    public $RT_secure_token = 'pv_2819556e867b41afa57c80e9de6c765d';
    public $debug = false;
    public $Document_GUID = '';
    public $template_GUID = '';
    public $prepackage_template_guid = '';
    public $reciever_email = '';
    public $reciever_name = '';
    public $sender_name = 'Vishal Bhatia';
    public $sender_email = 'vbhatia@dedicateddevelopers.com';
    public $callback = 'https://www.dedicateddevelopers.com/scripts/rightsignature_callback.php';
    public $error = array();
    public $contract_email = '';

    public function __construct($email = '', $template_guid = '', $alt_email = '', $document_id = '') {
        $this->email = $email;
        $this->template_GUID = $template_guid;
        $this->contract_email = $alt_email;
        $this->Document_GUID = $document_id;
    }

    public function RT_request($url, $headers, $method, $body = NULL) {
        if (!$method) {
            $method = "GET";
        };

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // Append 'api-token' to Headersvn  b
        curl_setopt($curl, CURLOPT_HTTPHEADER, array($headers, "api-token: $this->RT_secure_token")); // Set the headers.

        if ($body) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            // Append 'api-token' to Headers
            curl_setopt($curl, CURLOPT_HTTPHEADER, array($headers, "Content-Type: text/xml;charset=utf-8", "api-token: $this->RT_secure_token"));
        }
        $curl_errno = curl_errno($curl);
        $curl_error = curl_error($curl);
        $data = curl_exec($curl);
        if ($this->debug) {
            echo "In httpRequest: Recieved DATA\n===========\n" . $data . "\n===========\n";
        }

        if ($curl_errno > 0) {
            $error['error'] = "cURL Error (#$curl_errno): $curl_error";
            $this->error['error'][] = $error['error'];
            return false;
        }

        try {
            $result = new SimpleXMLElement($data);
        } catch (Exception $e) {
            $error['error'] = 'Message: ' . $e->getMessage() . ':: Response :' . var_export($response, true);
            $this->error['error'][] = $error['error'];
            return false;
        }
        curl_close($curl);
        if (isset($result->error->message)) {
//            $error['error'] = 'Message: ' . $e->getMessage() . ':: Response :' . var_export($response, true);
            $this->error['error'][] = $result->error->message;
            return false;
        } else {
            return $result;
        }
        return false;
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
            $this->reciever_name = (string) $result[0]->firstname . ' ' . (string) $result[0]->lastname;
            if ($this->contract_email != '' && $this->contract_email != $this->email) {
                $this->reciever_email = $this->contract_email;
            } else {
                $this->reciever_email = $this->email;
            }
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif (!isset($result[0]->id) && $result === false) {
            return false;
        }
        return Null;
    }

    public function updateOAPContact($document_field_name, $field_name, $field_value) {

        $url = 'https://api.ontraport.com/1/objects';
        $action = 'PUT';
        $query = array(
            'data' => array(
                'objectID' => 0,
                'id' => $this->contact_ID,
                $document_field_name => $this->Document_GUID,
                $field_name => $field_value
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

    public function updateOAPNotes() {

        $url = 'https://api.ontraport.com/1/Notes';
        $action = 'POST';
        $query = array(
            'data' => array(
                'objectID' => 12,
                'contact_id' => $this->contact_ID,
                'data' => $this->contents,
                'author' => $this->contact_ID
            )
        );
        $result = $this->getOAPResult_new($url, $action, $query);
        print_r($result);
        if ((isset($result->id) && !empty($result))) {
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif (!isset($result->id) || $result == '') {
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
                'add_list' => 2082,
                'ids' => $this->contact_ID,
            )
        );
        $result = $this->getOAPResult_new($url, $action, $query);
        print_r($result);
        if (!isset($result['error']) && $result == 'The tag is now being processed.') {
            return true;
        } elseif (isset($result['error'])) {
            return $result;
        } elseif ($result == '') {
            return false;
        }
        return null;
    }

    public function prepackage_template_request() {
        $url = 'https://rightsignature.com/api/templates/' . $this->template_GUID . '/prepackage.xml';
//        $header = 'Content-Type:application/xml';
        $method = 'POST';
        $result = $this->RT_request($url, '', $method);
        if ($result != false && $result != '' && !empty($result->guid)) {
            $this->prepackage_template_guid = (string) $result->guid;
            return true;
        } else {
            return false;
        }
    }

    public function send_reminder($document_guid) {
        $url = 'https://rightsignature.com/api/documents/' . $this->Document_GUID . '/send_reminders.xml';
        $header = 'Content-Type:application/xml';
        $method = 'POST';
        $result = $this->RT_request($url, '', $method);
        return $result;
    }

    public function prefill_template_request() {
        $url = 'https://rightsignature.com/api/templates.xml';
        $method = 'POST';
//        $header = 'Content-Type:application/xml';
        $body = <<<XML
<?xml version="1.0" encoding="UTF-8"?><template><guid>$this->prepackage_template_guid</guid><action>send</action>
<roles>
<role role_name="Document Sender">
<name>$this->sender_name</name>
<email>$this->sender_email</email>
<locked>true</locked>
</role>
<role role_name="Client">
<name>$this->reciever_name</name>
<email>$this->reciever_email</email>
<locked>true</locked>
</role>
</roles>
<callback_location>$this->callback</callback_location>
</template>
XML;
        $result = $this->RT_request($url, '', $method, $body);
        if ($result->status == 'sent' && $result->guid != '') {
            $this->Document_GUID = (string) $result->guid;
            return true;
        } else {
            $this->error[] = $result;
            return false;
        }
    }

}

$error[] = array();

if (isset($_REQUEST['email']) && isset($_REQUEST['template_guid'])) {
    $atlemail = (isset($_REQUEST['altemail'])) ? $_REQUEST['altemail'] : '';
    $obj = new integration($_REQUEST['email'], $_REQUEST['template_guid'], $atlemail);
    $verify = $obj->verifyEmailInOAP();
    if ($verify === true) {

        $prepacked = $obj->prepackage_template_request();
        if ($prepacked) {
            $sent = $obj->prefill_template_request();
            if ($sent == true && !isset($_REQUEST['service_agreement'])) {
                $obj->updateOAPContact('f1693', 'f1694', 223);
            }elseif($sent == true && isset($_REQUEST['service_agreement']) && $_REQUEST['service_agreement'] !=''){
                $obj->updateOAPContact('f1698', 'f1697', 230);
            }
        } else {
            $error[] = $obj->error;
        }
    } else {
        $error[] = "Unable to verify email: " . $_REQUEST['email'];
    }
} elseif (isset($_REQUEST['document_guid']) && isset($_REQUEST['reminder'])) {

    $obj = new integration('', '', '', $_REQUEST['document_guid']);
    $sent = $obj->send_reminder($_REQUEST['document_guid']);
    print_r($sent);
} else {
    $error[] = "Please Provide Email and Template GUID";
}
$file = @fopen("RT_integration_testing.log", 'a+');
@fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . json_encode($_REQUEST) . "\t Error:" . json_encode($error) . "\n");
@fclose($file);
?>