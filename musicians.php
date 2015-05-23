<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <h1>Musicians Database</h1>
    
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
// close the database connection
$dbh = null;
?>
</body>
</html>
