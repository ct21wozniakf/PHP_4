
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
</tr>
<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?= $row["Id_dzial"]?></td>
    <td><?= $row["Nazwa"]?></td>

</tr>   

<?php
}
} else {
echo "ni ma";
}
?>

</table>
