<?php
$login2=$_REQUEST["login2"];
$password2=$_REQUEST["password2"];
$email2=$_REQUEST["e-mail2"];
$datta2=$_REQUEST["date2"];
$ima2=$_REQUEST["ima2"];
$familia2=$_REQUEST["familia2"];
$information=$_REQUEST["info"];
if(!empty($login2) && !empty($password2))
{
    $mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
    if (mysqli_connect_errno())
    {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
    $mysqli->query('INSERT INTO employer (datta, e_mail, familia, ima, login, password, information) VALUES ("'.$datta2.'", "'.$email2.'", "'.$familia2.'", "'.$ima2.'", "'.$login2.'", "'.$password2.'","'.$information.'")');
    $mysqli->close();
    include "32.php";
}else
    {
        include "gh2.html";
    }