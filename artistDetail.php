<?php
include("dbconnect.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>Artists - TCMC</title>
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
   <il><a id="breadcrumbs" href="artistlist.php">ARTISTS</a><il>
   </ul>
<?php
$sql = "SELECT * FROM musicians WHERE id = '$_REQUEST[id]'";
foreach ($dbh->query($sql) as $row)
{}
?>
<?php
echo "<h1>"; echo "$row[name]"; echo "<h1>";
echo "<img src= $row[file]>";
echo "<p> $row[description] </p>";

/*<?php echo "$_REQUEST[id]";
echo "<table>";
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
?> 
<?php
    echo "<a href="; ?>"<?php echo "musicians.php"; ?>"<?php echo ">Edit Artists</a>";      */                             
?>
</div>
</div> <!-- end of boxcontent div -->
       <div id="footer">
        <div class="footerwrap">
            <div id="footer-menu">
   <div id= "footer-sites">
    <table width="1218" height="176">
     <tr>
      <th width="176"><a href="artistsnew.html" title="All artists"><strong>ARTISTS</strong></a><hr>
      </th>
      <th width="176">
       <a href="eventsnew.html" title="Current and future events"><b>EVENTS</b></a><hr>
	  </th>
      <th width="176">
       <a href="bulletinboardnew.html" title="Current jobs, tutoring"><b>BULLETIN BOARD</b></a><hr>
      </th>
      <th width="176">
       <a href="sponsorsnew.html" title="Our sponsers"><b>SPONSORS</b></a><hr>
      </th>
      <th width="176">
       <a href="contactusnew.html" title="Get in contact"><b>CONTACT US</b></a><hr>
      </th>
      <th width="176">
       <a href="aboutusnew.html" title="Who are we?"><b>ABOUT US</b></a><hr>
      </th>
     </tr>
     <tr>
      <td>
       <ol>
	    <li><a href="" title="">SEARCH</a></li>
	    <li><a href="" title="">LATEST</a></li>
	    <li><a href="" title="">GENRES</a></li>
	    <li><a href="" title="">NAMES A-Z</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="" title="Events list">ALL</a></li>
	    <li><a href="" title="">LATEST</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="" title="">JOB OFFERS</a></li>
	    <li><a href="" title="">TUTORING</a></li>
	    <li><a href="" title="">EXPRESSION</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="sponsors.html" title="">LIST</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="" title="">E-MAIL</a></li>
	    <li><a href="" title="">PHONE</a></li>
	    <li><a href="" title="">POSTAL</a></li>
	    <li><a href="" title="">ADDRESS</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="" title="">HISTORY</a></li>
	    <li><a href="" title="">TIMELINE</a></li>
       </ol>
      </td>
     </tr>
    </table>
    </div> <!-- end footersites div -->
   </div> <!-- end footermenu div -->
   <div id="copyright">
    site design &copy; 2015 Chilly IT Group
   </div>
   </div> <!-- end of footerwrap div -->
   </div> <!-- end of footer div -->
</body>
</html>