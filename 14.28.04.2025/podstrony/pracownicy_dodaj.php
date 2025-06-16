<h1>Nowy wiersz w tabeli <em>Pracownicy</em></h1>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $NAZWA = $_POST["NAZWA"] ? htmlspecialchars(trim($_POST["NAZWA"])): "";
    $IMIE = $_POST["IMIE"] ? htmlspecialchars(trim($_POST["IMIE"])): "";
    $NAZWISKO = $_POST["NAZWISKO"] ? htmlspecialchars(trim($_POST["NAZWISKO"])): "";
    $MIASTO = $_POST["MIASTO"] ? htmlspecialchars(trim($_POST["MIASTO"])): "";
    $WYNAGRODZENIE = $_POST["WYNAGRODZENIE"] ? htmlspecialchars(trim($_POST["WYNAGRODZENIE"])): "";
    $DATA = $_POST["DATA"] ? htmlspecialchars(trim($_POST["DATA"])): "";

    $query = "INSERT INTO pracownicy (`Nazwisko`, `Imie`, `stanowiska.Nazwa as nazwa`, `Miasto`, `Data_zatrudnienia`, `Wynagrodzenie`) VALUES ('$NAZWISKO','$IMIE','$NAZWA','$MIASTO','$DATA','$WYNAGRODZENIE');";

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


<form action="tungtungtungsahur.php?podstrona=pracownicy_dodaj" method="post">

    <table>
        <tr>
            <td><label for="id_dzial">Id_pracownika</label></td>
            <td><input type="text" name="id_pracownika" id="id_pracownika" disabled></td>
        </tr>
        <tr>
            <td><label for="nazwisko">Nazwisko</label></td>
            <td><input type="text" name="NAZWISKO" id="nazwisko" required></td>
        </tr>
        <tr>
            <td><label for="imie">Imie</label></td>
            <td><input type="text" name="IMIE" id="imie" required></td>
        </tr>
        <tr>
            <td><label for="nazwa">Id_stanowisko</label></td>
            <td><input type="text" name="NAZWA" id="nazwa" required></td>
        </tr>
        <tr>
            <td><label for="miasto">Miasto</label></td>
            <td><input type="text" name="MIASTO" id="miasto" required></td>
        </tr>
        <tr>
            <td><label for="data">Data_zatrudnenia</label></td>
            <td><input type="text" name="DATA" id="data" required></td>
        </tr>
        <tr>
            <td><label for="wynagrodzenie">Wynagrodzenie</label></td>
            <td><input type="text" name="WYNAGRODZENIE" id="wynagrodzenie" required></td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="2"><input type="submit" value="Wyślij"></td>
        </tr>
    </table>


<?php } ?>

<a href="tungtungtungsahur.php?podstrona=pracownicy">Powrót do pliku pracownicy</a>
</form>