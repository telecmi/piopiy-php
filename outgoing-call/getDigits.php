<?php

$getdigits = array("start" => "http://example.com/question.wav", "invalid" => "http://example.com/invalid.wav", "min" = > 1, "max" => 1,"post" => "http://example.com/option")

$playaudio = array("appid" => 1111, "secret" => "cnh3ksndj", "to" => 9894, "get" => $getdigits);                                                                    
$data_string = json_encode($getdigits);                                                                                   
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