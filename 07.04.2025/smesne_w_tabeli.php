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
$sql = "SELECT SYGNATURA, TYTUL, CONCAT(IMIE, ' ', NAZWISKO) AS AUTOR, DZIALY.NAZWA AS DZIAL, WYDAWNICTWO, ROK_WYD, OBJETOSC_KS, CENA FROM KSIAZKI INNER JOIN DZIALY ON KSIAZKI.ID_DZIAL = DZIALY.ID_DZIAL WHERE OBJETOSC_KS>500 ORDER BY OBJETOSC_KS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Dział</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Liczba stron</th>
        <th>Cena</th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["SYGNATURA"]?></td>
        <td><?= $row["TYTUL"]?></td>
        <td><?= $row["AUTOR"]?></td>
        <td><?= $row["DZIAL"]?></td>
        <TD><?= $row["WYDAWNICTWO"]?></TD>
        <TD><?= $row["ROK_WYD"]?></TD>
        <TD><?= $row["OBJETOSC_KS"]?></TD>
        <TD><?= $row["CENA"]?></TD>
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