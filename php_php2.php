<?php
$password52=$_REQUEST["password2"];
$email5="syretr@zdhffh";
$login5=$_REQUEST["login5"];
$password5=$_REQUEST["password2"];
$email5=$_REQUEST["e-mail2"];
$datta2=$_REQUEST["date2"];
$ima2=$_REQUEST["ima2"];
$familia2=$_REQUEST["familia2"];
$information=$_REQUEST["info"];
$mysqli2 = @new mysqli('localhost', 'root', '', 'free_spiral');
if (mysqli_connect_errno())
{
    echo "Подключение невозможно: ".mysqli_connect_error();
}
if($password5=$password52)
{
    include "32.php";
    if(empty($password5))
    {

    }
    else{
        $mysqli2->query('UPDATE employer SET password = "'.$password5.'" WHERE e_mail = "syretr@zdhffh"');
    }
}
else
{
include "32.php";

}
//    $mysqli->query('INSERT INTO employer (datta, e_mail, familia, ima, login, password, information) VALUES ("'.$datta2.'", "'.$email2.'", "'.$familia2.'", "'.$ima2.'", "'.$login2.'", "'.$password2.'","'.$information.'")');
$mysqli2->close();