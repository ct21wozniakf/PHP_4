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
$sql = "SELECT SYGNATURA, TYTUL, CONCAT(IMIE, ' ', NAZWISKO) AS AUTOR, WYDAWNICTWO, ROK_WYD, CONCAT(FLOOR(CENA), ' zł ', LPAD(ROUND((CENA - FLOOR(CENA)) * 100), 2, '0'), ' gr') CENAW FROM KSIAZKI WHERE WYDAWNICTWO = 'PWN' AND ROK_WYD>1990 AND ROK_WYD<2011 OR WYDAWNICTWO = 'Helion' AND ROK_WYD>1990 AND ROK_WYD<2011 ORDER BY ROK_WYD ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?= $row["SYGNATURA"]?></td>
        <td><?= $row["TYTUL"]?></td>
        <td><?= $row["AUTOR"]?></td>
        <td><?= $row["WYDAWNICTWO"]?></td>
        <td><?= $row["ROK_WYD"]?></td>
        <td style="text-align: right;"><?= $row["CENAW"]?></td>


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