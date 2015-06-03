<?php
try {
    $dbh = new PDO("sqlite:tcmcdatabase/tcmcdatabase.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>