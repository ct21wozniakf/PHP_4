<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 2px dotted skyblue;
            padding: 10px;
        }
        th{
            border: 2px dotted skyblue;
            padding: 10px;
        }
    </style>



</head>
<body>
   
<?php
$atomowe = array('1' => 'wodór', '2' => 'hel', '6' => 'węgiel', '8' => 'tlen', '26' => 'żelazo', );


?>

<pre><?php print_r($atomowe) ?></pre>
<table>
<tr><th>Pierwiastek</th><th>Liczba atomowa</th></tr>


<?php
arsort($atomowe);
foreach($atomowe as $a => $b) {
?>
<tr>
<td><?= $b ?></td>
<td><?= $a ?></td>
</tr>
<?php
}
?>
</tr>
</table>

</body>
</html>