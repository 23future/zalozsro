<?php

// configure
$sendTo = 'zalozsro@zalozsro.eu';
$from = '';
//$sendTo = 'teamdevelop1234@gmail.com';

$subject = '';
$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Správa bola úspešne odoslaná, budeme Vás v krátkom čase kontaktovať. Ďakujeme';
$errorMessage = '';



function strrevpos($instr, $needle)
{
    $rev_pos = strpos (strrev($instr), strrev($needle));
    if ($rev_pos===false) return false;
    else return strlen($instr) - $rev_pos - strlen($needle);
};

    function after_last ($inthat, $this2)
    {
        if (!is_bool(strrevpos($inthat, $this2)))
        return substr($inthat, strrevpos($inthat, $this2)+strlen($this2));
    };

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

    $from = $_POST['email'];

    // najskor mne
    $header = ""; 
    $header = "From: ".$sendTo ." \r\n";
    // reply-to = odpovedat na:
    $header .= "Reply-To:".$from ;
    $sendTo = 'dopyt@zalozsro.eu';
    //$sendTo = 'bucop@yahoo.com';
    $subject = "Novy dopyt zo ZALOZ s.r.o.";
    //$subject = "Novy dopyt zo ZALOZ s.r.o. (".$domena .")";
    //
    // kontrola na spam
    $matext= strpos($emailText, 'meet-free');
    $matext= strpos($emailText, 'http');
    //
    if ($_POST['message']=="") {
       // NEPOSLEM MAIL
    } else 
    if ($matext===false) {
      mail($sendTo, $subject, $emailText, $header);
    }

 
    // potom zakaznikovi
    $subject = "Kontakny formular zo Zaloz s.r.o.";
    //$header = "From: ".$from.  "\r\n";
    $header = "From: ".$sendTo ." \r\n";
    //$header .= "\r\nReply-To:".$from ;
    //$header .= 'Cc: ' . $from . "\r\n";
    //mail($sendTo, $subject, $emailText, $header);
    $emailText .= "\r\n\n" . "Vaša správa bola odoslaná na náš e-mail. Čo najskôr Vás budeme kontaktovať. Tešíme sa na našu spoluprácu.". "\r\n\n" . "S pozdravom, ZALOZ S.R.O";
    //$header = "From: ".$sendTo ." \r\n";
    //
    $from = $_POST['email'];
    $domena = "";
    //$domena = after_last('.', $from );
    if ($_POST['message']=="") {
       // NEPOSLEM MAIL
    } else {
      if (($domena=="sk") or ($domena=="cz")) {
        mail($from, $subject, $emailText, $header);
      } else {
       //$from = $sendTo;
       // NEPOSLEM MAIL
      } 
    }

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