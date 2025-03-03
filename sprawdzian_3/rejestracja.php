<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    fieldset{
        border: 4px solid yellowgreen;
    }
    
    </style>
</head>
<body>
    
<form action="rejestracja.php" method="$_POST">

<fieldset>
<legend>Rejestracja</legend>

<label for="login">Login: *</label><br>
<input required type="text" id="login"><br>

<label for="haslo">Hasło: *</label><br>
<input required type="password" id="haslo"><br>

<label for="rola">Wybierz jedną rolę: *</label><br>
<input required type="radio" name="rola" id="rola">Użytkownik</input><br>
<input required type="radio" name="rola" id="rola">Autor</input><br>
<input required type="radio" name="rola" id="rola">Redaktor</input><br>
<input required type="radio" name="rola" id="rola">Administrator</input><br>



<input type="submit" value="Zarejestruj">
</fieldset>



</form>


</body>
</html>