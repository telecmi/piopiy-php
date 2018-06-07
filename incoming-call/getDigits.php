<?php

$did = "";
$from = "";

if ($_POST) {

    $did = $_POST['did'];
    $from = $_POST['from'];

       echo '{"get": {"min":1,"max":5,"retry":3,"post": "http://example.com/tablebooked","start":"http://example.com/nooftable.wav","invalid":"http://example.com/entertableplease.wav"}}'; 
           
}

?>