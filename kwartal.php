<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>


</head>
<body>

<?php
$miesiac = rand(1,15)
?>

<h1 style="text-align: center; border-top: 4px dotted pink; border-bottom: 4px dotted pink"><?= $miesiac ?></h1>

<h3 style="text-align: center; border-top: 2px dashed pink; border-bottom: 2px dashed pink; font-family:cursive">
    <?php switch($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "I kwartał";
        break;    
    case 4:
    case 5:
    case 6:
        echo "II kwartał";
        break;    
    case 7:
    case 8:
    case 9:
        echo "III kwartał";
        break;    
    case 10:
    case 11:
    case 12:
        echo "IV kwartał";
        break;    
    case 13:
    case 14:
    case 15:
        echo "Błędny numer miesiąca";
        break;


    }
    ?></h3>



</h3>
</body>
</html>