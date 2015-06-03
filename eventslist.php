<?php
include("dbconnect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>EVENTS - Townsville Community Music Centre</title> 
</head>
 <body>
  <div id="header">
   <div id="headercolor">
    <div id="wrapper">
	  <div id="tcmclogo">
       <a href="index.html" title="Home">
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
   <div id="contentAU">
   <img id="banner" src="images/eventsbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="index.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="eventslist.php">EVENTS</a><il>
   </ul>
<p><a id="registerlink" href="events.php">REGISTER YOUR EVENT!</a></p>
<?php
echo "<table>";
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td><b>"; echo "<a href="; ?>"<?php echo "eventsDetail.php?id=$row[id]"; ?>"<?php echo ">"; echo $row[name];echo"</a>"; echo "</b></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"; echo "<p>"; echo $row[location]; echo "</p>"; echo "</td>";
    echo "<td>"; echo "<p>"; echo $row[time]; echo "</p>"; echo "</td>";
    echo "</tr>";
}
    echo "</table>"; 
?>   
<?php
    echo "<a href="; ?>"<?php echo "events.php"; ?>"<?php echo ">Add/Edit Events</a>";                                  
?> 
<div id="footer">
        <div class="footerwrap">
            <div id="footer-menu">
   <div id= "footer-sites">
    <table width="1218" height="176">
     <tr>
      <th width="176"><a href="index.html" title="Home Page"><strong>HOME</strong></a><hr>
      </th>
      <th width="176">
       <a href="artistlist.php" title=""><b>ARTISTS</b></a><hr>
	  </th>
      <th width="176">
       <a href="bulletinboardnew.html" title=""><b>EVENTS</b></a><hr>
      </th>
      <th width="176">
       <a href="bulletinboardnew.html" title=""><b>BULLETIN BOARD</b></a><hr>
      </th>
      <th width="176">
       <a href="" title=""><b>CONTENT</b></a><hr>
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
        <li><a href="artistlist.php" title="Events list">VIEW ALL</a></li>
	    <li><a href="musicians.php" title="REGISTER">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="eventslist.php" title="">VIEW ALL</a></li>
	    <li><a href="registerlink.php" title="">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="" title="">VIEW ALL</a></li>
        <li><a href="" title="">REGISTER</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="sponsorsnew.html" title="">SPONSORS</a></li>
	    <li><a href="contactusnew.html" title="">CONTACT US</a></li>
	    <li><a href="aboutusnew.html" title="">ABOUT US</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="signin.php" title="">SIGN IN</a></li>
	    <li><a href="" title="">LOG OUT</a></li>
        <li><a href="becomemember.php" title="becomemember.php">BECOME A MEMBER</a></li>
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
