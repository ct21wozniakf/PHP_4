
    <h1>Autoryzacja</h1>

    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['login']=='wozniak' && $_POST['haslo']=='marcelsala123')
            { 
                $_SESSION['login']='wozniak';
                $_SESSION['login_status']='zalogowany';
                echo '<h4 style="color: green">Logowanie udane!</h4>';
            }
            else{
                Echo '<h4 style="color: red">Logowanie nieudane!</h4>';
            }
        }
                ?>


        <?php
            if(isset($_SESSION['login_status']) == 'zalogowany' && isset($_SESSION['login_status']) == 'zalogowany'){

                ?>

                <p style="color: green">Jesteś zalogowany jako <?= $_SESSION['login'] ?></p>

                <a href="tungtungtungsahur.php?podstrona=wyloguj">Wyloguj</a>
                <?php }
                else { ?>
    <table style="margin-left: 50px;">
    <form action="tungtungtungsahur.php?podstrona=logowanie" method="post">
    <tr>
        <td><label for="login">Login</label></td>
        <td><input type="text" name="login" id="login" placeholder="login" required></td>
    </tr>
    <tr>
        <td><label for="haslo">Hasło</label></td>
        <td><input type="password" name="haslo" id="haslo" placeholder="hasło" required></td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="2"><input type="submit" value="Zaloguj"></td>
    </tr>
    
                <?php } ?>

    </form>
    </table>