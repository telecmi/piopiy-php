<?php

$did = "";
$from = "";

if ($_POST) {

    $did = $_POST['did'];
    $from = $_POST['from'];

      echo '{"queue": {"record":true,"call":[9894,9677,9789],"ringback":"http://example.com/thanks.wav"}}'; 
               
}

?>