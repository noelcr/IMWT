<?php
try {
    $dbh = new PDO("sqlite:tcmcdatabase.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>