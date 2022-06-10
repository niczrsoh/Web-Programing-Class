<?php

$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}


// query create table in my_db1
mysqli_select_db($con, "my_first_db");
$sql = "CREATE TABLE test
(
Name varchar(15),
id int
)";

// Execute query
mysqli_query($con,$sql);

mysqli_close($con);
?>