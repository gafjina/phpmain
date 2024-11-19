<?php
$urutan = $_GET['urutan'];
$pasukan = $_GET['pasukan'];
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");
if (!empty($urutan)){
    echo file_get_contents('apel/'.$pasukan.'/'.$urutan.'.txt');
}else{
    echo 'Restricted';
}
?>