<?php
require("../wideimage/WideImage.php");
echo "<pre>";
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
	echo "Invalid file";
}
?>