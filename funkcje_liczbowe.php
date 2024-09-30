<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
    <title>Funkcjie Liijczbowe</title>
    <style>
        p {
            color: aliceblue; background-color: darkblue;
        }
    </style>
</head>
<body>

<p>Funkcja abs dla liczby -5 zwraca wynik: <b><?= abs(-5) ?></b></p>
<p>Funkcja min dla zestawu 0,150,30,20,-8,-200 zwraca wynik: <b><?= min(0,150,30,20,-8,-200)?></b></p>
<p>Funkcja min dla zestawu 0,150,30,20,-8,-200 zwraca wynik: <b><?= max(0,150,30,20,-8,-200)?></b></p>
<p>Funkcja pi zwraca wynik: <b><?= pi() ?></b></p>
<p>Funkcja round dla 3,4 zwraca wynik: <b><?= round(3.4) ?></b></p>
<p>Funkcja round dla 3,6 zwraca wynik: <b><?= round(3.6) ?></b></p>
<p>Funkcja round dla 5,045 zwraca wynik: <b><?= round(5.045, 2) ?></b></p>
<p>Funkcja round dla 5,055 zwraca wynik: <b><?= round(5.055, 2) ?></b></p>
<p>Funkcja rand dla liczb z przedziału od 900 do 1000 zwraca wynik: <b><?= rand(900,1000) ?></b></p>
<p>Funkcja sqrt dla liczby 0 zwraca wynik: <b><?= sqrt(0)?></b></p>
<p>Funkcja sqrt dla liczby 64 zwraca wynik: <b><?= sqrt(64)?></b></p>
<p>Funkcja sqrt dla liczby 256 zwraca wynik: <b><?= sqrt(256)?></b></p>
<p>Funkcja sqrt dla liczby 65536 zwraca wynik: <b><?= sqrt(65536)?></b></p>

</body>
</html>