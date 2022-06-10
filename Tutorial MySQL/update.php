<?php
//connection to server
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
//select the database
mysqli_select_db($con,"my_first_db");
// The SQL statement that deletes the record
$result = "UPDATE Persons set LastName='Lim' where FirstName='James'";
mysqli_query($con,$result);
// Close the database connection
mysqli_close($con);
?>