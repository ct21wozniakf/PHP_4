<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php
include 'menu.php';
?>
<br>
<h1>Tylko dla zalogowanych</h1>
<?php
if(isset($_SESSION["login_status"])) 
{
    include 'print_r.php';
}
else
{
    echo '<p>Nie jesteś zalogowany</p>';
}
?>

</body>
</html>