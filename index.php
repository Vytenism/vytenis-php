<?php
$sunny = 1;

if ($sunny) {
    print 'sauleta' . '<br>';
} else {
    print 'debesuota' . '<br>';
}

$x = 1;
$y = 2;

if ($x + $y === 3)
    print 'sauleta' . '<br>';

$x = 0;

if ($x == 1) {
    print 'x yra 1' . '<br>';
} elseif ($x == 2) {
    print 'x yra 2' . '<br>';
} else {
    print 'nei vienas' . '<br>';
}

$distance = rand(10, 10000);
$consumption = 7.5;
$price_1 = 1.3;
$money = 100;
$cons = $consumption * $distance / 100;
$price = round(1.3 * $cons);
$rez = '';
if ($money >= $price) {
    $rez = 'negaliu';
} elseif ($money <= $price) {
    $rez = 'galiu';
}

$velai = rand(0, 1);
$girtas = rand(0, 1);


if ($velai && $girtas) {
    $velgir = 'miegosi ant sofos';
} elseif ($velai && !$girtas) {
    $velgir = 'negrizai girtas';
} elseif (!$velai && $girtas) {
$velgir = 'nemiegosi ant sofos nes negrizai velai';
} else {
    $velgir = 'nemiegosi ten';
}


;
?>

<html>
    <head>
        <title>asa</title>
    </head>
    <body>
        <p>
            <?php print $velgir; ?>
        </p>
    </body>
</html>



