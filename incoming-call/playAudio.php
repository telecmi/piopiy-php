<?php

$did = "";
$from = "";

if ($_POST) {

    $did = $_POST['did'];
    $from = $_POST['from'];

    echo '{"play": {"url":"https://github.com/telecmi/music/thanks.wav"}}';
}

?>