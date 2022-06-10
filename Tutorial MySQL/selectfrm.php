<?php
//connection to server
$con = mysqli_connect("localhost","test","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
//select the dbase
mysqli_select_db($con,"my_first_db");
$result = mysqli_query($con,"SELECT * FROM Persons where FirstName =('$_POST[firstname]')");
while($row = mysqli_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br/>";
}
mysqli_close($con);
?>