<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php
$servername = "localhost";
$username = "wozniak";
$password = "marcelsala123";
$dbname = "wozniak";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Nie przeszło: " . mysqli_connect_error());
}
echo "Połączono !!!";
?>

<br>

<?php
$sql = "SELECT TYTUL, IMIE, NAZWISKO, WYDAWNICTWO, MIEJSCE_WYD, ROK_WYD, OBJETOSC_KS, CENA, DZIALY.NAZWA AS DZIAL FROM KSIAZKI INNER JOIN DZIALY ON KSIAZKI.ID_DZIAL = DZIALY.ID_DZIAL";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
        <p>"<?= $row["TYTUL"] ?>" <?= $row["IMIE"] ?> <?= $row["NAZWISKO"] ?>, wydawnictwo <?= $row["WYDAWNICTWO"] ?> (<?= $row["MIEJSCE_WYD"] ?> <?= $row["ROK_WYD"] ?>), <?= $row["OBJETOSC_KS"] ?>str. Cena: <?= $row["CENA"] ?> zł (dział: <?= $row["DZIAL"] ?>)</p>
    <?php
  }
} else {
  echo "ni ma";
}

mysqli_close($conn);
?>

</body>
</html>