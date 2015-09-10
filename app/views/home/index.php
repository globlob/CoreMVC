<?php
if($_GET['lang'] == 'tr') include 'app/lang/tr.php';
else include 'app/lang/eng.php';
?>
<html>
    <head>
        <title><?=$lang['Wc'].", ".$lang['Welcome']?></title>
        <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        <style>
            body{
                font-family: 'Raleway', sans-serif;
            }
            .welcome{
                padding-top: 17%;
                padding-bottom: 0px;
            }
            .text span{
                color: #00b96d;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            <div align="center"><img src="http://localhost/core/public/assets/img/logo.png"></div>
        </div>
        <div align="center"class="text">
            <h1><?=$lang['Wc'].", ".$lang['Welcome']?></h1>
            <h4><?=$lang['altText']?></h4>
            <h4><span><a href="?lang=tr">TR</a></span></h4>

        </div>
    </body>
</html>