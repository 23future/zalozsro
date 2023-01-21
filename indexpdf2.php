<?php 
$file = './bogea.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Location" content="/www/doc/www.zalozsro.eu/www/indexpdf2.php">

</head>