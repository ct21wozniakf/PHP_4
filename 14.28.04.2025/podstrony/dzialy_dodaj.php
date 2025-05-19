<h1>Nowy wiersz w tabeli <em>Działy</em></h1>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $NAZWA = $_POST["NAZWA"] ? htmlspecialchars(trim($_POST["NAZWA"])): "";

    $query = "INSERT INTO dzialy (Nazwa) VALUES ('$NAZWA');";

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


<form action="tungtungtungsahur.php?podstrona=dzialy_dodaj" method="post">

    <table>
        <tr>
            <td><label for="id_dzial">Id_dzial</label></td>
            <td><input type="text" name="id_dzial" id="id_dzial" disabled></td>
        </tr>
        <tr>
            <td><label for="nazwa">Nazwa</label></td>
            <td><input type="text" name="NAZWA" id="nazwa" required></td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="2"><input type="submit" value="Wyślij"></td>
        </tr>
    </table>


<?php } ?>

<a href="tungtungtungsahur.php?podstrona=dzialy">Powrót do pliku działy</a>
</form>