<?php
session_start();
mysql_connect('mysql13.000webhost.com', 'a2670376_Users', 'PASSWORD') or     die(mysql_error());
mysql_select_db("a2670376_Pass") or die(mysql_error());
$id = (int)$_SESSION["id"] = $_SESSION['id'];

$username = mysql_real_escape_string($_POST["username"]);
$fname = mysql_real_escape_string($_POST["fname"]);
$email = mysql_real_escape_string($_POST["email"]);
$password = mysql_real_escape_string($_POST["password"]);


$query="UPDATE members
SET username = '$username', fname = '$fname', email = '$email', password = '$password'
WHERE id = '$id'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
echo "<p>($id) Record Updated<p>";
}else{
echo "<p>($id) Not Updated $_SESSION[username]<p>";
}
?> 