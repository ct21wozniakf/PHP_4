<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 3px solid pink;
        }

        label {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Miesiące</legend>
        <form method="post">

            <?php
            $miesiace = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"];

            foreach ($miesiace as $key => $value) {
                echo '<input type="checkbox" value="' . $value . '" name="' . $key . '" id="' . $value . '">';
                echo '<label for=' . $value . '>' . $value . '</label>';
            }

            ?>
            <br>
            <br>
            <input type="submit" value="Wybierz">
            <br>
            <br>
            <span>
                <?php

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (empty($_POST)) {
                        echo "Żaden miesiąc nie został wybrany";
                    } else
                        echo "Te miesiące zostały wybrane: ";
                    foreach ($_POST as $key => $value) {
                        echo $value . ', ';
                    }
                }
                ?>
            </span>
        </form>
    </fieldset>
</body>

</html>