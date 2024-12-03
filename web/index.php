<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$a = $_GET['nomor'];
$b = $_GET['opsi'];
$c = $_GET['token'];

if (!empty($a) && !empty($b) && !empty($c)) {
    $cb = base64_decode($c);
    preg_match_all('/<html>(.*?)<body>(.*?)\n/m', $cb, $parsed);
    $jsontoken = json_decode($parsed[2][0], true);
    $token = $jsontoken['token'];

    // Validasi dan tulis file
    if (is_numeric($a) && is_numeric($b)) {
        $a = intval($a);
        $b = intval($b);

        // Pastikan nilai dalam rentang valid
        if ($a >= 1 && $a <= 6 && $b >= 1 && $b <= 8) {
            $filePath = "./$a/$b.txt";

            // Tulis token ke file
            if (file_put_contents($filePath, $token . "\n") !== false) {
                echo 'done';
            } else {
                echo 'Error writing file';
            }
        } else {
            echo 'Invalid range';
        }
    } else {
        echo 'Invalid input';
    }
} else {
    echo 'Restricted';
}
?>
