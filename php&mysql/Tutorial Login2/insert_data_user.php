	<HTML>
	<HEAD><TITLE>Insert User</TITLE></HEAD>
	<BODY>

	  <?php


		 require_once ("config.php");
		//input user set from code. suppose u need change to user input
	     $sql = "insert into user(username, password, level) values ('user_1','password_1',1)";
		 $query = mysql_query($sql);//excute query insert into table user

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

		 $sql = "insert into user(username, password, level) values ('user_2','password_2',2)";
		 $query = mysql_query($sql);

	     if (!$query) die("SQL query error encountered: ".mysql_error() );		 

	     mysql_close($conn);
	   ?>

	<BR><BR>
	<B> Insertion was successful</B>
	<BR><BR>
	   

	</BODY>
	</HTML>
