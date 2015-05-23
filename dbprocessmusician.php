<?php
include("dbconnect.php");
include 'wideimage/WideImage.php';


$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM musicians WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: musicians.php"); // NOTE: This must be done before ANY html is output, which is why it's right at the top!
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
    <h1>Results</h1><br>
<p><a href="artistlist.php">Return to Artists page</a></p>
<?php
print_r($_FILES);
echo "</pre>\n";
if ((($_FILES["imagefile"]["type"] == "image/gif")
|| ($_FILES["imagefile"]["type"] == "image/jpeg")
|| ($_FILES["imagefile"]["type"] == "image/pjpeg"))
&& ($_FILES["imagefile"]["size"] < 2000000))
{
	if ($_FILES["imagefile"]["error"] > 0)
	{
		echo "Error Code: " . $_FILES["imagefile"]["error"] . "<br />";
	}
	else
	{
		echo "<p>Upload: " . $_FILES["imagefile"]["name"] . "<br />\n";
		echo "MIME Type: " . $_FILES["imagefile"]["type"] . "<br />\n";
		echo "Size: " . round($_FILES["imagefile"]["size"] / 1024, 1) . " KB<br />\n";
		echo "Temp file: " . $_FILES["imagefile"]["tmp_name"] . "</p>\n";
		if (file_exists("images/" . $_FILES["imagefile"]["name"]))
		{
			echo $_FILES["imagefile"]["name"] . " already exists. \n";
		}
		else
		{
			$newName = time() . $_FILES["imagefile"]["name"];
            $newFullName = "images/{$newName}";
			move_uploaded_file($_FILES["imagefile"]["tmp_name"], $newFullName);
			chmod($newFullName, 0644);
			echo "Stored original as: $newFullName<br />\n";
            $size = getimagesize($newFullName);
            echo "<img src=\"$newFullName\" " . $size[3] . " /><br />\n";
            if (isset($_REQUEST['thumbnailChoice']))
            {
                $image = WideImage::load($newFullName);
                $thumbnailImage = $image->resize(200, 200);
                $thumbFullName = "images/thumb{$newName}";
                $thumbnailImage->saveToFile($thumbFullName);
                echo "Stored thumnail as: $thumbFullName<br />\n";
                $size = getimagesize($thumbFullName);
                echo "<img src=\"$thumbFullName\" " . $size[3] . " /><br />\n";
            }
		}
	}
}
else
{
	echo "Invalid file";
}
?>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO musicians (name, description, file, instrument, genre, feature) VALUES ('$_REQUEST[name]', '$_REQUEST[info]', '$thumbFullName', '$_REQUEST[instrument]', '$_REQUEST[genre]', '$_REQUEST[feature]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted";
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM musicians WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE musicians SET name = '$_REQUEST[name]', description = '$_REQUEST[description]', instrument = '$_REQUEST[instrument]', genre = '$_REQUEST[genre]' WHERE id = '$_REQUEST[id]'";
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

echo "<h2>Musicians in Database Now</h2>\n";
$sql = "SELECT * FROM musicians";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " musicians in table<br />\n";
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