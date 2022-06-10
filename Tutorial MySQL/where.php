<?php
//connection to server
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
//select the dbase
mysqli_select_db($con,"my_first_db");

//filter Peter only
$result = mysqli_query($con,"SELECT * FROM Persons where firstname = 'Peter'");

//OR selects all the data stored in the "Persons" table, and sorts the result by the "Age" column
//$result = mysql_query("SELECT * FROM Persons ORDER BY age");
while($row = mysqli_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br/>";
}
mysqli_close($con);
?>