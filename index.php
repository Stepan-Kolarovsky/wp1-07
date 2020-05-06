<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$age = 40;
$height = 180;

        if (($age <= 10) && ($height <= 140) || ($age >= 65)) {
            $entryfee = 60;
        } elseif ( ($age >= 15) && ($age <= 26) ) {
            $entryfee = 80;
        } else {
            $entryfee = 120;
        }
          

?>

<h1> Je ti <?= $age?> let a měříš <?= $height?>cm, tak platíš <?= $entryfee?> Kč. </h1>

</body>
</html>