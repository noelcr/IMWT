<?php
include("dbconnect.php");
include 'wideimage/WideImage.php';

$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM events WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: events.php"); // NOTE: This must be done before ANY html is output, which is why it's right at the top!
/*	else
		// set message to be printed on appropriate (results) page
*/
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>Events - TCMC</title>
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
<div id="bodycontentAU">
   <div id="contentAU">
   <img id="banner" src="images/eventsbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="eventslist.php">EVENTS</a><il>
   </ul>
    <h1>Results</h1><br>
<p><a href="artistlist.php">Return to Artists page</a></p>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO events (name, description, location, time) VALUES ('$_REQUEST[name]', '$_REQUEST[info]', '$_REQUEST[location]', '$_REQUEST[time]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted";
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM events WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE events SET name = '$_REQUEST[name]', description = '$_REQUEST[description]', location = '$_REQUEST[location]', time = '$_REQUEST[time]' WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[name]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

echo "<h2>Events in Database Now</h2>\n";
$sql = "SELECT * FROM events";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " Events in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row[name] . "<br />\n";
}
$dbh = null;
?>
</div>
       </div>
</div> <!-- end of boxcontent div -->
<br>
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