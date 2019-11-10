<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .danon{
            padding: 0;
            border: 0;
            box-shadow: none;
            background-color: white;
            cursor: pointer;
        }
        .hui2{
            margin-top: -22px;
            max-width: 100%;
        }
        body {
             background: darkslateblue; /* Цвет фона и путь к файлу */
             color: white; /* Цвет текста */
             font-family: "Roboto Thin";/*Cambria Math*/

         }

        a {
            color: white;
            font-size: 20px;
            text-decoration: none;
        }

        h2 {
            font-size: 25px;
        }

        p {
            font-size: 20px;
        }
        .qqq{
            margin-left: 300px;
            margin-top: -550px;
            font-size: 40px;
        }
        .cent{
            font-size: 60px;
            text-decoration-color: black;
        }
    </style>
    <title>Working</title>
</head>
<body>
<table>
    <tr class="hui">
        <td>
            <a href="NA.html"><img src="Ресурс 6.png"  height="222" width="235" class="hui"></a>
        </td>
        <td>
            <a href="NA.html"><img src="Ресурс 1.png" height="243" width="1080" class="hui2"></a>
        </td>
    </tr>
    <tr>
        <td>
            <a href=""><img src="Ресурс 21.png" height="80" width="136"/></a>
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
<p class="qqq">
<!--    Ваши данные.<bR>-->
    <?php
    $password5="";
    $login5="";
    $username3="qw";
    $password3="1";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "free_spiral";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //$mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
    $email5="syretr@zdhffh";
    //$stmt=$this->db->query("SELECT * FROM employer WHERE login=? AND password=?");
    //$stmt->bind_param("ss", $username3, $password3);
    $sql ="SElECT * FROM employer WHERE e_mail = '".$email5."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
//            echo "emyil: " . $row["e_mail"]. " <br> login: " . $row["login"]. "<br> password " . $row["password"]. "<br>";
            $login5= $row["e_mail"];
            $password5=$row["password"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</p>
<TABLE id="#magia" class="qqq">
    <tr>
        <td>
            ваша почта.
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo $email5 ;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            ваш пароль.
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo $password5;
            ?>
        </td>
    </tr>
    <tr>
    <tr>
        <td>
            хотите сменить пароль?
        </td>
    </tr>
    <tr>
        <td>
            <input type="password" name="password5" size="введите пароль" maxlength="32" class="cent">
        </td>
    </tr>
    <tr>
        <td>
            <input type="password" name="password52" size="введите пароль" maxlength="32" class="cent">
        </td>
    </tr>
    <tr>
        <td>
            <form>
                <a class="cent" href="php_php3.php">Закончить</a>
            </form>
        </td>
    </tr>
</TABLE>
</body>
</p>
</html>