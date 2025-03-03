<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    } else {
    }
    ?>
    <form method="post">
        <label for="nazwa">Nazwa</label>
        <input type="text" id="nazwa" name="nazwa" require value="favorite_movie">
        <br>
        <label for="ciastko">ciastko</label>
        <textarea name="ciastko" id="ciastko"></textarea>
        <br>
        <label for="wygasa">wygasa</label>
        <input type="number" value="60" name="wygasa" id="wygasa">
        <br>
        <input type="submit" value="Ustaw">
        <br>
        <a href="/sprawdzian3/strona_glowna.php">Strona główna</a>

    </form>


</body>

</html>