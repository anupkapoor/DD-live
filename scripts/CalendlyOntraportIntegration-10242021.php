<?php

require_once('./src/Ontraport.php');

use OntraportAPI\Ontraport;
use OntraportAPI\ObjectType;

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

function validatePhone($string) {
    try{
        $numbersOnly = preg_replace('/[^0-9]/', "", $string);
        $numberOfDigits = strlen($numbersOnly);
        
        if ($numberOfDigits == 11 || $numberOfDigits == 10) {
            return $numbersOnly;
        } else {
            return "";
      }
    } catch (Exception $e) {
        $error['error'] = 'Message: ' . $e->getMessage();
        return $error;
    }
}

// **** TODO **** By Karen Keyes
/*
The following fields are Ontraport dropdown fields, and when you assign a value to those fields they have to match the # of the option in Ontraport.

f1740 = What are you looking for?
f1611 = How soon are you looking to start?
f1518 = What is your budget?
f1514 = How did you hear about us?

These fields cannot be set with "$data['payload']['questions_and_responses']['#_response']" (ie, NOT with the string). 
They must be set with the numeric equivalent from the Ontraport Contact meta data for that field.

See this VIDEO: https://www.loom.com/share/bec66335ed8f459ba779c591eee67b5c

*/

    $request_body = file_get_contents('php://input');
    
    if(isset($request_body)){
        $data = json_decode(stripslashes($request_body),true);
        
    
        if (isset($data['payload']['invitee']['email']) && $data['payload']['invitee']['email'] != '' 
        && $data['payload']['event_type']['name'] != "Discussion with Dedicated Developers" 
        && $data['payload']['event_type']['name'] != "Discussion with Vishal Bhatia" 
        && $data['payload']['event_type']['name'] != "Follow Up Session" /* This is for follow up to BP clients, we may push these to ON later */
        && $data['payload']['event_type']['name'] != "90 Minute Consultation Package"
        && $data['payload']['event_type']['name'] != "Discovery & Strategy Session (update)"
        && $data['payload']['event_type']['name'] != "Discovery & Strategy Session (in office visit)") {
            
            //CHECKING WHETHER PAYLOAD IS EMPTY OR NOT
            $client = new Ontraport("2_21081_i2IJ6uMoT", "3beSoC1g7HJO8jG"); //initialize object
            
            $hearAboutUsParams = '84'; // Resell our services to your clients
            
            // Get the Contact Meta data so we have the option ids for fields that are dropdowns
            $metaResponse = $client->object()->retrieveMeta();
            $metaResult = json_decode($metaResponse, TRUE);
            $metaData = $metaResult['data'][0]['fields'];
    
            //SEPERATING PAYLOAD DATA
            $email = $data['payload']['invitee']['email'];
            $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
            $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 

            $com = '[{ "field":{"field":"email"}, "op":"=", "value":{"value":"' . $email . '"} }]';     //CHECKING EMAIL IN ONTRAPORT
            $requestParams = array(
                "objectID" => ObjectType::CONTACT,
                "condition" => $com
            );
            $response = $client->object()->retrieveMultiple($requestParams); // GETTING PARTICULAR EMAIL DATA FROM ONTRAPORT
            $result = json_decode($response, TRUE);
            $contact = $result['data']; //ASSIGNING EMAIL DATA FROM ONTRAPORT TO VARIABLE
                     
            $date_timestamp = explode('T',$data['payload']['event']['start_time']);
            $date = strtotime($data['payload']['event']['start_time']);
            $demo_date = $date;
            $time = explode('-',$date_timestamp[1]);
            $demo_time = date("g:i a", strtotime($time[0])); 
            $current_status = ($data['payload']['invitee']['canceled']==true)?'canceled':'scheduled';      
            
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                if(empty($data['payload']['invitee']['text_reminder_number'])) {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name']
                    );
                } else {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    ); 
                }

            } // Contact is new, and does not exist in Ontraport 
            else {
                $requestParams = array(     //ARRAY OF CONTACT DATA CREATED
                    'objectID' => ObjectType::CONTACT,
                    'email' => $data['payload']['invitee']['email'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    ); 
            }
            
            // If Location is via phone, then set "Meeting Details" to the phone #, and the dropdown Meeting Location to Phone
            $locationDetails = validatePhone($data['payload']['event']['location']); // returns phone # or blank
            
            // Check if Vishal has a custom location for phone
            if(strpos($data['payload']['event']['location'], "Phone") !== false) {
                $requestParams['f1980'] = 383;
            }
            
            if(isset($locationDetails) && $locationDetails != '') {
                $requestParams['f1979'] = $locationDetails;
                $requestParams['f1980'] = 383; // 383=Phone
                $requestParams['f1981'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $locationDetails . '). Please feel free to email me back if you want me to call on a different number.';
            } 
            else if(strpos($data['payload']['event']['location'], "Conference") !== false) {
                $requestParams['f1980'] = 381;
                $requestParams['f1981'] = 'I will be conducting this meeting via conference call. You can join EITHER by clicking this link https://meetings.ringcentral.com/j/1480439922 OR by calling 1-773-231-9226 (using meeting id 148 043 9922).';
            }
            else if(strpos($data['payload']['event']['location'], "Skype") !== false) {
                $requestParams['f1980'] = 382;
            }
            
            if(isset($data['payload']['questions_and_responses']['1_response']) && $data['payload']['questions_and_responses']['1_response'] != ''){
                $requestParams['office_phone'] = $data['payload']['questions_and_responses']['1_response']; // Phone US
                if($requestParams['f1981'] == '' && $requestParams['f1980'] == 383) {
                    $requestParams['f1979'] = $requestParams['office_phone'];
                    $requestParams['f1981'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $requestParams['office_phone'] . '). Please feel free to email me back if you want me to call on a different number.';
                }
            }
            
            // If user entered their Skype id let's grab it
            if(isset($data['payload']['questions_and_responses']['2_response']) && $data['payload']['questions_and_responses']['2_response'] != ''){
                $requestParams['f1532'] = $data['payload']['questions_and_responses']['2_response']; // Skype ID
                // If user wants meeting to be held on Skype, let's set the merge field with their Skype ID
                if($requestParams['f1980'] == 382) { // 382=Skype
                    $requestParams['f1981'] = 'I will be conducting this meeting via Skype. I will contact you via your Skype id (' . $requestParams['f1532'] . '). Our Skype id is dedicateddevelopers, please add us.';
                }
            } else if($requestParams['f1980'] == 382) { // 382=Skype
                // If user wants meeting to be held on Skype but they didn't provide their Skype ID, let's set the merge field:
                $requestParams['f1981'] = 'I will be conducting this meeting via Skype. Our Skype id is dedicateddevelopers. We do not have your id so please add us on Skype.';
            }
            if(isset($data['payload']['questions_and_responses']['3_response']) && $data['payload']['questions_and_responses']['3_response'] != ''){
                $requestParams['company'] = $data['payload']['questions_and_responses']['3_response']; // Company
            }
            if(isset($data['payload']['questions_and_responses']['4_response']) && $data['payload']['questions_and_responses']['4_response'] != ''){
                $projectAbout = $data['payload']['questions_and_responses']['4_response'];
                $requestParams['f1862'] = str_replace('"','', $projectAbout); // What is your project about?
            } 
            // What are you looking for?
            if(isset($data['payload']['questions_and_responses']['5_response']) && $data['payload']['questions_and_responses']['5_response'] != ''){
                if (isset($metaData['f1740']) && $metaData['f1740'] != "") {
                    $requestParams['f1740'] = array_search($data['payload']['questions_and_responses']['5_response'], $metaData['f1740']['options']);
                }
            }
            // New Funding Question
            if(isset($data['payload']['questions_and_responses']['6_response']) && $data['payload']['questions_and_responses']['6_response'] != ''){
                if (isset($metaData['f2019']) && $metaData['f2019'] != "") {
                    $requestParams['f2019'] = array_search($data['payload']['questions_and_responses']['6_response'], $metaData['f2019']['options']);
                }
            }
            // How soon are you looking to start
            if(isset($data['payload']['questions_and_responses']['7_response']) && $data['payload']['questions_and_responses']['7_response'] != ''){
                if (isset($metaData['f1611']) && $metaData['f1611'] != "") {
                    $requestParams['f1611'] = array_search($data['payload']['questions_and_responses']['7_response'], $metaData['f1611']['options']);
                }
            }
            // Budget
            if(isset($data['payload']['questions_and_responses']['8_response']) && $data['payload']['questions_and_responses']['8_response'] != ''){
                if (isset($metaData['f1518']) && $metaData['f1518'] != "") {
                    $requestParams['f1518'] = array_search($data['payload']['questions_and_responses']['8_response'], $metaData['f1518']['options']);
                }
            }
            // How did you hear about us
            if(isset($data['payload']['questions_and_responses']['9_response']) && $data['payload']['questions_and_responses']['9_response'] != ''){
                if (isset($metaData['f1514']) && $metaData['f1514'] != "") {
                    $requestParams['f1514'] = array_search($data['payload']['questions_and_responses']['9_response'], $metaData['f1514']['options']);
                }
                if ($requestParams['f1514'] == "" || $requestParams['f1514'] == FALSE) {
                    $requestParams['f1514'] = '84'; // Other
                }
            }
                    
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                
                $response = $client->object()->update($requestParams);      
                $result = json_decode($response, TRUE);
                $updated_data = $result['data'];
                
            } // Contact is new, and does not exist in Ontraport 
            else {
                $response = $client->contact()->create($requestParams);  
                $result = json_decode($response, TRUE);
                $created_data = $result['data'];

                if (isset($created_data['id']) && $created_data['id'] != "") {
                                        
                    $requestParams = array(        
                        "objectID" => ObjectType::CONTACT, 
                        "ids"      => $created_data['id'],
                        "add_list" => 99
                    );
                    $response = $client->object()->addTag($requestParams);         
                }
            }
            
            if ( (isset($updated_data['attrs']['id']) && $updated_data['attrs']['id']) || (isset($created_data['id']) && $created_data['id'] != "") ) {
            
                $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
                $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
                $notes = ($data['payload']['questions_and_responses']['10_response']!='')?$data['payload']['questions_and_responses']['10_response']:$note;            
                $notes2 = str_replace('"','',$notes);
                
                $url = 'https://api.ontraport.com/1/Notes';
                $action = 'POST';
                    
                // Contact already exists in Ontraport
                if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $contact[0]['id'],
                            'data' => $notes2,
                            'author' => $contact[0]['id']
                        )
                    );
                } // Contact is new, and does not exist in Ontraport
                else {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $created_data['id'],
                            'data' => $notes2,
                            'author' => $created_data['id']
                        )
                    );
                }
                
                $result = getOAPResult_new($url, $action, $query);

            }
    }
    else if (isset($data['payload']['invitee']['email']) && $data['payload']['invitee']['email'] != '' 
        && $data['payload']['event_type']['name'] == "90 Minute Consultation Package") 
    {
            //CHECKING WHETHER PAYLOAD IS EMPTY OR NOT
            $client = new Ontraport("2_21081_i2IJ6uMoT", "3beSoC1g7HJO8jG"); //initialize object
            
            // Get the Contact Meta data so we have the option ids for fields that are dropdowns
            $metaResponse = $client->object()->retrieveMeta();
            $metaResult = json_decode($metaResponse, TRUE);
            $metaData = $metaResult['data'][0]['fields'];
    
            //SEPERATING PAYLOAD DATA
            $email = $data['payload']['invitee']['email'];
            $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
            $notes =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
            $notes2 = str_replace('"','',$notes);
            
            $com = '[{ "field":{"field":"email"}, "op":"=", "value":{"value":"' . $email . '"} }]';     //CHECKING EMAIL IN ONTRAPORT
            $requestParams = array(
                "objectID" => ObjectType::CONTACT,
                "condition" => $com
            );
            $response = $client->object()->retrieveMultiple($requestParams); // GETTING PARTICULAR EMAIL DATA FROM ONTRAPORT
            $result = json_decode($response, TRUE);
            $contact = $result['data']; //ASSIGNING EMAIL DATA FROM ONTRAPORT TO VARIABLE
                     
           // $date_timestamp = explode('T',$data['payload']['event']['start_time']);
            $dateandtime = strtotime($data['payload']['event']['start_time']);
          //  $demo_date = $date;
          //  $time = explode('-',$date_timestamp[1]);
         //   $demo_time = date("g:i a", strtotime($time[0])); 
            $current_status = ($data['payload']['invitee']['canceled']==true)?'canceled':'scheduled';      
            
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    'f1987' => $dateandtime,
                    'f1989' => $current_status,
                    'f1988' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    );

            } // Contact is new, and does not exist in Ontraport 
            else {
                $requestParams = array(     //ARRAY OF CONTACT DATA CREATED
                    'objectID' => ObjectType::CONTACT,
                    'email' => $data['payload']['invitee']['email'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    'f1987' => $dateandtime,
                    'f1989' => $current_status,
                    'f1988' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    ); 
            }
            
            // If Location is via phone, then set "Meeting Details" to the phone #, and the dropdown Meeting Location to Phone
            $locationDetails = validatePhone($data['payload']['event']['location']); // returns phone # or blank
            
            if(isset($locationDetails) && $locationDetails != '') {
                $requestParams['f1992'] = $locationDetails;
                $requestParams['f1991'] = 417; // 417=Phone
                $requestParams['f1990'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $locationDetails . '). Please feel free to email me back if you want me to call on a different number.';
            } 
            else if(strpos($data['payload']['event']['location'], "Conference") !== false) {
                $requestParams['f1991'] = 419;
                $requestParams['f1990'] = 'I will be conducting this meeting via conference call. You can join EITHER by clicking this link https://meetings.ringcentral.com/j/1480439922 OR by calling 1-773-231-9226 (using meeting id 148 043 9922).';
            }
            else if(strpos($data['payload']['event']['location'], "Skype") !== false) {
                $requestParams['f1991'] = 418;
            }
            
            if(isset($data['payload']['questions_and_responses']['1_response']) && $data['payload']['questions_and_responses']['1_response'] != ''){
                $requestParams['office_phone'] = $data['payload']['questions_and_responses']['1_response']; // Phone US
            }
            
            // If user entered their Skype id let's grab it
            if(isset($data['payload']['questions_and_responses']['2_response']) && $data['payload']['questions_and_responses']['2_response'] != ''){
                $requestParams['f1532'] = $data['payload']['questions_and_responses']['2_response']; // Skype ID
                // If user wants meeting to be held on Skype, let's set the merge field with their Skype ID
                if($requestParams['f1991'] == 418) { // 418=Skype
                    $requestParams['f1990'] = 'I will be conducting this meeting via Skype. I will contact you via your Skype id (' . $requestParams['f1532'] . '). Our Skype id is dedicateddevelopers, please add us.';
                }
            } else if($requestParams['f1991'] == 418) { // 418=Skype
                // If user wants meeting to be held on Skype but they didn't provide their Skype ID, let's set the merge field:
                $requestParams['f1990'] = 'I will be conducting this meeting via Skype. Our Skype id is dedicateddevelopers. We do not have your id so please add us on Skype.';
            }
            
            // Company Name
            if(isset($data['payload']['questions_and_responses']['3_response']) && $data['payload']['questions_and_responses']['3_response'] != ''){
                $requestParams['company'] = $data['payload']['questions_and_responses']['3_response'];
            }
            // Details about what they want to discuss
            if(isset($data['payload']['questions_and_responses']['4_response']) && $data['payload']['questions_and_responses']['4_response'] != ''){
                $requestParams['f1993'] = str_replace( '"','',$data['payload']['questions_and_responses']['4_response']); 
            } 
            
                    
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                
                $response = $client->object()->update($requestParams);      
                $result = json_decode($response, TRUE);
                $updated_data = $result['data'];
                
            } // Contact is new, and does not exist in Ontraport 
            else {
                $response = $client->contact()->create($requestParams);  
                $result = json_decode($response, TRUE);
                $created_data = $result['data'];

                if (isset($created_data['id']) && $created_data['id'] != "") {
                                        
                    $requestParams = array(        
                        "objectID" => ObjectType::CONTACT, 
                        "ids"      => $created_data['id'],
                        "add_list" => 99
                    );
                    $response = $client->object()->addTag($requestParams);         
                }
            }
            
            if ( (isset($updated_data['attrs']['id']) && $updated_data['attrs']['id']) || (isset($created_data['id']) && $created_data['id'] != "") ) {
            
                $status=($data['payload']['invitee']['canceled'])?" 90-Min Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' 90-Min Scheduled ';
                $notes =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
                //$notes = ($data['payload']['questions_and_responses']['9_response']!='')?$data['payload']['questions_and_responses']['9_response']:$note;            
                
                $notes2 = str_replace('"','',$notes);
                
                $url = 'https://api.ontraport.com/1/Notes';
                $action = 'POST';
                    
                // Contact already exists in Ontraport
                if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $contact[0]['id'],
                            'data' => $notes2,
                            'author' => $contact[0]['id']
                        )
                    );
                } // Contact is new, and does not exist in Ontraport
                else {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $created_data['id'],
                            'data' => $notes2,
                            'author' => $created_data['id']
                        )
                    );
                }
                
                $result = getOAPResult_new($url, $action, $query);

            }
    }
        else if (isset($data['payload']['invitee']['email']) && $data['payload']['invitee']['email'] != '' 
        && $data['payload']['event_type']['name'] == "Discovery & Strategy Session (update)") 
    {
            //CHECKING WHETHER PAYLOAD IS EMPTY OR NOT
            $client = new Ontraport("2_21081_i2IJ6uMoT", "3beSoC1g7HJO8jG"); //initialize object
            
            $hearAboutUsParams = '84'; // Resell our services to your clients
            
            // Get the Contact Meta data so we have the option ids for fields that are dropdowns
            $metaResponse = $client->object()->retrieveMeta();
            $metaResult = json_decode($metaResponse, TRUE);
            $metaData = $metaResult['data'][0]['fields'];
    
            //SEPERATING PAYLOAD DATA
            $email = $data['payload']['invitee']['email'];
            $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
            $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 

            $com = '[{ "field":{"field":"email"}, "op":"=", "value":{"value":"' . $email . '"} }]';     //CHECKING EMAIL IN ONTRAPORT
            $requestParams = array(
                "objectID" => ObjectType::CONTACT,
                "condition" => $com
            );
            $response = $client->object()->retrieveMultiple($requestParams); // GETTING PARTICULAR EMAIL DATA FROM ONTRAPORT
            $result = json_decode($response, TRUE);
            $contact = $result['data']; //ASSIGNING EMAIL DATA FROM ONTRAPORT TO VARIABLE
                     
            $date_timestamp = explode('T',$data['payload']['event']['start_time']);
            $date = strtotime($data['payload']['event']['start_time']);
            $demo_date = $date;
            $time = explode('-',$date_timestamp[1]);
            $demo_time = date("g:i a", strtotime($time[0])); 
            $current_status = ($data['payload']['invitee']['canceled']==true)?'canceled':'scheduled';      
            
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                if(empty($data['payload']['invitee']['text_reminder_number'])) {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name']
                    );
                } else {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    );    
                }

            } // Contact is new, and does not exist in Ontraport 
            else {
                $requestParams = array(     //ARRAY OF CONTACT DATA CREATED
                    'objectID' => ObjectType::CONTACT,
                    'email' => $data['payload']['invitee']['email'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    ); 
            }
            
            // If Location is via phone, then set "Meeting Details" to the phone #, and the dropdown Meeting Location to Phone
            $locationDetails = validatePhone($data['payload']['event']['location']); // returns phone # or blank
            
            // Check if Vishal has a custom location for phone
            if(strpos($data['payload']['event']['location'], "Phone") !== false) {
                $requestParams['f1980'] = 383;
            }
            
            if(isset($locationDetails) && $locationDetails != '') {
                $requestParams['f1979'] = $locationDetails;
                $requestParams['f1980'] = 383; // 383=Phone
                $requestParams['f1981'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $locationDetails . '). Please feel free to email me back if you want me to call on a different number.';
            } 
            else if(strpos($data['payload']['event']['location'], "Conference") !== false) {
                $requestParams['f1980'] = 381;
                $requestParams['f1981'] = 'I will be conducting this meeting via conference call. You can join EITHER by clicking this link https://meetings.ringcentral.com/j/1480439922 OR by calling 1-773-231-9226 (using meeting id 148 043 9922).';
            }
            else if(strpos($data['payload']['event']['location'], "Skype") !== false) {
                $requestParams['f1980'] = 382;
            }
            
            if(isset($data['payload']['questions_and_responses']['1_response']) && $data['payload']['questions_and_responses']['1_response'] != ''){
                $requestParams['office_phone'] = $data['payload']['questions_and_responses']['1_response']; // Phone US
                if($requestParams['f1981'] == '' && $requestParams['f1980'] == 383) {
                    $requestParams['f1979'] = $requestParams['office_phone'];
                    $requestParams['f1981'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $requestParams['office_phone'] . '). Please feel free to email me back if you want me to call on a different number.';
                }
            }
            
            // If user entered their Skype id let's grab it
            if(isset($data['payload']['questions_and_responses']['2_response']) && $data['payload']['questions_and_responses']['2_response'] != ''){
                $requestParams['f1532'] = $data['payload']['questions_and_responses']['2_response']; // Skype ID
                // If user wants meeting to be held on Skype, let's set the merge field with their Skype ID
                if($requestParams['f1980'] == 382) { // 382=Skype
                    $requestParams['f1981'] = 'I will be conducting this meeting via Skype. I will contact you via your Skype id (' . $requestParams['f1532'] . '). Our Skype id is dedicateddevelopers, please add us.';
                }
            } else if($requestParams['f1980'] == 382) { // 382=Skype
                // If user wants meeting to be held on Skype but they didn't provide their Skype ID, let's set the merge field:
                $requestParams['f1981'] = 'I will be conducting this meeting via Skype. Our Skype id is dedicateddevelopers. We do not have your id so please add us on Skype.';
            }
            
            // New Funding Question
            if(isset($data['payload']['questions_and_responses']['3_response']) && $data['payload']['questions_and_responses']['3_response'] != ''){
                if (isset($metaData['f2019']) && $metaData['f2019'] != "") {
                    $requestParams['f2019'] = array_search($data['payload']['questions_and_responses']['3_response'], $metaData['f2019']['options']);
                }
            }
            // How soon are you looking to start
            if(isset($data['payload']['questions_and_responses']['4_response']) && $data['payload']['questions_and_responses']['4_response'] != ''){
                if (isset($metaData['f1611']) && $metaData['f1611'] != "") {
                    $requestParams['f1611'] = array_search($data['payload']['questions_and_responses']['4_response'], $metaData['f1611']['options']);
                }
            }
            // Budget
            if(isset($data['payload']['questions_and_responses']['5_response']) && $data['payload']['questions_and_responses']['5_response'] != ''){
                if (isset($metaData['f1518']) && $metaData['f1518'] != "") {
                    $requestParams['f1518'] = array_search($data['payload']['questions_and_responses']['5_response'], $metaData['f1518']['options']);
                }
            }
            // How did you hear about us
            if(isset($data['payload']['questions_and_responses']['6_response']) && $data['payload']['questions_and_responses']['6_response'] != ''){
                if (isset($metaData['f1514']) && $metaData['f1514'] != "") {
                    $requestParams['f1514'] = array_search($data['payload']['questions_and_responses']['6_response'], $metaData['f1514']['options']);
                }
                if ($requestParams['f1514'] == "" || $requestParams['f1514'] == FALSE) {
                    $requestParams['f1514'] = '84'; // Other
                }
            }
                    
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                
                $response = $client->object()->update($requestParams);      
                $result = json_decode($response, TRUE);
                $updated_data = $result['data'];
                
            } // Contact is new, and does not exist in Ontraport 
            else {
                $response = $client->contact()->create($requestParams);  
                $result = json_decode($response, TRUE);
                $created_data = $result['data'];

                if (isset($created_data['id']) && $created_data['id'] != "") {
                                        
                    $requestParams = array(        
                        "objectID" => ObjectType::CONTACT, 
                        "ids"      => $created_data['id'],
                        "add_list" => 99
                    );
                    $response = $client->object()->addTag($requestParams);         
                }
            }
            
            if ( (isset($updated_data['attrs']['id']) && $updated_data['attrs']['id']) || (isset($created_data['id']) && $created_data['id'] != "") ) {
            
                $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
                $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
                $notes = ($data['payload']['questions_and_responses']['9_response']!='')?$data['payload']['questions_and_responses']['9_response']:$note;            
                $notes2 = str_replace('"','',$notes);
                
                $url = 'https://api.ontraport.com/1/Notes';
                $action = 'POST';
                    
                // Contact already exists in Ontraport
                if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $contact[0]['id'],
                            'data' => $notes2,
                            'author' => $contact[0]['id']
                        )
                    );
                } // Contact is new, and does not exist in Ontraport
                else {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $created_data['id'],
                            'data' => $notes2,
                            'author' => $created_data['id']
                        )
                    );
                }
                
                $result = getOAPResult_new($url, $action, $query);

            }        
    }
        else if (isset($data['payload']['invitee']['email']) && $data['payload']['invitee']['email'] != '' 
        && $data['payload']['event_type']['name'] == "Maria Testing") 
    {
 //CHECKING WHETHER PAYLOAD IS EMPTY OR NOT
            $client = new Ontraport("2_21081_i2IJ6uMoT", "3beSoC1g7HJO8jG"); //initialize object
            
            $hearAboutUsParams = '84'; // Resell our services to your clients
            
            // Get the Contact Meta data so we have the option ids for fields that are dropdowns
            $metaResponse = $client->object()->retrieveMeta();
            $metaResult = json_decode($metaResponse, TRUE);
            $metaData = $metaResult['data'][0]['fields'];
    
            //SEPERATING PAYLOAD DATA
            $email = $data['payload']['invitee']['email'];
            $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
            $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 

            $com = '[{ "field":{"field":"email"}, "op":"=", "value":{"value":"' . $email . '"} }]';     //CHECKING EMAIL IN ONTRAPORT
            $requestParams = array(
                "objectID" => ObjectType::CONTACT,
                "condition" => $com
            );
            $response = $client->object()->retrieveMultiple($requestParams); // GETTING PARTICULAR EMAIL DATA FROM ONTRAPORT
            $result = json_decode($response, TRUE);
            $contact = $result['data']; //ASSIGNING EMAIL DATA FROM ONTRAPORT TO VARIABLE
                     
            $date_timestamp = explode('T',$data['payload']['event']['start_time']);
            $date = strtotime($data['payload']['event']['start_time']);
            $demo_date = $date;
            $time = explode('-',$date_timestamp[1]);
            $demo_time = date("g:i a", strtotime($time[0])); 
            $current_status = ($data['payload']['invitee']['canceled']==true)?'canceled':'scheduled';      
            
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                $requestParams = array(
                    'objectID' => ObjectType::CONTACT,
                    "id" => $contact[0]['id'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    );

            } // Contact is new, and does not exist in Ontraport 
            else {
                $requestParams = array(     //ARRAY OF CONTACT DATA CREATED
                    'objectID' => ObjectType::CONTACT,
                    'email' => $data['payload']['invitee']['email'],
                    'firstname' => $data['payload']['invitee']['first_name'],
                    'lastname' => $data['payload']['invitee']['last_name'],
                    '27161f1843' => $demo_date,
                    '27161f1844' => $demo_time,
                    'f1860' => $current_status,
                    'f1857' => $data['payload']['event_type']['name'],
                    'sms_number' => $data['payload']['invitee']['text_reminder_number']
                    ); 
            }
            
            // If Location is via phone, then set "Meeting Details" to the phone #, and the dropdown Meeting Location to Phone
            $locationDetails = validatePhone($data['payload']['event']['location']); // returns phone # or blank
            
            if(isset($locationDetails) && $locationDetails != '') {
                $requestParams['f1979'] = $locationDetails;
                $requestParams['f1980'] = 383; // 383=Phone
                $requestParams['f1981'] = 'I will be conducting this meeting via phone. I will call you at the number you provided (' . $locationDetails . '). Please feel free to email me back if you want me to call on a different number.';
            } 
            else if(strpos($data['payload']['event']['location'], "Conference") !== false) {
                $requestParams['f1980'] = 381;
                $requestParams['f1981'] = 'I will be conducting this meeting via conference call. You can join EITHER by clicking this link https://meetings.ringcentral.com/j/1480439922 OR by calling 1-773-231-9226 (using meeting id 148 043 9922).';
            }
            else if(strpos($data['payload']['event']['location'], "Skype") !== false) {
                $requestParams['f1980'] = 382;
            }
            
            
            if(isset($data['payload']['questions_and_responses']['1_response']) && $data['payload']['questions_and_responses']['1_response'] != ''){
                $requestParams['office_phone'] = $data['payload']['questions_and_responses']['1_response']; // Phone US
            }
            // If user entered their Skype id let's grab it
            if(isset($data['payload']['questions_and_responses']['2_response']) && $data['payload']['questions_and_responses']['2_response'] != ''){
                $requestParams['f1532'] = $data['payload']['questions_and_responses']['2_response']; // Skype ID
                // If user wants meeting to be held on Skype, let's set the merge field with their Skype ID
                if($requestParams['f1980'] == 382) { // 382=Skype
                    $requestParams['f1981'] = 'I will be conducting this meeting via Skype. I will contact you via your Skype id (' . $requestParams['f1532'] . '). Our Skype id is dedicateddevelopers, please add us.';
                }
            } else if($requestParams['f1980'] == 382) { // 382=Skype
                // If user wants meeting to be held on Skype but they didn't provide their Skype ID, let's set the merge field:
                $requestParams['f1981'] = 'I will be conducting this meeting via Skype. Our Skype id is dedicateddevelopers. We do not have your id so please add us on Skype.';
            }
            if(isset($data['payload']['questions_and_responses']['3_response']) && $data['payload']['questions_and_responses']['3_response'] != ''){
                $requestParams['company'] = $data['payload']['questions_and_responses']['3_response']; // Company
            }
            if(isset($data['payload']['questions_and_responses']['4_response']) && $data['payload']['questions_and_responses']['4_response'] != ''){
                $requestParams['f1862'] = str_replace( '"','',$data['payload']['questions_and_responses']['4_response']); // What is your project about?
            } 
            if(isset($data['payload']['questions_and_responses']['5_response']) && $data['payload']['questions_and_responses']['5_response'] != ''){
                if (isset($metaData['f1740']) && $metaData['f1740'] != "") {
                    $requestParams['f1740'] = array_search($data['payload']['questions_and_responses']['5_response'], $metaData['f1740']['options']);
                }
            }
            if(isset($data['payload']['questions_and_responses']['6_response']) && $data['payload']['questions_and_responses']['6_response'] != ''){
                if (isset($metaData['f1611']) && $metaData['f1611'] != "") {
                    $requestParams['f1611'] = array_search($data['payload']['questions_and_responses']['6_response'], $metaData['f1611']['options']);
                }
            }
            if(isset($data['payload']['questions_and_responses']['7_response']) && $data['payload']['questions_and_responses']['7_response'] != ''){
                if (isset($metaData['f1518']) && $metaData['f1518'] != "") {
                    $requestParams['f1518'] = array_search($data['payload']['questions_and_responses']['7_response'], $metaData['f1518']['options']);
                }
            }
            if(isset($data['payload']['questions_and_responses']['8_response']) && $data['payload']['questions_and_responses']['8_response'] != ''){
                if (isset($metaData['f1514']) && $metaData['f1514'] != "") {
                    $requestParams['f1514'] = array_search($data['payload']['questions_and_responses']['8_response'], $metaData['f1514']['options']);
                }
                if ($requestParams['f1514'] == "" || $requestParams['f1514'] == FALSE) {
                    $requestParams['f1514'] = '84'; // Other
                }
            }
                    
            // Contact already exists in Ontraport
            if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                
                $response = $client->object()->update($requestParams);      
                $result = json_decode($response, TRUE);
                $updated_data = $result['data'];
                
            } // Contact is new, and does not exist in Ontraport 
            else {
                $response = $client->contact()->create($requestParams);  
                $result = json_decode($response, TRUE);
                $created_data = $result['data'];

                if (isset($created_data['id']) && $created_data['id'] != "") {
                                        
                    $requestParams = array(        
                        "objectID" => ObjectType::CONTACT, 
                        "ids"      => $created_data['id'],
                        "add_list" => 99
                    );
                    $response = $client->object()->addTag($requestParams);         
                }
            }
            
            if ( (isset($updated_data['attrs']['id']) && $updated_data['attrs']['id']) || (isset($created_data['id']) && $created_data['id'] != "") ) {
            
                $status=($data['payload']['invitee']['canceled'])?" Cancelled Reason:". $data['payload']['invitee']['cancel_reason']:' Scheduled ';
                $note =  $data['payload']['invitee']['first_name'] .' '. $status .' For Event: '.$data['payload']['event_type']['name'].' On '.$data['payload']['event']['start_time_pretty']; 
                $notes = ($data['payload']['questions_and_responses']['9_response']!='')?$data['payload']['questions_and_responses']['9_response']:$note;            
                $notes2 = str_replace('"','',$notes);
                $url = 'https://api.ontraport.com/1/Notes';
                $action = 'POST';
                    
                // Contact already exists in Ontraport
                if (isset($contact[0]['id']) && $contact[0]['id'] != "") {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $contact[0]['id'],
                            'data' => $notes2,
                            'author' => $contact[0]['id']
                        )
                    );
                } // Contact is new, and does not exist in Ontraport
                else {
                    $query = array(
                        'data' => array(
                            'objectID' => 12,
                            'contact_id' => $created_data['id'],
                            'data' => $notes2,
                            'author' => $created_data['id']
                        )
                    );
                }
                
                $result = getOAPResult_new($url, $action, $query);

            }
    }
}
    $file = @fopen("dedicate_developer.log", 'a+');
    @fwrite($file, date("Y-m-d:H:i:s") . "\t" . "Requested data:" . $request_body ."\n");
    @fclose($file);
?>