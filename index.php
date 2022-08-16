<?php

declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <form action="index.php" method="get">
        <input type="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

</body>

</html>


<?php

if (isset($_GET['number']) && (($_GET['number'] >= 1) && ($_GET['number'] <= 1000))) {
    $num = $_GET['number'];
    $birlik = $num % 10;
    $onlik = (($num % 100) - $birlik) / 10;
    $yuzlik = ($num - ($num % 100)) / 100;

    // echo $onlik;
    // echo $birlik;

    switch ($yuzlik) {
        case '1':
            echo 'Bir yuz ';
            break;
        case '2':
            echo 'Ikki  yuz ';
            break;
        case '3':
            echo 'Uch yuz ';
            break;
        case '4':
            echo 'To\'rt yuz ';
            break;
        case '5':
            echo 'Besh yuz ';
            break;
        case '6':
            echo 'Olti yuz ';
            break;
        case '7':
            echo 'Yetti yuz';
            break;
        case '8':
            echo 'Sakkiz yuz ';
            break;
        case '9':
            echo 'To\'qqiz yuz';
            break;
        case '10':
            echo 'Ming';
            break;
    }

    switch ($onlik) {
        case '1':
            echo 'o\'n ';
            break;
        case '2':
            echo 'yigirma ';
            break;
        case '3':
            echo 'o\'ttiz ';
            break;
        case '4':
            echo 'qirq ';
            break;
        case '5':
            echo 'ellik ';
            break;
        case '6':
            echo 'oltmish ';
            break;
        case '7':
            echo 'yetmish ';
            break;
        case '8':
            echo 'sakson ';
            break;
        case '9':
            echo 'to\'qson ';
            break;
    }

    switch ($birlik) {
        case '1':
            echo 'bir';
            break;
        case '2':
            echo 'ikki ';
            break;
        case '3':
            echo 'uch';
            break;
        case '4':
            echo 'tort';
            break;
        case '5':
            echo 'besh';
            break;
        case '6':
            echo 'olti';
            break;
        case '7':
            echo 'yetti';
            break;
        case '8':
            echo 'sakkiz';
            break;
        case '9':
            echo 'to\'qqiz';
            break;
    }
} else {
    echo '1 dan 1000 gacha son kiriting';
}



?>