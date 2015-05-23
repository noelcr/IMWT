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
<header>
    
<div id ="col1">
<a href="index.html"> <img src="images/tcmclogo.jpg" alt=""> </a>
</div>

<div id ="col2">
<i> - “Promoting Local Music Culture In The Townsville Area” - </i>
</div>
    
<div id ="col22">
    
    Information on the Townsville music community centre. Information on the Townsville music community centre. Information on the Townsville music community centre. Information on the Townsville music community centre
    
    </div>

<div id ="col3"> 
    
  
 </div>
    
<div id = "col33">

    <a href="signup.html"><img src="images/memberbutton.jpg" alt=""> </a>
    
    
</div>

 <div id ="col4">
  
</div> 
    
<div id = "col44">
   <img src="images/actbutton.jpg" alt="">
</div>
    
    

<div id ="col5">
<img src="images/fblogo.jpg" alt="">
</div>
</header>    
    
<body>
<br>
<div id="title">
<img src="images/artistsbanner.jpg" width="75%" alt="" img style="margin:0px auto;display:block">
</div>
<?php
echo "<table>";
$sql = "SELECT * FROM musicians";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    echo "<tr>";
        echo "<td rowspan=2>";?> <img src="<?php echo $row[file]; ?>" <?php echo "</td>";
        echo "<td><b>"; echo "<a href="; ?>"<?php echo "artistDetail.php?id=$row[id]"; ?>"<?php echo ">"; echo $row[name];echo"</a>"; echo "</b></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>"; echo "<p>"; echo $row[description]; echo "</p>"; echo "</td>";
        echo "</tr>";
}
    echo "</table>"; 
?>   
<?php
    echo "<a href="; ?>"<?php echo "musicians.php"; ?>"<?php echo ">Add/Edit Artists</a>";                                  
?> 
    <div id= "footer">
      <div id="footerlinks">
       <p><a href="index.html">HOME</a> - 
          <a href="artistlist.php">ARTISTS</a> - 
          <a href="events.html">EVENTS</a> - 
          <a href="bulletinboard.html">BULLETIN BOARDS</a> - 
          <a href="signup.html">SIGN UP</a> - 
          <a href="contactus.html">CONTACT US</a> -
          <a href="sponsors.html">SPONSERS</a></p>
      </div>
      <div id= "footerbase"><p>TCMC - &copy; 2015</p></div>
</div>
</body>
</html>
