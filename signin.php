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
   <img id="banner" src="images/signinbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="signin.php">SIGN IN</a><il>
   </ul>
<form action="dbprocesssignin.php" method="POST">
    <table>
        <tr> 
            <td><label for="username">Username: </label></td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr> 
            <td><label for="password">Password: </label></td>
            <td><input type="text" name="password" id="password"></td>
        </tr>
     </table>
<input type="submit" value="Sign-In"/>
</form>
</div>
<hr><!-- do not delete -->
</div><!-- end of bodycontent div -->
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