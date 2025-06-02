<h1>Edycja w tabeli <em>Stanowiska</em></h1>
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $NAZWA = $_POST["NAZWA"] ? htmlspecialchars(trim($_POST["NAZWA"])): "";

    $query = "UPDATE `stanowiska` SET `Nazwa` = '".$NAZWA."'  WHERE `Id_stanowisko` = '".$_POST['id_stanowisko']."'";
    
    if (mysqli_query($conn, $query)) {
        ?>
        <H4 style="color: greenyellow">Dane zmienione pomyślnie!</H4>
        
        <form action="tungtungtungsahur.php?podstrona=stanowiska_edytuj" method="post">
        <table>
        <tr>
            <td><label for="id_stanowisko">Id_stanowisko</label></td>
            <td><input type="text" name="id_stanowisko" id="id_stanowisko" value="<?=$_POST['id_stanowisko']?>" readonly></td>
        </tr>
        <tr>
            <td><label for="NAZWA">Nazwa</label></td>
            <td><input type="text" name="NAZWA" id="NAZWA" value="<?=$NAZWA?>"></td>
        </tr>
        <tr>
             <td style="text-align: center;" colspan="2"><input type="submit" value="Zapisz dane"></td>
        </tr>
</form>
</table>

        <?php
     } else {
       ?>
       <h4 style="color: red;">Dane nie zostały zmienione!</h4>
       <?php
     }
} else {

?>

<form action="tungtungtungsahur.php?podstrona=stanowiska_edytuj" method="post">


    <table>
        <tr>
            <td><label for="id_stanowisko">Id_stanowisko</label></td>
            <td><input type="text" name="id_stanowisko" id="id_stanowisko" value="<?=$_GET['id'];?>" readonly></td>
        </tr>
        <tr>
            <td><label for="NAZWA">Nazwa</label></td>
            <td><input type="text" name="NAZWA" id="NAZWA" value="<?=$_GET['dzialy'];?>"></td>
        </tr>
        <tr>
             <td style="text-align: center;" colspan="2"><input type="submit" value="Zapisz dane"></td>
        </tr>
</form>
</table>

<?php
}

            
?>
<a href="tungtungtungsahur.php?podstrona=stanowiska">Powrót do pliku stanowiska</a>