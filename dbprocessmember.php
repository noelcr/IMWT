<?php
include("dbconnectmembers.php");

$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM people WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: index.html"); 
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="main.css" rel="stylesheet" type="text/css">
<title>SIGN IN - Townsville Community Music Centre</title>
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
	   <img src="images/memberbutton.png" alt="Sign Up">
      </a>
      </div>
      <div id="loginbutton" title="Sign In">
      <a href="signin.php">
       <img src="images/signinbutton.png" alt="Sign In For Existing Users">
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
<div id="bodycontentSPO">
   <div id="contentSPO">
   <img src="images/signinbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="index.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="becomemember.php">BECOME A MEMBER</a><il>
   </ul>
<p><a href=".php">Registration Successful! Return to Home page!!</a></p>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO users (emailaddress, password, firstname, lastname, postaladdress, phonenumber, phoneafter, phonemobile) VALUES ('$_REQUEST[emailaddress]', '$_REQUEST[password]', '$_REQUEST[firstname]', '$_REQUEST[lastname]', '$_REQUEST[postaladdress]', '$_REQUEST[phonenumber]', '$_REQUEST[phoneafter]', '$_REQUEST[postaladdress]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted";
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM people WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE people SET emailaddress = '$_REQUEST[emailadddress]', password = '$_REQUEST[password]' WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[emailaddress]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";
echo "<h2>Member in Database Now</h2>\n";
$sql = "SELECT * FROM people";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " records in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row[emailaddress] . "<br />\n";
}
$dbh = null;
?>

</div>
<hr><!-- do not delete -->
</div><!-- end of bodycontent div -->
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
	    <li><a href="events.php" title="Register Your Event">REGISTER</a></li>
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