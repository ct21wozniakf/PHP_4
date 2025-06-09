
    <h1>Tabela <i>działy</i></h1>
<?php 
$sql = "select count(Id_dzial) as liczba from dzialy;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_assoc($result)) {
    ?>
<p>Tabela ma <?= $row["liczba"]?> wierszy</p>
<?php
}
} else {
echo "ni ma";
}
?>

<table>
<?php
$sql = "select * from dzialy;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Id_dzial</th>
    <th>Nazwa</th>
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <th><a class="ups" href="tungtungtungsahur.php?podstrona=dzialy_dodaj">╰⋃╯</a></th>
    <?php } else { }?>
</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_dzial"]?></td>
    <td><?= $row["Nazwa"]?></td>
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <td><a class="ups" href="tungtungtungsahur.php?podstrona=dzialy_edytuj&id=<?=$row['Id_dzial']?>&dzialy=<?= $row['Nazwa'] ?>">edycja </a><a class="ups" href="tungtungtungsahur.php?podstrona=dzialy_usun&id=<?=$row['Id_dzial']?>&dzialy=<?= $row['Nazwa'] ?>">usuń</a></td>
    <?php } else { }?>
</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
