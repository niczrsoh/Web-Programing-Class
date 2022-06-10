<?php

$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"my_first_db");

$result = mysqli_query($con,"SELECT * FROM Persons");
while($row = mysqli_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br />";
}
mysqli_close($con);
?>