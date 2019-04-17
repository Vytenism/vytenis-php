<?php 

    $integer1 = rand(1,100);
    $integer2 = rand(101,200);
    $integer3 = rand(201,300);
    $integer4 = rand(301,400);
    
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
    <div>
        <h1>Skolos skaicuokle</h1>
        <h3>Jei paemei <?php print $integer1;?> jievru</h3>
        <h3>Su dviem kabanciais grazinsi <?php print $integer3;?></h3>
        <h3>Su vienu kabanciu grazinsi <?php print $integer2;?></h3>
    </div>
    </body>
</html>