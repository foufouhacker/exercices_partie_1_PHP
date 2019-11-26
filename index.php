<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--exercice 1-->
    <?php $name = 'objet'; 
    $name2 = 'message';
    echo $name . ' '. $name2;

/*exercice 2*/
    $lastname = ' Fouad ';
    $firstname = ' ALI ';
    $age = 12;

    echo $lastname. $age. $firstname;

/*exercice 3*/

$km = 1;
?>
<p><?= $km ?></p>
<?php
$km = 3;
?>
<p><?= $km ?></p>
<?php
$km = 125;
?>
<p><?= $km ?></p>
<?php


/*exercice 4*/
$name = 'fouad';
echo 'Bonjour' . ' '. $name . ' '. 'comment vas-tu ?';

/*exercice 5*/
$answer = 'yes';
if ($answer == 'yes') {
    echo 'vous avez répondu oui';
} else {
    echo 'vous avez répondu non';
}  

/*exercice 6*/
$number = 140 ;
$number = ($number + 30) / 2;
?>
<p><?= $number ?></p>




    
</body>
</html>