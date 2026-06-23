<?php
//$file="./Download/accessdatabaseengine_X64.exe";
if (isset($_GET['file']))
{
    $file=$_GET['file'];
}
$path="./Download";
//$file="./Download/SetupNetworkBook-1-2-7-0.msi";
$pathcomplet=$path."/".$file;
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');
header('Content-disposition: attachment; filename="'.basename($pathcomplet).'"');
echo readfile($pathcomplet);
?>