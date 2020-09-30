<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$nameLength = strlen($name);
$mailPos = strpos($mail,'@');
$mailPos2 = strpos($mail,'.');
$ageNumber = is_numeric($age);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
            <?php
            if($nameLength > 3 && $mailPos !== false && $mailPos2 !== false && $ageNumber !== false) {
                echo 'Autorizzazione Concessa';
            } else {
                echo 'Autorizzazione Negata';
            }
             ?>
        </h1>

    </body>
</html>
