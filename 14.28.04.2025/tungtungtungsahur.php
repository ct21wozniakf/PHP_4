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
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'glowna' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=glowna">Strona <i>Główna</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'czytelnicy' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=czytelnicy">Tabela <i>Czytelnicy</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=dzialy">Tabela <i>Działy</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'ksiazki' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=ksiazki">Tabela <i>Książki</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'pracownicy' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=pracownicy">Tabela <i>Pracownicy</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'stanowiska' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=stanowiska">Tabela <i>Stanowiska</i></a></div>
        <div class="linki"><a class="link <?= ($_GET['podstrona'] ?? '') == 'wypozyczenia' ? 'active' : '' ?>" href="tungtungtungsahur.php?podstrona=wypozyczenia">Tabela <i>Wypożyczenia</i></a></div>
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