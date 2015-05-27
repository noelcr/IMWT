<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="mainnew.css" rel="stylesheet" type="text/css">
<title>BECOME A MEMBER - Townsville Community Music Centre</title>
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
   <img id="banner" src="images/becomememberbanner.png" alt="">
   <ul id="breadcrumbs">
   <il><a id="breadcrumbs" href="indexnew.html">HOME</a></il>
   <il> > </il>
   <il><a id="breadcrumbs" href="becomemember.php">BECOME A MEMBER</a><il>
   </ul>
<p>
Individual Membership subscription is $25 per year.
<br>
<br>
You can support the Music Centre by becoming a Member and derive some benefits for yourself at the same time. Your subscription helps to keep us operating and we provide substantial discounts whenever possible.
<br>
<br>
For the Music Centre's own events, Members' ticket discounts can be as high as 50%!
<br>
<br>
The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</p><br>

<form action="dbprocessbecomemember.php" method="POST">
    <table>
        <tr> 
            <td><label for="emailaddress">E-Mail Address: </label></td>
            <td><input type="text" name="emailaddress" id="emailaddress"></td>
        </tr>
        <tr> 
            <td><label for="password">Password: </label></td>
            <td><input type="text" name="password" id="password"></td>
        </tr>
        <tr> 
            <td><label for="firstname">First Name:  </label></td>
            <td><input type="text" name="firstname" id="firstname"></td>
        </tr>
        <tr> 
            <td><label for="surname">Surname: </label></td>
            <td><input type="text" name="surname" id="surname"></td>
        </tr>
        <tr> 
            <td><label for="postaladdress">Postal Address: </label></td>
            <td><input type="text" name="postaladdress" id="postaladdress"></td>
        </tr>
        <tr> 
            <td><label for="phoneday">Phone Number (Day): </label></td>
            <td><input type="text" name="phoneday" id="phoneday"></td>
        </tr>
        <tr> 
            <td><label for="phoneday">Phone Number (After Hours): </label></td>
            <td><input type="text" name="phoneday" id="phoneday"><input type='checkbox' name='checkboxname01' value='2' id='checkbox01' /><label for="phonedaybox">Same As Day</label></td>
        </tr>
        <tr> 
            <td><label for="phoneday">Phone Number (Mobile): </label></td>
            <td><input type="text" name="phoneday" id="phoneday"><input type='checkbox' name='checkboxname02' value='2' id='checkbox02' /><label for="mobilebox">No Mobile</label></td></td>
        </tr>
     </table>
<br>
<input type="submit" value="Sign Up"/>
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