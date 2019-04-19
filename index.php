<?php
$sunny = rand(0,1);
$rain = rand(0,1);

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
    </head>
    <body>
        <div class="container">
            <div class="<?php print $css_class ;?>">
                <h1><?php print $textone ;?></h1>
            </div>
        </div>
    </body>
</html>



