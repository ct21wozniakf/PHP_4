<?php
    if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){


    session_destroy();
    session_unset()
    ?>
    <h4 style="color: red">Zostałeś wylogowany!</h4>
    <a href="tungtungtungsahur.php?podstrona=logowanie">Powrót do strony logowania</a>
    <?php } ?>