<?php
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
