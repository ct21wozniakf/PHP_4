<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<ol>    
<?php

$numbers = array(rand(0,99), rand(0, 99),  rand(0, 99),  rand(0, 99),  rand(0, 99));

rsort($numbers); 

foreach($numbers as $n) {
?>
<li style="list-style-type: upper-roman"><?= $n?></li>

<?php } ?>
</ol>
</body>
</html>