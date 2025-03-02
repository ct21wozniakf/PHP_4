<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona glowna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include 'menu.php' ?>
    <h1 style="font-family:'Courier New', Courier, monospace">Strona Główna </h1>
  <p>Jakie powinno być dobre hasło?</p> 
  <pre>
    <?php print_r($_COOKIE)?>
  </pre>
<?php include 'stopka.php'; ?>
</body>
</html>