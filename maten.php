<?php

$figuur=$_GET['figuur'];

require_once($figuur.'.class.php');

echo $figuur;

$obj=new $figuur(0,0,0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="info.php" method="GET">
<input type="hidden"  name="figuur" value="<?= $figuur?>" >

    <?php foreach($obj->getMaatNamen() as $maat ){ ?>

        <?= $maat ?> <input type="text" name="<?= $maat ?>"></br>
    <?php } ?>

    <input type="submit" value="verzend">
</form> 

</body>
</html>
