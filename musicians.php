<?php
include("dbconnect.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="main.css" rel="stylesheet" type="text/css">
<title>Artists - TCMC</title>
</head>
<header>
<div id="header">
<div id="header01">
<a href="index.html"><img src="images/tcmclogo.jpg" alt=""></a>
</div>
<div id="header02">
<i> - “Promoting Local Music Culture In The Townsville Area” - </i>
<div id="header03">
Want Exclusive Discounts?
<br>
<br>
<img src="images/memberbutton.jpg" alt=""> 
</div>
    
<div id="header04">
<img src="images/signinbutton.jpg" alt="">
</div>
    
<div id="header05">
<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/fblogo.jpg" alt=""></a>
</div>
</div>
</header>
<body>
<img src="images/artistsbanner.jpg" width="75%" alt="" img style="margin:0px auto;display:block">
<div id="bodywrapper">
<ul id="breadcrumbs">
<il><a id="breadcrumbs" href="index.html">HOME</a></il>
<il> > </il>
<il><a id="breadcrumbs" href="artists.html">ABOUT US</a></il>
<il> > </il>
<il><a id="breadcrumbs" href="artists.html">ABOUT US</a></il>
</ul>
    <h1>Register Your Act!!!</h1>
    
    <form id="insert" name="insert" method="post" action="dbprocessmusician.php" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />

    <fieldset class="subtleSet">
    <h2>Insert new Musicians:</h2>
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
            <td><label for="file">Image:</label></td>
            <td><input type="file" name="imagefile" id="imagefile"/></td>
            <td>    <input type="checkbox" name="thumbnailChoice" id="thumbnailChoice" checked="checked">
    <label for="thumbnailChoice">Create Thumbnail?</label></td>
        </tr>
        <tr>  
            <td><label for="instrument">Instrument: </label></td>
            <td><input type="text" name="instrument" id="instrument"></td>
        </tr>
        <tr>  
            <td><label for="genre">Genre: </label></td>
            <td><input type="text" name="genre" id="genre"></td>
        </tr>
        <tr>
            <td><label for='feature'>Feature this artist</label></td>
            <td><input type="radio" name="feature" value="Featured">Featured<br>
                <input type="radio" name="feature" value="Not_Featured">Not Featured</td>
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
$sql = "SELECT * FROM musicians";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessmusician.php">
<?php
	echo "<input type='text' name='name' value='$row[name]'/> <input type='textarea' name='description' value='$row[description]' /> <input type='textarea' name='description' value='$row[file]' /><input type='text' name='instrument' value='$row[instrument]' /> <input type='text' name='genre' value='$row[genre]' /><input type='textarea' name='description' value='$row[feature]' /> \n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
$dbh = null;
?>
</body>
<footer>
<div id= "footer">
<div id="footercontainer">
<div id="footerlinks01">
<a href="artists.html"><b>ARTISTS</b></a>
<hr>
<a href="">SEARCH</a>
<a href="">LATEST</a>
<a href="">GENRES</a>
<a href="">NAMES A-Z</a></p>
</div>
<div id="footerlinks02">
<a href="events.html"><b>EVENTS</b></a>
<hr>
<a href="">ALL</a>
<a href="">LATEST</a>
</div>
<div id="footerlinks03">
<a href="bulletin"><b>BULLETIN</b></a>
<hr>
<a href="">JOB OFFERS</a>
<a href="">TUTORING</a>
<a href="">EXPRESSION</a>
</div>
<div id="footerlinks04">
<a href="sponsors.html"><b>SPONSORS</b></a>
<hr>
<a href="sponsors.html">LIST</a>
</div>
<div id="footerlinks05">
<a href="contactus.html"><b>CONTACT US</b></a>
<hr>
<a href="">E-MAIL</a>
<a href="">PHONE</a>
<a href="">POSTAL</a>
<a href="">ADDRESS</a>
</div>
<div id="footerlinks06">
<a href=""><b>ABOUT US</b></a>
<hr>
<a href="">HISTORY</a>
<a href="">TIMELINE</a>
</div>
</div>
</div>
</footer>
</html>