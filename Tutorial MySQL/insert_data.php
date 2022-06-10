<?php
/*connect to localhost*/
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}

/* select db */
mysqli_select_db($con,"my_first_db");

/*insert two records of data into table persons */ 
mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin', '35')");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire', '33')");

mysqli_close($con);
?>