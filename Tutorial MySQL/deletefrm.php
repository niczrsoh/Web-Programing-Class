
<?php

//connection to server
$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}

//select the database
mysqli_select_db($con,"my_first_db");

// The SQL statement that deletes the record
$result = "DELETE FROM Persons where FirstName=('$_POST[firstname]')";
mysqli_query($con,$result);

// Close the database connection
mysqli_close($con);

?>

