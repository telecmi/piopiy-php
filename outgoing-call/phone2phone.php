<?php


$phone2phone = array("appid" => 1111, "secret" => "cnh3ksndj", "to" => 9894, "from" => 9677);                                                                    
$data_string = json_encode($phone2phone);                                                                                   
$ch = curl_init('https://piopiy.telecmi.com/v1/playaudio');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
$result = curl_exec($ch);

?>