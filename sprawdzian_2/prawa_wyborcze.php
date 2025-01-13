<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        h1{
            color:brown;
            padding: 10px;
            border: 2px solid black;
        }
        h2{
            color:indigo;
            border: 2px dotted navy;
            padding: 10px;
        }

    </style>

</head>
<body>

<?php

$wiek= rand(0,100);

?>

<h1>Mam <?= $wiek ?> lat</h1>

<?php 

        if ($wiek < 18) {

?>

<h2>Jeszcze nie możesz głosować.</h2>

<?php 

    }

    elseif($wiek >= 18 && $wiek < 21 ) {
?>

<h2>Możesz tylko głosować.</h2>

<?php

    }

    elseif($wiek >= 21 && $wiek < 30 ) {
?>

<h2>Możesz głosować i kandydować do Sejmu.</h2>

<?php

    }

    elseif($wiek >= 30 && $wiek < 35 ) {
?>

<h2>Możesz głosować i kandydować do Sejmu i Senatu.</h2>

<?php

    }
    
    elseif($wiek >= 35 ) {
?>
        
<h2>Możesz głosować i kandydować do Sejmu i Senatu oraz na Prezydenta.</h2>
        
<?php
        
   }
        
?>








</body>
</html>
