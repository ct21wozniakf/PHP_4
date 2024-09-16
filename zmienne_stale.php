<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>

</head>
<body>
<?php $integer=56;
    $float='532,56';
    $string= '231dwf';
    $boolean= true; ?>
<?php echo "echo dla ciągu znaków:$string" ?>
<br>
<?php echo "echo dla liczb całkowitych:$integer" ?>
<br>
<?php echo "echo dla liczb zmiennoprzecinkowych:$float" ?>
<br>
<?php echo "echo dla boolean:$boolean" ?>
<br>
<p> var_dump dla ciągu znaków: <?php var_dump($string) ?></p>
<p> var_dump dla liczb całkowitych: <?php var_dump($integer)?></p>
<p> var_dump dla liczb zmiennoprzecinkowych: <?php var_dump($float)?></p>
<p> var_dump dla boolean: <?php var_dump($boolean)?></p>

<?php define("stala", "elo");
      define("stala2", "dz314i");?>
      
<p><?php print (stala)?></p>
<p><?php var_export(stala2)?></p>
      
      





</body>
</html>