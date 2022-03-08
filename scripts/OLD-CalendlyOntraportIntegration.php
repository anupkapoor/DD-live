<?php

    class integration {

        public $contact_ID = '';
        public $email = '';
        public $FName = '';
        public $LName = '';
        public $name = '';
        public $demo_date = '';
        public $demo_time = '';
        public $status = array('scheduled'=>'194','canceled'=>'196');
        public $current_status = 'canceled';
        public $error = array();
        public $event_name = '';
        public $contents = '';
        public $interested_in = '';
        public $company ='';
        public $phone = '';

        public function __construct($email = '' , $FName='' , $LName='' , $name='' , $start_end_time='',$canceled='false', $event_slug='',$notes='',$interested_in='', 
 $phone='',$company='') {
		$this->email = $email;
            $this->FName = $FName;
            $this->LName = $LName;
            $this->name = $name;    
            $this->company = $company;
            $this->phone = $phone;
            $date_timestamp = explode('T',$start_end_time);
            $date = strtotime($start_end_time);
            $this->demo_date = $date;
            $time = explode('-',$date_timestamp[1]);
            $this->demo_time = $time[0]; 
            $this->current_status = ($canceled==true)?'canceled':'scheduled';
            $this->event_name = $event_slug;
            $this->contents = $notes;
            $this->interested_in = $interested_in;

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
            $url = "https://api.ontraport.com/1/objects?objectID=0&condition=" .'[{ "field":{"field":"email"}, "op":"=", "value":{"value":"' . $this->email . '"} }]';
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
                            'company'=> $this->company,
                            'office_phone' => $this->phone,
                            '27161f1843' => $this->demo_date,
                            '27161f1844' => $this->demo_time,
                            'f1860' => $this->current_status,
                            'f1857' => $this->event_name,
                            'f1384' => $this->interested_in,
                            'f1490' => 216
                        )
                    );
                    $result = $this->getOAPResult_new($url, $action, $query);
                    print_r($result);
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
                    '27161f1843' => $this->demo_date,
                    '27161f1844' => $this->demo_time,
                    'f1860' => $this->current_status,
                    'f1857' => $this->event_name,
                    'f1490' => 216
                )
            );
            if($this->interested_in != ''){
            	$query['data']['f1384'] = $this->interested_in;
            }
            if($this->phone != ''){
            	$query['data']['office_phone'] = $this->office_phone;
            }
            if($this->company != ''){
            	$query['data']['company'] = $this->company;
            }
            $result = $this->getOAPResult_new($url, $action, $query);
            print_r($result);
            if ((isset($result->attrs) && !empty($result))) {
                return true;
            } elseif (isset($result['error'])) {
                return $result;
            } elseif (!isset($result->attrs->dlm) || $result == '') {
                return false;
            }
            return Null;
        }

        public function updateOAPNotes($notes='') {
        		$account_notes = ($notes=='')?$this->contents:$notes;
            
                    $url = 'https://api.ontraport.com/1/Notes';
                    $action = 'POST';
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $this->contact_ID,
                            'data' => $account_notes,
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
                            'add_list' => 99,
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

    }
    $error[] = array();
    $request_body = file_get_contents('php://input');
    if(isset($request_body)){
        $data = json_decode(stripslashes($request_body),true);
    if (isset($data['payload']['invitee']['email']) && $data['payload']['invitee']['email'] != '' && $data['payload']['event_type']['name'] != "Discussion with Dedicated Developers") {
        $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
        $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
        $obj = new integration(
            $data['payload']['invitee']['email'], 
            $data['payload']['invitee']['first_name'], 
            $data['payload']['invitee']['last_name'] , 
            $data['payload']['invitee']['name'] , 
            $data['payload']['event']['start_time'],
            $data['payload']['invitee']['canceled'],
            $data['payload']['event_type']['name'],
            $note,
            $data['payload']['questions_and_responses']['1_response'],
            $data['payload']['questions_and_responses']['2_response'],
            $data['payload']['questions_and_responses']['3_response']
        );
        $verify = $obj->verifyEmailInOAP();
        if ($verify == true) {
            $contact_updated = $obj->updateOAPContact();
            
            $notes = ($data['payload']['questions_and_responses']['4_response']!='')?$obj->updateOAPNotes($data['payload']['questions_and_responses']['4_response']):'';
            if($contact_updated == false){
                $error[] = 'Unable to update contact';
            }else{
                $obj->updateOAPNotes();
            }
            } else if($verify == false){
                $contact_created = $obj->addOAPContact();
                $notes = ($data['payload']['questions_and_responses']['4_response']!='')?$obj->updateOAPNotes($data['payload']['questions_and_responses']['4_response']):'';
                if($contact_created == false){
                    $error[] = 'Unable to create contact';
                }else{
                $obj->addOAPContactTag();
                $obj->updateOAPNotes();
                }
            }else{
            $error[] = 'Unable to Verify Email';
            }
        }
    }else{
        $error[]='No Data Recieved from Calendly to process.';
    }
    $file = @fopen("dedicate_developer.log", 'a+');
            @fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . $request_body . "\t Error:". json_encode($error) ."\n");
            @fclose($file);
    ?>