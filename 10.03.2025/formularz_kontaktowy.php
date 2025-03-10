<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .czerwo{
            color: red;
        }
        form{
            background-color: lightskyblue;
        }
    </style>
</head>
<body>
    
<?php
        $FULLNAMEERROR = "";
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if($_POST["imie"] == "")
            {
            $FULLNAMEERROR = "To pole musi zawierać conajmniej dwa wyrazy";
            }
        }


?>




<form method="$_POST">

<label for="imie">Imię i nazwisko <span class="czerwo">*</span></label>
<br>
<input class="<?= EMPTY($FULLNAMEERROR)? '' : 'BORDER_RED' ?>" required type="text" id="imie" name="imie">
<p><?= $FULLNAMEERROR?></p>

<label for="mail">Adres email <span class="czerwo">*</span></label>
<br>
<input class="<?= EMPTY($FULLNAMEERROR)? '' : 'BORDER_RED' ?>" required type="email" id="mail">
<p> </p>

<label for="wiek">Przedział wiekowy <span class="czerwo">*</span></label>
<br>
<select class="<?= EMPTY($FULLNAMEERROR)? '' : 'BORDER_RED' ?>" id="wiek">
<option value="0" hidden></option>
<option value="25">do 25</option>
<option value="2550">25-50</option>
<option value="5075">50-75</option>
<option value="75">powyżej 75</option>
</select>
<br>
<p> </p>

<label for="wiadomosc">Wiadomość <span class="czerwo">*</span></label>
<br>
<textarea minlength="10" class="<?= EMPTY($FULLNAMEERROR)? '' : 'BORDER_RED' ?>" required id="wiadomosc"></textarea>
<p> </p>

<input class="<?= EMPTY($FULLNAMEERROR)? '' : 'BORDER_RED' ?>" required type="checkbox" id="zgoda"> 
<label for="zgoda">Zgoda na przetwarzanie danych <span class="czerwo">*</span></label>
<p> </p><br>

<input type="submit" value="Wyślij">
<p> </p>

</form>



</body>
</html>