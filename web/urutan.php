<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['urutan'];
if (!empty($a)){
    $fh = fopen("urutan.txt","w+");
    fwrite($fh, $a);
    fclose($fh);
    echo 'done';
}else{
    echo 'Restricted';
}
?>
