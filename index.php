<?php
include 'DataEncryptionStandard.php';

$message = "FTIF ITS";
$key 	 = "TEKNIKMU";

$des  = new DataEncryptionStandard();
$res  = $des->encrypt($message, $key);

echo "Message 	: ".$message."<br>";
echo "Key 		: ".$key."<br>";
echo "Result DES: ".$res."<br>";
echo "<br>======================= Log ==================<br>";
$des->showLog();