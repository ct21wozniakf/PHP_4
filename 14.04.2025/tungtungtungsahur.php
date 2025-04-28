<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="row">

    <?php require 'db/connect.php'; ?>

  <div class="kolumna lewa">
        <div class="linki"><a class="link" href="tungtungtungsahur.php?podstrona=glowna">Strona Główna</a></div>
        <div class="linki"><a class="link" href="tungtungtungsahur.php?podstrona=czytelnicy">Tabela Czytelnicy</a></div>
        <div class="linki"><a class="link" href="tungtungtungsahur.php?podstrona=dzialy">Tabela Działy</a></div>
        <div class="linki"><a class="link" href="tungtungtungsahur.php?podstrona=ksiazki">Tabela Książki</a></div>
  </div>


  <div class="kolumna prawa">

<?php    
        if (isset($_GET['podstrona']))
        {
            if (file_exists('podstrony/' . $_GET['podstrona'] . '.php'))
            {
                include 'podstrony/' . $_GET['podstrona'] . '.php';
            }
            else
            {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        }
        else
        {
            include 'podstrony/glowna.php';
        }

        ?>
  </div>
  <?php require 'db/disconnect.php'; ?>
</div>
        
</body>
</html>