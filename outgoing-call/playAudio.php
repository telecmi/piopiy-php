<?php

$play = array("url" => "http://example.com/hello.wav")

$playaudio = array("appid" => 1111, "secret" => "cnh3ksndj", "to" => 9894, "play" => $play);                                                                    
$data_string = json_encode($playaudio);                                                                                   
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