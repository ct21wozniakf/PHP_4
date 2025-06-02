<h1>Nowy wiersz w tabeli <em>Stanowiska</em></h1>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $NAZWA = $_POST["NAZWA"] ? htmlspecialchars(trim($_POST["NAZWA"])): "";

    $query = "INSERT INTO stanowiska (Nazwa) VALUES ('$NAZWA');";

    if (mysqli_query($conn, $query)) {
        ?>
        <H4 style="color: greenyellow">Dane dodane pomyślnie!</H4>
        <?php
     } else {
       ?>
       <h4 style="color: red;">Dane nie zostały dodane!</h4>
       <?php
     }
}
else{
?>


<form action="tungtungtungsahur.php?podstrona=stanowiska_dodaj" method="post">

    <table>
        <tr>
            <td><label for="id_stanowisko">Id_stanowisko</label></td>
            <td><input type="text" name="id_stanowisko" id="id_stanowisko" disabled></td>
        </tr>
        <tr>
            <td><label for="nazwa">Nazwa</label></td>
            <td><input type="text" name="NAZWA" id="nazwa" required></td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="2"><input type="submit" value="Dodaj"></td>
        </tr>
    </table>


<?php } ?>

<a href="tungtungtungsahur.php?podstrona=stanowiska">Powrót do pliku stanowiska</a>
</form>