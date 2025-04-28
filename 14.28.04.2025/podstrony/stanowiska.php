
<h1>Tabela <i>książki</i></h1>
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


</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_stanowisko"]?></td>
    <td><?= $row["Nazwa"]?></td>


</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
