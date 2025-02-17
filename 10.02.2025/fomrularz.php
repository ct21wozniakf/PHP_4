<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{padding:20px;}
        </style>
</head>
<body>

 <?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "Oto twoj wybor: " . $_POST['kasa'] . ' ' . $_POST['waluta']; 

 

 
 } else {?>
    <form method="post">
        <label for='kasa' >Podaj kwote </label>
        <input id='kasa' name='kasa' type='number'><br>
        <label for='waluta' >Wybierz walute </label>
        <select id="waluta" name="waluta">
            <option></option>
            <option value="dolar">dolar</option>
            <option value="funt">funt</option>
            <option value="euro">euro</option>
            <option value="frank">frank</option>
 </select><br>
 <input type=submit value="Wyslij" >
 <?php }?>
</body>
</html>