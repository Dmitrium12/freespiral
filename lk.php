<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    Это личный кабинет.
</h1>
<table>
    <tr>
        <td>

        </td>
    </tr>
</table>
<p class="qaz">
<?php
    $email="hts@tzh";
    $mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
    $mysqli->query('SELECT * FROM employer  e_mail = (".email.")');
    $mysqli->close();
   ?>
</p>
</body>
</html>