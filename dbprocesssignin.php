<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>SIGN IN - Townsville Community Music Centre</title>
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
   <img id="banner" src="images/signinbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="signin.php">SIGN IN</a><il>
   </ul>
<?php
$username = $_POST['username'];
$username = $_POST['password'];
if ($username == 'admin' AND $password== 'password'){
	echo "Successful Sign-In";
}
else {
	echo "The username or password you entered is invalid. Please try again.";
}
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
   <div id="copyright">
    site design &copy; 2015 Chilly IT Group
   </div>
   </div> <!-- end of footerwrap div -->
   </div> <!-- end of footer div -->
</body>
</html>