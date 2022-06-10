<?php
$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}

/* select db */
mysqli_select_db($con,"my_first_db" );

/* insert data using form into tbl persons */
$sql="INSERT INTO Persons(FirstName, LastName, Age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error());
}
echo "1 record added";
mysqli_close($con)
?>