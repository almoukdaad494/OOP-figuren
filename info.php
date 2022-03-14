<?php

$figuur=$_GET['figuur'];

$Nameparentclass=get_parent_class($figuur);

require_once($figuur.".class.php");

$lengte=$_GET["lengte"] ?? 0;

$breedte=$_GET["breedte"] ?? 0;

$hoogte=$_GET['hoogte'] ?? 0;



$obj2=new $figuur($lengte, $breedte,$hoogte);

$Nameparentclass=get_parent_class($figuur);



var_dump($_GET);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($_GET as $key => $value){ ?>
        <?= $key ?> : <?= $value ?> </br>
    <?php } ?>




    <?php if($Nameparentclass=="Tweedim"){ ?>

    Omtrek: <?= $obj2->Showomtrek(); ?> </br>
    Oppervlakte: <?= $obj2->showOppervlakte(); ?> </br>

    <?php } else if ($Nameparentclass=="Driedim"){ ?>
        Inhoud: <?= $obj2->showInhoud(); ?> </br>
        Oppervlakte: <?= $obj2->showOppervlakte(); ?> </br>

    <?php } ?>


</body>
</html>