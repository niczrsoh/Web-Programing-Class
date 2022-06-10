<?php
//create server connection
$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
//create DB
if (mysqli_query($con,"CREATE DATABASE my_first_db"))
{
echo "Database created successfully";
}
else
{
echo "Error creating database: " . mysqli_error();
}
mysqli_close($con);
?>

