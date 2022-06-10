<?php

$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}

/* --- can remove because db_nafbti is created by admin server already. 
if (mysql_query("CREATE DATABASE db_nafbti",$con))
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysql_error();
}
*/


// query create table in db_nafbti
mysqli_select_db($con,"my_first_db");

$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";

if (mysqli_query($con,$sql))
{
  echo "<br />Table Persons created";
}
else
{
  die('<br />Error creating table: ' . mysqli_error());
}

mysqli_close($con);
?>
