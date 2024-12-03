<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['nomor'];
$b = $_GET['opsi'];
$c = $_GET['apel'];

// Pastikan input valid
if (is_numeric($a) && is_numeric($b) && !empty($c)) {
    $a = intval($a);
    $b = intval($b);

    // Periksa rentang yang valid untuk $a dan $b
    if ($a >= 1 && $a <= 6 && $b >= 1 && $b <= 8) {
        $filePath = "./apel/$a/$b.txt";

        // Tulis ke file
        if (file_put_contents($filePath, $c) !== false) {
            echo 'done';
        } else {
            echo 'Error writing file';
        }
    } else {
        echo 'Invalid range';
    }
} else {
    echo 'Restricted';
}
?>
