<?php 

$lygine = date('s');
$even = $lygine % 2;


if ($even == 0) {
    $css_class = 'kvadratas';
    $text = 'lyginis';
} else {
    $css_class = 'apskritimas';
    $text = 'nelyginis';
}
?>

<html>
    <head>
        <title>abac</title>
        <meta http-equiv="refresh" content="1">
        <meta charset="UTF-8">
        <style type="text/css">
            .kvadratas {
                height: 250px;
                width: 250px;
                background-color: red;
                box-shadow: 50px 50px aqua;
            }
            .apskritimas {
                height: 250px;
                width: 250px;
                background-color: blue;
                border-radius: 50%;
                box-shadow: 50px 50px black;
            }
            .cent {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: center;
                align-content: center;
            }
            .centr {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: center;
                align-content: center;
                height: 500px;
            }
        </style>
    </head>
    <body>
        <div class="container centr">
        <div class="<?php print $css_class ;?> cent"><?php print $text ;?></div>
        </div>
    </body>
</html>

