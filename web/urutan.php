<?php
$a = $_GET['urutan'];
$fh = fopen("urutan.txt","w+");
    fwrite($fh, $a);
    fclose($fh);
    echo 'done';
?>
