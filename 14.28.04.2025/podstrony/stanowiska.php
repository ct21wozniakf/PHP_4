
<h1>Tabela <i>stanowiska</i></h1>
<?php 
$sql = "select count(Id_stanowisko) as liczba from stanowiska;";
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
$sql = "select * from stanowiska;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

<tr>
    <th>Id_stanowisko</th>
    <th>Nazwa</th>
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <th><a class="ups" href="tungtungtungsahur.php?podstrona=stanowiska_dodaj"><img width="35" height="35" src="https://cdn.pixabay.com/photo/2012/04/02/16/07/plus-24844_640.png" alt=""></a></th>
    <?php } else { }?>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_stanowisko"]?></td>
    <td><?= $row["Nazwa"]?></td>
    <?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){ ?>
    <td><a class="ups" href="tungtungtungsahur.php?podstrona=stanowiska_edytuj&id=<?=$row['Id_stanowisko']?>&dzialy=<?= $row['Nazwa'] ?>"><img width="35" height="35" src="https://www.svgrepo.com/show/451169/pencil-mark.svg" alt=""> </a><a class="ups" href="tungtungtungsahur.php?podstrona=stanowiska_usun&id=<?=$row['Id_stanowisko']?>&dzialy=<?= $row['Nazwa'] ?>"><img width="35" height="35" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Red_X.svg/2048px-Red_X.svg.png" alt=""></a></td>
    <?php } else { }?>

</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
