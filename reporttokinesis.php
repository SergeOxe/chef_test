<?php
/**
 * Created by PhpStorm.
 * User: sergeoxe
 * Date: 5/31/16
 * Time: 5:05 PM
 */

$json = json_decode($_GET['json']);
$data = array_change_key_case((array) $json, CASE_LOWER);

if($json == "" || $json == null)
{
	die("Empty query");
}

$snEventDocumentKinesis = json_encode($data)."\n";

$fileName = "/tmp/report.log";

$file = fopen($fileName, "a+") or die("Unable to open file!");
fwrite($file, $snEventDocumentKinesis);
fclose($file);



?>