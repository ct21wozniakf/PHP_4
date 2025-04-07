<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th,td{
            border: 1px solid black;
            padding: 2px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
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
<table>
<?php
$sql = "SELECT NR_TRANSAKCJI, DATA_WYPOZYCZENIA, DATA_ZWROTU, DATEDIFF(IF(DATA_ZWROTU IS NULL, NOW(), DATA_ZWROTU), DATA_WYPOZYCZENIA) AS LICZBA_DNI FROM WYPOZYCZENIA ORDER BY LICZBA_DNI ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Numer transakcji</th>
        <th>Data wypożyczenia</th>
        <th>Data zwrócenia</th>
        <th>Liczba dni</th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?= $row["NR_TRANSAKCJI"]?></td>
        <td><?= $row["DATA_WYPOZYCZENIA"]?></td>
        <td><?= $row["DATA_ZWROTU"]?></td>
        <td><?= $row["LICZBA_DNI"]?></td>
    </tr>   

<?php
  }
} else {
  echo "ni ma";
}

mysqli_close($conn);
?>
</table>
</body>
</html>