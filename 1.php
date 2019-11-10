<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <style>
        .cent{
            margin-left: 480px;
            font-size: 30px;
        }
        .cent3{
            margin-left: 0px;
            font-size: 30px;
        }
        .cent2{
            margin-left: 460px;
            font-size: 35px;
            text-transform: unset;
            color: black;
            font-family: sans-serif;
        }
        body {
            background: #c7b39b ; /* Цвет фона и путь к файлу */
            color: #fff; /* Цвет текста */
        }
        .qaz{
            font-size: 30px;
        }
    </style>
</head>
<body>
<P
        class="cent2">Продолжим<br>
</P>
<p class="cent">
    имя<br>
</P>
<input type="text" name="ima" value="" size="20" maxlength="10" class="cent"><br>
<p class="cent">
    фамилия<br>
</p>
<input type="text" name="famulua" size="20" maxlength="10" class="cent"><br><br>
<input type="date" id="date" name="date" class="cent"/><br><br><br><br>
<form class="cent3">
    <a class="cent" href="3.php">Закончить</a>

</form>
<p class="qaz">
    <?php
    $login=$_REQUEST["login"];
    $password=$_REQUEST["password"];
    $email=$_REQUEST["e-mail"];
    $mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
    $mysqli->query('INSERT INTO worer (e_mail, login, password, datta, familia, ima) VALUES ("'.$email.'", "'.$login.'", "'.$password.'", "1111-11-11", "xb", "xfb")');
    $mysqli->close();
    ?>
</p>
</body>
</html>