<?php
include("dbconnect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>ARTIST - Townsville Community Music Centre</title> 
</head>
 <body>
  <div id="header">
   <div id="headercolor">
    <div id="wrapper">
	  <div id="tcmclogo">
       <a href="indexnew.html" title="Home">
        <img src="images/tcmclogo.jpg" alt="The TCMC logo" height="100" width="150"></a>
      </div>
      <div id="memberbutton" title="Membership signup">
	   <img src="images/memberbutton.png" alt="Membership signup" height="55" width="300">
      </div>
      <div id="loginbutton" title="Current members">
       <img src="images/signinbutton.png" alt="To login page" height="55" width="300">
      </div>
      <div id="fblogo" title="TCMC Facebook">
       <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534">
        <img src="images/fblogo.png" alt="TCMC Facebook page" height="106" width="106"></a>
      </div>
	<div id="tagline1">
     <i>- “Promoting Local Music Culture<br> In The Townsville Area” -</i>
    </div>
    <div id="tagline2">
	 <i>Want Exclusive Discounts?</i>
    </div>
    </div>   
    </div> 
   </div> <!-- end of header div -->
  <div id="bodycontentAU">
   <div id="contentAU">
   <img id="banner" src="images/artistsbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="artistlist.html">ARTISTS</a><il>
   </ul>
<?php
echo "<table>";
$sql = "SELECT * FROM musicians";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td rowspan=2>";?> <img src="<?php echo $row[file]; ?>" <?php echo "</td>";
        echo "<td><b>"; echo "<a href="; ?>"<?php echo "artistDetail.php?id=$row[id]"; ?>"<?php echo ">"; echo $row[name];echo"</a>"; echo "</b></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
        echo "</tr>";
}
    echo "</table>"; 
?>   
<?php
    echo "<a href="; ?>"<?php echo "musicians.php"; ?>"<?php echo ">Add/Edit Artists</a>";                                  
?> 
</div>
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
