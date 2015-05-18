<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
        <header>
        <div id="headercontainer">
        <div id="header01">
    <img src="images/artistsbanner.jpg">
        </div>
        </div>
    </header>
<body>
<?php
echo "<table>";
$sql = "SELECT * FROM musicians";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td rowspan=2>";?> <img src="<?php echo $row[file]; ?>" height="100" width="100" <?php echo "</td>";
        echo "<td><b>"; echo $row[name]; echo "</b></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
        echo "</tr>";
}
    echo "</table>";
?>
</body>
    <footer>
<div id= "footer">
      <div id="footercontainer">
      <div id="footerlinks">
      <p><a href=""><b>ARTISTS</b></a>
      <hr>
      <a href="">SEARCH</a>
      <a href="">LATEST</a>
      <a href="">GENRES</a>
      <a href="">NAMES A-Z</a></p>
      </div>
      <div id="footerlinks">
      <p><a href=""><b>EVENTS</b></a>
      <hr>
      <a href="">ALL</a>
      <a href="">LATEST</a>
      </div>
      <div id="footerlinks">
      <p><a href=""><b>BULLETIN</b></a>
      <hr>
      <a href="">JOB OFFERS</a>
      <a href="">TUTORING</a>
      <a href="">EXPRESSION</a>
      </div>
      <div id="footerlinks">
      <p><a href=""><b>SPONSORS</b></a>
      <hr>
      <a href="">LIST</a>
      </div>
      <div id="footerlinks">
      <p><a href=""><b>CONTACT US</b></a>
      <hr>
      <a href="">E-MAIL</a>
      <a href="">PHONE</a>
      <a href="">POSTAL</a>
      <a href="">ADDRESS</a>
      </div>
      <div id="footerlinks">
      <p><a href=""><b>ABOUT US</b></a>
      <hr>
      <a href="">HISTORY</a>
      <a href="">TIMELINE</a>
      </div>
      </div>
      </div>
</footer>
</html>
