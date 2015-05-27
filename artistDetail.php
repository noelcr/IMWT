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
      <th width="176"><a href="indexnew.html" title="Home Page"><strong>HOME</strong></a><hr>
      </th>
      <th width="176">
       <a href="eventsnew.html" title=""><b>ARTISTS</b></a><hr>
	  </th>
      <th width="176">
       <a href="bulletinboardnew.html" title=""><b>EVENTS</b></a><hr>
      </th>
      <th width="176">
       <a href="" title=""><b>BULLETIN BOARD</b></a><hr>
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
        <li><a href="artistslist.php" title="Events list">VIEW ALL</a></li>
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
        <li><a href="sponsorsnew" title="">SPONSORS</a></li>
	    <li><a href="contactusnew" title="">CONTACT US</a></li>
	    <li><a href="" title="">ABOUT US</a></li>
       </ol>
      </td>
      <td>
       <ol>
        <li><a href="signin.php" title="">SIGN IN</a></li>
	    <li><a href="" title="">LOG OUT</a></li>
        <li><a href="" title="becomemember.php">BECOME A MEMBER</a></li>
       </ol>
      </td>
     </tr>
    </table>
    </div> <!-- end footersites div -->
   </div> <!-- end footermenu div -->
</body>
</html>