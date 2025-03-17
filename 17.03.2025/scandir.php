<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: grey;
            color: white;
        }
        .x{
            font-weight: bold;
            font-size:xx-large;
            color: darkgreen;
        }
        fieldset{
            border: 10px solid green;
            border-radius: 10px;
        }


        .nazwa{
            background-color: white;
            border: 1px solid white;
            border-radius: 5px;
            color: cyan;
        }
    </style>
</head> 
<body>
    
<?php
$dir = "smesneplyky";

$a = scandir($dir);
?>

<fieldset>

<div class="x">Pliki w katalogu <span class="nazwa"><?= $dir ?></span></div><br>

<?php 
foreach($a as $plik){
    if($plik!='.' && $plik!='..'){
        ?>
    <a href="odczyt.php?FILE=<?=$plik?>"><span class="p"><?= $plik ?></span></a><span class="opa"><?= filesize($dir . '/' . $plik) . ' B'; ?></span><br><br>

    <?php
    }



}
?>

</fieldset>

</body>
</html>