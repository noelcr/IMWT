<?php
include("dbconnect.php");
require("authenticate.php"); 
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER YOUR EVENT! - Townsville Community Music Centre</title>
    <link rel="stylesheet" href="mainnew.css">
</head>
<body>
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
	 <i>Want Exclusive Discounts?</i>
    </div>
    <div id="tagline3">
	 <i>Already A Member?</i>
    </div>
    </div>   
    </div> 
   </div> <!-- end of header div -->
<div id="bodycontentSPO">
<div id="contentSPO">
   <img id="banner" src="images/eventsbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="eventslist.php">EVENTS</a><il>
   <il> > </il>
   <il><a id="breadcrumbs" href="events.php">REGISTER YOUR EVENT</a><il>
   </ul>
    <h1>Events Database</h1>
    
    <form id="insert" name="insert" method="post" action="dbprocessevents.php" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />

    <fieldset class="subtleSet">
    <h2>Insert new Events:</h2>
    <table>
        <tr> 
            <td><label for="name">Name: </label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>   
            <td><label for="description">Description: </label></td>
            <td><textarea type="text" name="info" id="info"></textarea></td>
        </tr>
        <tr>  
            <td><label for="location">Location: </label></td>
            <td><input type="text" name="location" id="location"></td>
        </tr>
        <tr>  
            <td><label for="time">Time of Events: </label></td>
            <td><input type="text" name="time" id="time"></td>
        </tr>
       <tr> 
            <td><input type="submit" name="submit" id="submit" value="Insert Entry"></td>
        </tr>
</table>
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessevents.php">
<?php
	echo "<input type='text' name='name' value='$row[name]'/> <input type='textarea' name='description' value='$row[description]' /> <input type='textarea' name='description' value='$row[location]' /><input type='text' name='instrument' value='$row[time]' /> \n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
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
