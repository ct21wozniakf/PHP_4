<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid lightgray;
            padding: 7px;
        }

        .guzik {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <table>
        <caption>
            Oceny
        </caption>

        <label for=""></label>
        <?php
        for ($i = 1; $i < 51; $i++) {
            echo "<tr>";
            echo "<td>" . '<label for=' . $i . '>' . "Uczeń" . '</label>' . "</td>";
            echo "<td>" . '<input type="text"  . " name="' . $i . '" id="' . $i . '">' . "</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td colspan="2"><input type="submit" value="Zapisz" class="guzik"></td>
        </tr>


    </table>
</body>

</html>