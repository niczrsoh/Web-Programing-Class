<?php
 
	  include('config.php');


$sql = "CREATE TABLE user
        (
 		username varchar(100),
 		password varchar(12),
		level int(3)
        )";

if (mysql_query($sql,$conn))
{
  echo "<br />Table User created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($conn);
?>