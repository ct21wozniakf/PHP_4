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
$sql = "SELECT Tytul, Imie, Nazwisko FROM ksiazki";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
        <p>Książka "<em><?= $row["Tytul"] ?></em>" została napisana przez <b><?= $row["Imie"] ?>  <?= $row['Nazwisko'] ?></b></p>
    <?php
  }
} else {
  echo "ni ma";
}

mysqli_close($conn);
?>

</body>
</html>