<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['cek'];
$b = $_GET['masuk'];
$c = $_GET['reset'];

if ($a == "yes"){
    echo file_get_contents('lockfile.txt');
}else if ($b == "yes"){
    $fh = fopen("lockfile.txt","w+");
    fwrite($fh, 1);
    fclose($fh);
    echo 'done';
}else if ($c == "yes"){
    $fh = fopen("lockfile.txt","w+");
    fwrite($fh, 0);
    fclose($fh);
    echo 'done';
}else{
    echo 'Restricted';
}
?>
