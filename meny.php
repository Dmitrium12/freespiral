<?php
$mysqli = @new mysqli('localhost', 'root', '', 'free_spiral');
 $mysqli->query('SELECT * FROM employer WHERE datta = \'septemberz\'; ');
    $mysqli->close();
?>