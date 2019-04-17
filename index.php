<?php
date_default_timezone_set('europe/vilnius')
?>
<html>
    <head>
        <meta charset="8">
        <title>PHP lydes ir </title>    
    </head>
    <body style='background-color: rgb(<?php print rand(000, 255) . ',' . rand(000, 255) . ',' . rand(000, 255); ?>)'>
        <h1 style="font-size: <?php print rand(0, 300); ?>%">
            As keiciu savo dydi!
        </h1>
        <p style="color: rgb(<?php print rand(000, 255) . ',' . rand(000, 255) . ',' . rand(000, 255); ?>); font-size: <?php print rand(0, 300); ?>%">
            As keiciu savo spalva!
        </p>
        <img src="dice/<?php print rand(1, 6); ?>.png">
    </body>
</html>

