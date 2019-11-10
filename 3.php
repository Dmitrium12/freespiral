<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .danon{
            padding: 0;
            border: 0;
            box-shadow: none;
            background-color: white;
            cursor: pointer;
        }
        body {
            background: white; /* Цвет фона и путь к файлу */
            color: black; /* Цвет текста */
            font-family: "Regular";
        }
        .hui{
            max-width: 100%;
        }
        body {
             background: darkslateblue; /* Цвет фона и путь к файлу */
             color: white; /* Цвет текста */
             font-family: "Roboto Thin";/*Cambria Math*/

         }
        a {
            color: white;
            text-decoration: none;
        }
        h2 {
            font-size: 25px;
        }
        p {
            font-size: 15px;
        }
    </style>
    <title>Working</title>
</head>
<body>
<table>
    <tr class="hui">
        <td>
            <a href="NA.html"><img src="Ресурс 6.png" height="220" width="220" class="hui"></a>
        </td>
        <td>
            <a href="NA.html"><img src="Ресурс 1.png" height="222" width="1080" class="hui"></a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="lk.php"><img src="Ресурс 21.png" height="80" width="136"/></a>
        </td>
    </tr>
    <tr>
        <td>
            <a href=""><img src="Ресурс 20.png" height="80" width="136"/></a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="pomoch.html"><img src="Ресурс 18.png" height="80" width="136"/></a>
        </td>
    </tr>
    <tr>
        <td>
            <button id="techSupportBtn" class="danon"><img src="Ресурс 17.png" height="80" width="136"/></button>
        </td>
    </tr>
    <tr>
        <td>
            <a href="P.K..html"><img src="Ресурс 15.png" height="80" width="136"/></a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="NA.html"><img src="Ресурс 16.png" height="80" width="136"/></a>
        </td>
    </tr>
</table>
<p class="qaz">
    <?php
    $login=$_REQUEST["login"];
    $password=$_REQUEST["password"];
    $email=$_REQUEST["e-mail"];
    $datta=$_REQUEST["date"];
    $ima=$_REQUEST["ima"];
    $familia=$_REQUEST["familia"];
    $mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
    $mysqli->query('INSERT INTO worer (e_mail, login, password, datta, familia, ima) VALUES ("'.$email.'", "'.$login.'", "'.$password.'", "'.$datta.'", "'.$familia.'", "'.$ima.'")');
    $mysqli->close();
    ?>
</p>
<script src="gh.js"></script>
</body>
</html>