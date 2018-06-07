<?php

$did = "";
$from = "";

if ($_POST) {

    $did = $_POST['did'];
    $from = $_POST['from'];

       echo '{"hangup":true}';
           
}

?>