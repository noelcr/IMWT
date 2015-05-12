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


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Results</h1>
<?php
/*
PHP File uploading example for CP2010
Lindsay Ward, 2014 (from various iterations over the years)

Note: with image resizing using WideImage library (requires GD): http://wideimage.sourceforge.net/

This script receives input from a form - with enctype="multipart/form-data" - 
and a form element: <input type="file" name="imagefile" id="imagefile" />  

As usual, this is a basic demonstration that you can customise to suit your design needs.
*/

// include the image library for resizing
// NOTE: Dreamweaver will not give you code completion for this library, but PHPStorm will.
//require("../wideimage/WideImage.php");

// first just print the data we have for this image so you know what's available
echo "<pre>";
print_r($_FILES);
echo "</pre>\n";

// check to see if the image is valid
// check MIME type (GIF or JPEG) and maximum upload size - see phpinfo() for the server's restriction
if ((($_FILES["imagefile"]["type"] == "image/gif")
|| ($_FILES["imagefile"]["type"] == "image/jpeg")
|| ($_FILES["imagefile"]["type"] == "image/pjpeg"))
&& ($_FILES["imagefile"]["size"] < 2000000))
{
    // check for any error code in the data
	if ($_FILES["imagefile"]["error"] > 0)
	{
		echo "Error Code: " . $_FILES["imagefile"]["error"] . "<br />";
	}
	else
	{
        // print some information again (in case you're interested in how even though the print_r() shows it above)
		echo "<p>Upload: " . $_FILES["imagefile"]["name"] . "<br />\n";
		echo "MIME Type: " . $_FILES["imagefile"]["type"] . "<br />\n";
		echo "Size: " . round($_FILES["imagefile"]["size"] / 1024, 1) . " KB<br />\n";
		// uploaded files are stored in a temporary location on the server until we move them (if we want to)
		echo "Temp file: " . $_FILES["imagefile"]["tmp_name"] . "</p>\n";
	
		// check to see if a file with that name already exists in our destination directory
		// you could rename the files so that this is not a concern (e.g. with a unique identify based on time or database details)
		// so this is just for demonstration purposes
		if (file_exists("images/" . $_FILES["imagefile"]["name"]))
		{
			echo $_FILES["imagefile"]["name"] . " already exists. \n";
		}
		else
		{
			// create a new unique filename using current time and existing filename
			$newName = time() . $_FILES["imagefile"]["name"];
            $newFullName = "images/{$newName}";
			// move the temporary file to the destination directory (images) and give it its new name
			move_uploaded_file($_FILES["imagefile"]["tmp_name"], $newFullName);
			// set the permission on the file
			chmod($newFullName, 0644);
			echo "Stored original as: $newFullName<br />\n";
			// at this point, we could save the filename to a database if we wanted to...
            $size = getimagesize($newFullName);
            echo "<img src=\"$newFullName\" " . $size[3] . " /><br />\n";
			
			// NOW, create a separate thumbnail from original image, if selected in form
            if (isset($_REQUEST['thumbnailChoice']))
            {
                // demo of the {} syntax as well...
                $image = WideImage::load($newFullName);
                // resize maintains aspect ratio, so the new image will fit within the rectangle defined by the parameters
                // you might like to use a constant for this size
                $thumbnailImage = $image->resize(300, 300);
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
	// generic error if initial test failed
	// you would turn this into more appropriate and user-friendly error messages
	echo "Invalid file";
}
?>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";
// execute the appropriate query based on which submit button (insert, delete or update) was clicked
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO musicians (name, description, file, instrument, genre, feature) VALUES ('$_REQUEST[name]', '$_REQUEST[info]', '$newFullName', '$_REQUEST[instrument]', '$_REQUEST[genre]', '$_REQUEST[feature]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable
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

// Basic select and display all contents from table 

echo "<h2>Musicians in Database Now</h2>\n";
$sql = "SELECT * FROM musicians";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
// one row at a time:
/*	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
	echo "<br />\n";
	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
*/
// all rows in one associative array
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

// close the database connection 
$dbh = null;
?>
<p><a href="musicians.php">Return to database test page</a></p>
</body>
</html>