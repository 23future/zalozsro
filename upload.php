<?php
require_once "PiramideUploader.php";
if(isset($_FILES["image"])){
    $piramideUploader = new PiramideUploader();

    $upload = $piramideUploader->upload("ready-made.csv", "image", "uploads", array("text/csv","text/plain","application/vnd.ms-excel","text/tsv"),true);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Zalozsro - nahranie Ready-made spolocnosti</title>
</head>

<body>
<h2>Nahranie Ready-made spolocnosti</h2>
<?php
if(isset($upload) && $upload["uploaded"]){
    echo "<p>Upload file data in php array:</p>";
    var_dump($piramideUploader->getInfoFile());

}elseif(isset($upload) && $upload["uploaded"] == false){
    echo "<p>Subol zial nemohol byt nahrany</p>";
    echo "<p>Error: ".$upload["error"]."</p>";
}
?>
<form action="" enctype="multipart/form-data" method="POST">
    <input type="file" name="image" id="image"/>
    <input type="submit" name="submit" value="Upload" />
</form>

</body>
</html>