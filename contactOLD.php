<?php

// configure
$sendTo = 'zalozsro@zalozsro.eu';
$from = '';
//$sendTo = 'teamdevelop1234@gmail.com';

$subject = '';
$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Správa bola úspešne odoslaná, budeme Vás v krátkom čase kontaktovať. Ďakujeme';
$errorMessage = '';




// let's do the sending

try
{
    $emailText = "";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    $emailText = "Meno: ". $_POST['name'] . "\r\n".
        "E-mail: " . $_POST['email'] . "\r\n" .
        "Telefon: " . $_POST['phone'] . "\r\n" .
        "Správa:  " . $_POST['message'] ;


    $subject = "Kontakny formular zo Zaloz s.r.o.";
    $from = $_POST['email'];
    //$header = "From: ".$from.  "\r\n";
    $header = "From: ".$sendTo ." \r\n";
    //$header .= "\r\nReply-To:".$from ;
    $header .= 'Cc: ' . $from . "\r\n";
    //mail($sendTo, $subject, $emailText, $header);
    $emailText .= "\r\n\n" . "Vaša správa bola odoslaná na náš e-mail. Čo najskôr Vás budeme kontaktovať. Tešíme sa na našu spoluprácu.". "\r\n\n" . "S pozdravom, ZALOZ S.R.O";
    //$header = "From: ".$sendTo ." \r\n";
    mail($sendTo, $subject, $emailText, $header);


    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}