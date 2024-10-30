<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['nomor'];
$b = $_GET['opsi'];
$c = $_GET['token'];
$cb = base64_decode($c);
$parsing = preg_match_all('/<html>(.*?)<body>(.*?)\n/m', $cb, $parsed);
$jsontoken = json_decode($parsed['2']['0'], true);
$token = $jsontoken['token'];


if (($a == '1') && $b == '1' && !empty($c)) {
    $fh = fopen("./1/1.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '2' && !empty($c)) {
    $fh = fopen("./1/2.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '3' && !empty($c)) {
    $fh = fopen("./1/3.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '4' && !empty($c)) {
    $fh = fopen("./1/4.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '5' && !empty($c)) {
    $fh = fopen("./1/5.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '6' && !empty($c)) {
    $fh = fopen("./1/6.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '1') && $b == '7' && !empty($c)) {
    $fh = fopen("./1/7.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else  if (($a == '1') && $b == '8' && !empty($c)) {
    $fh = fopen("./1/8.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '1' && !empty($c)) {
    $fh = fopen("./2/1.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '2' && !empty($c)) {
    $fh = fopen("./2/2.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '3' && !empty($c)) {
    $fh = fopen("./2/3.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '4' && !empty($c)) {
    $fh = fopen("./2/4.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '5' && !empty($c)) {
    $fh = fopen("./2/5.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '6' && !empty($c)) {
    $fh = fopen("./2/6.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '2') && $b == '7' && !empty($c)) {
    $fh = fopen("./2/7.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else  if (($a == '2') && $b == '8' && !empty($c)) {
    $fh = fopen("./2/8.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '1' && !empty($c)) {
    $fh = fopen("./3/1.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '2' && !empty($c)) {
    $fh = fopen("./3/2.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '3' && !empty($c)) {
    $fh = fopen("./3/3.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '4' && !empty($c)) {
    $fh = fopen("./3/4.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '5' && !empty($c)) {
    $fh = fopen("./3/5.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '6' && !empty($c)) {
    $fh = fopen("./3/6.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else if (($a == '3') && $b == '7' && !empty($c)) {
    $fh = fopen("./3/7.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else  if (($a == '3') && $b == '8' && !empty($c)) {
    $fh = fopen("./3/8.txt","w+");
    fwrite($fh, $token."\n");
    fclose($fh);
    echo 'done';
}else{
    echo 'Restricted';
}
?>
