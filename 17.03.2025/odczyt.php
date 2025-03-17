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
            background-color: darkgrey;
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
        .zmiany{
            width: 100%;
        }
        .guzik{
            background-color: darkgreen;
            color: white;
            border: 1px solid red;
            border-radius: 5px;
            font-size: large;
        }
    </style>
</head>
<body>
  
<?php
$o = $_GET['FILE'];

$b = str_replace("?"," ","$o");

$file = fopen("smesneplyky/$b", "r+");



?>

<fieldset>

<a href="scandir.php"><- Powrót do listy plików</a><br><br>

<div class="x">Zawartość pliku <span class="nazwa"><?= $b ?></span></div><br>


<br>
<?php
    if(isset($_POST['name'])!= ""){
?>
    <div>Plik <span class="nazwa"><?= $b ?></span> został zapisany </div>

<?php
}
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        fwrite($file, $name);
    }
    ?>
    <form action="odczyt.php?FILE=<?= $b ?>" method="post">
        <textarea class="zmiany" name="name" id=""><?php echo file_get_contents("smesneplyky/$b"); ?></textarea>
        <input class="guzik" type="reset" value="Anuluj"> <input class="guzik" type="submit" value="Zapisz">
</fieldset>

<?php fclose($file); ?>

</body>
</html>