<?php
include("dbconnect.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="main.css" rel="stylesheet" type="text/css">
<title>Artists - TCMC</title>
</head>
<header>
<div id="header">
<div id="header01">
<a href="index.html"><img src="images/tcmclogo.jpg" alt=""></a>
</div>
<div id="header02">
<i> - “Promoting Local Music Culture In The Townsville Area” - </i>
<div id="header03">
Want Exclusive Discounts?
<br>
<br>
<img src="images/memberbutton.jpg" alt=""> 
</div>
    
<div id="header04">
<img src="images/signinbutton.jpg" alt="">
</div>
    
<div id="header05">
<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/fblogo.jpg" alt=""></a>
</div>
</div>
</header>
<body>
<img src="images/artistsbanner.jpg" width="75%" alt="" img style="margin:0px auto;display:block">
<div id="bodywrapper">
<ul id="breadcrumbs">
<il><a id="breadcrumbs" href="index.html">HOME</a></il>
<il> > </il>
<il><a id="breadcrumbs" href="artists.html">ARTISTS</a></il>
</ul>
<?php
$sql = "SELECT * FROM musicians 
        WHERE id = '$row[id]'";
        
<?php echo "<h1>", $row[name], "<h1>";
/* echo "<table>";
$sql = "SELECT * FROM musicians";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td rowspan=2>";?> <img src="<?php echo $row[file]; ?>" <?php echo "</td>";
        echo "<td><b>"; echo "<a href="; ?>"<?php echo "artistDetail.php"; ?>"<?php echo ">"; echo $row[name];echo"</a>"; echo "</b></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
        echo "</tr>";
}
    echo "</table>"; 
?>  */ 
<?php
    echo "<a href="; ?>"<?php echo "musicians.php"; ?>"<?php echo ">Edit Artists</a>";                                  
?> 
</body>
<footer>
<div id= "footer">
<div id="footercontainer">
<div id="footerlinks01">
<a href="artists.html"><b>ARTISTS</b></a>
<hr>
<a href="">SEARCH</a>
<a href="">LATEST</a>
<a href="">GENRES</a>
<a href="">NAMES A-Z</a></p>
</div>
<div id="footerlinks02">
<a href="events.html"><b>EVENTS</b></a>
<hr>
<a href="">ALL</a>
<a href="">LATEST</a>
</div>
<div id="footerlinks03">
<a href="bulletin"><b>BULLETIN</b></a>
<hr>
<a href="">JOB OFFERS</a>
<a href="">TUTORING</a>
<a href="">EXPRESSION</a>
</div>
<div id="footerlinks04">
<a href="sponsors.html"><b>SPONSORS</b></a>
<hr>
<a href="sponsors.html">LIST</a>
</div>
<div id="footerlinks05">
<a href="contactus.html"><b>CONTACT US</b></a>
<hr>
<a href="">E-MAIL</a>
<a href="">PHONE</a>
<a href="">POSTAL</a>
<a href="">ADDRESS</a>
</div>
<div id="footerlinks06">
<a href=""><b>ABOUT US</b></a>
<hr>
<a href="">HISTORY</a>
<a href="">TIMELINE</a>
</div>
</div>
</div>
</footer>
</html>