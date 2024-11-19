<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['nomor'];
$b = $_GET['opsi'];
$c = $_GET['apel'];


if (($a == '1') && $b == '1' && !empty($c)) {
    $fh = fopen("./apel/1/1.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '2' && !empty($c)) {
    $fh = fopen("./apel/1/2.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '3' && !empty($c)) {
    $fh = fopen("./apel/1/3.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '4' && !empty($c)) {
    $fh = fopen("./apel/1/4.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '5' && !empty($c)) {
    $fh = fopen("./apel/1/5.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '6' && !empty($c)) {
    $fh = fopen("./apel/1/6.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '7' && !empty($c)) {
    $fh = fopen("./apel/1/7.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else  if (($a == '1') && $b == '8' && !empty($c)) {
    $fh = fopen("./apel/1/8.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '1' && !empty($c)) {
    $fh = fopen("./apel/2/1.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '2' && !empty($c)) {
    $fh = fopen("./apel/2/2.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '3' && !empty($c)) {
    $fh = fopen("./apel/2/3.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '4' && !empty($c)) {
    $fh = fopen("./apel/2/4.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '5' && !empty($c)) {
    $fh = fopen("./apel/2/5.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '6' && !empty($c)) {
    $fh = fopen("./apel/2/6.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '7' && !empty($c)) {
    $fh = fopen("./apel/2/7.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else  if (($a == '2') && $b == '8' && !empty($c)) {
    $fh = fopen("./apel/2/8.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '1' && !empty($c)) {
    $fh = fopen("./apel/3/1.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '2' && !empty($c)) {
    $fh = fopen("./apel/3/2.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '3' && !empty($c)) {
    $fh = fopen("./apel/3/3.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '4' && !empty($c)) {
    $fh = fopen("./apel/3/4.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '5' && !empty($c)) {
    $fh = fopen("./apel/3/5.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '6' && !empty($c)) {
    $fh = fopen("./apel/3/6.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '7' && !empty($c)) {
    $fh = fopen("./apel/3/7.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else  if (($a == '3') && $b == '8' && !empty($c)) {
    $fh = fopen("./apel/3/8.txt","w+");
    fwrite($fh, $c);
    fclose($fh);
    echo 'done';
}else{
    echo 'Restricted';
}
?>
