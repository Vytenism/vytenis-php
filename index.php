<html>
    <head>
        <meta charset="8">
        <title>PHP lydes ir <?php print date('l', strtotime('+24 hours')); ?></title>    
    </head>
    <body>
        <h1>Vytenis - PHP su manim buvo ir <?php print date('h', strtotime('-1 hours')) . ' valanda'; ?> </h1>
        <p><?php print date('Y', strtotime('next year')); ?> uz kalnu!</p>
    </body>
</html>
