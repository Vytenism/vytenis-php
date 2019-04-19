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

    
$weather = rand(0,1);

    if ($weather) { 
        $css_class = 'sunny';
        $tekstas = 'sunny';
    } else {
        $css_class = 'cloudy';
        $tekstas = 'cloudy';
    }
    
$sunny = rand(0,1);
$rain = rand(0,1);

if ($sunny && $rain) {
    $css_class = 'rainbow';
    $textone = 'Rainbow';
} elseif ($sunny && !$rain) {
    $css_class = 'sunny';
    $textone = 'Sunny';
} elseif (!$sunny && $rain) {
    $css_class = 'rain';
    $textone = 'Rain';
} else {
    $css_class = 'cloudy';
    $textone = 'cloudy';
}

if ($sunny && $rain) {
    $css_class = 'fas fa-rainbow';
    $textone = 'Rainbow';
} elseif ($sunny && !$rain) {
    $css_class = 'fal fa-sun';
    $textone = 'Sunny';
} elseif (!$sunny && $rain) {
    $css_class = 'fas fa-raindrops';
    $textone = 'Rain';
} else {
    $css_class = 'far fa-clouds';
    $textone = 'cloudy';
}
?>

<html>
    <head>
        <title>asa</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
            .sunny {
                background-image: url('http://icons.iconarchive.com/icons/icons-land/weather/256/Sunny-icon.png');
                width: 150px;
                height: 150px;
                background-repeat: no-repeat;
            }
            .cloudy {
                background-image: url('https://www.wpclipart.com/weather/weather_icons/weather_icons_2/cloudy.png');
                width: 150px;
                height: 150px;
                background-repeat: no-repeat;
            }
            .rain {
                background-image: url('http://pngimg.com/uploads/rain/rain_PNG13468.png');
                width: 150px;
                height: 150px;
                background-repeat: no-repeat;
            }
            .rainbow {
                background-image: url('https://png.pngtree.com/element_pic/16/06/06/105754dac13509c.jpg');
                width: 150px;
                height: 150px;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="<?php print $css_class ;?>">
                <p><?php print $textone ;?></p>
            </div>
        </div>
    </body>
</html>



