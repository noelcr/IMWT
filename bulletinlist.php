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
  <div id="header">
   <div id="headercolor">
    <div id="wrapper">
	  <div id="tcmclogo">
       <a href="indexnew.html" title="Home">
        <img src="images/tcmclogo.jpg" alt="The TCMC logo"></a>
      </div>
      <div id="memberbutton" title="Become A Member">
      <a href="becomemember.php">
	   <img src="images/memberbutton.png" alt="Membership signup">
      </a>
      </div>
      <div id="loginbutton" title="Sign In">
      <a href="signin.php">
       <img src="images/signinbutton.png" alt="To login page">
      </a>
      </div>
      <div id="fblogo" title="TCMC Facebook">
       <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534">
        <img src="images/fblogo.png" alt="TCMC Facebook page"></a>
      </div>
	<div id="tagline1">
     <i>- “Promoting Local Music Culture In The Townsville Area” -</i>
    </div>
    <div id="tagline2">
	 <i>Want Ticket Discounts?</i>
    </div>
    <div id="tagline3">
	 <i>Already A Member?</i>
    </div>
    </div>   
    </div> 
   </div> <!-- end of header div -->
  <div id="bodycontentAU">
   <img id="banner" src="images/bulletinboardbanner.jpg" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="bulletinlist.php">BULLETIN BOARD</a><il>
   </ul>
<p><a id="registerlink" href="bulletin.php">Write a Bulletin!</a></p>
<?php
echo "<table>";
$sql = "SELECT * FROM bulletin";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td><b><a>"; echo $row[name]; echo "</a></b></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
        echo "</tr>";
}
    echo "</table>"; 
?>
</div>
<hr><!-- do not delete -->
</div> <!-- end of boxcontent div -->
   <div id="footer">
        <div class="footerwrap">
            <div id="footer-menu">
   <div id= "footer-sites">
    <table width="1218" height="176">
     <tr>
      <th width="176"><a href="index.html" title="Home Page"><strong>HOME</strong></a><hr>
      </th>
      <th width="176">
       <a href="artistlist.php" title="View All Artists"><b>ARTISTS</b></a><hr>
	  </th>
      <th width="176">
       <a href="eventslist.php" title="View All Events"><b>EVENTS</b></a><hr>
      </th>
      <th width="176">
       <a href="bulletinlist.php" title="View All Bulletin Posts"><b>BULLETIN BOARD</b></a><hr>
      </th>
      <th width="176">
       <a href="" title="Content"><b>CONTENT</b></a><hr>
      </th>
      <th width="176">
       <a href="" title="Members"><b>MEMBERS</b></a><hr>
      </th>
     </tr>
     <tr>
      <td>
       <ol>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="artistlist.php" title="View All Artists">VIEW ALL</a></li>
	    <li><a href="musicians.php" title="Register Your Artist">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="eventslist.php" title="View All Events">VIEW ALL</a></li>
	    <li><a href="registerlink.php" title="Register Your Event">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="bulletinlist.php" title="View All Bulletin Posts">VIEW ALL</a></li>
        <li><a href="bulletin.php" title="Register Your Bulletin Post">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="sponsors.html" title="View TCMC's Sponsors">SPONSORS</a></li>
	    <li><a href="contactus.html" title="Our Address and Contact Information">CONTACT US</a></li>
	    <li><a href="aboutus.html" title="The History of TCMC">ABOUT US</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="signin.php" title="Sign In For Existing Members">SIGN IN</a></li>
	    <li><a href="logout.php" title="Log Out">LOG OUT</a></li>
        <li><a href="becomemember.php" title="Become A Member">BECOME A MEMBER</a></li>
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
