<?php
try {
    $dbh = new PDO("sqlite:users/users.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>