<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding:20px;
        }
legend{
    border-left: 3px solid limegreen;
    border-right: 3px solid limegreen;
}
fieldset{
    border: 3px solid limegreen;
}
        </style>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Najlepszy rok w muzyce</legend>
            <lebel for="rok">Wybierz najlepszy rok w muzyce:</label> <select required name="rok" id="rok">
                <option value=""></option>
                <?php foreach (range(1500,2000) as $rok){
                    $selected = $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['rok'] == $rok ? 'selected' : ''; ?>
                    <option <?= $selected ?> value="<?= $rok ?>"><?= $rok ?></option>
                    <?php
                }
                ?>
                </select>
<br>
<input type="submit" value="Wybierz najlepszy rok dla muzyki">
            </form>
            <?php if (isset($_POST['rok'])) {?><br>
                <?php echo 'Według ciebie najlepszym rokiem w muzyce był rok: ', $_POST['rok'], ".";
            }?>
            </fieldset>
                
        

</body>
</html>