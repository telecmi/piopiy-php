<?php

$did = "";
$from = "";

if ($_POST) {

    $did = $_POST['did'];
    $from = $_POST['from'];

       echo '{"ivr": {"welcome": {"play": {"url": "http://example.com/welcomev21.wav"}},"invalid": {"play": {"url": "http://example.com/welcomev21.wav"}},"retry": 3,"min": 1,"max": 1,"if": {"1": {"queue": {"record": true,"ringback": "http://example.com/saleswait.wav","call": [989439xxxx,978985xxxx]}},"2": {"queue": {"record": true,"ringback": "http://example.com/supportwait.wav","call": [989439xxxx,978985xxxx]}},"3": {"http": {"method": "POST","url": "http://example.com/v21nextivr"}},"9": {"replay": true}}}}';
           
}

?>