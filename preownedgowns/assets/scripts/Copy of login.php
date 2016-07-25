<?php
// Connect to server and select databse.
$link = mysql_connect("preownedgownsdb.db.6391935.hostedresource.com", "preownedgownsdb", "Ericryan1")or die("cannot connect");
mysql_select_db("preownedgownsdb")or die("cannot select DB");

// Define $myusername and $mypassword
$email=$_POST['Email'];
$password=$_POST['Password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);

$result = mysql_query("SELECT * FROM User WHERE Email='$email' and Password='$password' and Status='activated'");
$count = mysql_num_rows($result);

//This checks to see if there was a match which means everything the user typed
//in was correct and matched everything in the database
if($count == 1){
header("location:/member?id=success");
}
else
{
header("location:/login?id=epicfail");
}
mysql_close($link);
?>