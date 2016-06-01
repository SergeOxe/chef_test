<?php
/**
 * Created by PhpStorm.
 * User: sergeoxe
 * Date: 5/31/16
 * Time: 5:05 PM
 */

$json = json_decode($_GET['json']);
$data = array_change_key_case((array) $json, CASE_LOWER);

$snEventDocumentKinesis = json_encode($data);

$time=time();
$fileName = "/tmp/report.log";

echo "file name: ".$fileName;

$file = fopen($fileName, "w+") or die("Unable to open file!");
fwrite($file, $snEventDocumentKinesis);
fclose($file);



?>