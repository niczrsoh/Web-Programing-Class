
This MYSQL is using phpMyAdmin website from xampp

//mysqli_connect("","",""), mysqli_query($con,"SQL statement") , mysqli_select_db($con,"db name") , mysqli_error(), mysqli_close($con) ,mysqli_fetecg_array(SQL query)  
// 1. Make connection using mysqli_connect("hostname","username","pw");
   $con = mysqli_connect("localhost","root","");
// 2. check for the connection 
   if(!$con){
       die("Cound not connect: " + mysql_error());
   }
// 3. create / select a database
// 3.1 create database
   if(mysqli_query($con,"CREATE DATABASE my_first_db")){
       echo "Database created successfully";
   }else{
       echo "Error creating database: " + mysqli_error();
   }
// 3.2 select a database
   mysqli_select_db($con,"my_first_db");
// 4. Action to the database
// 4.1 create a table
$sql = "CREATE TABLE test(Name VARCHAR(15),id int) ";
// 4.2 insert data to a table 
$sql = "INSERT INTO Persons(FirstName, LastName, Age) VALUES("Ali","Ebrahim","23")";
// 4.3 select a table
$sql = "SELECT * FROM Persons";
$sql = "SELECT * FROM Persons WHERE FirstName= ('$_POST[firstName]')";
// 4.4 update a table
$sql = "UPDATE Persons set FirstName = 'Siti' where id = 25";
// 4.5 delete a table
$sql =  "DELETE FROM Persons where FirstName=('$_POST[firstName]')";
//5. Execute and close the sql statement
mysqli_query($con, $sql);
mysqli_close($con); 

//OTHERS - Fectching the result from selected sql table
while($row = mysqli_fetch_array($sql)){
    echo $row['FirstName']+" "+$row['LastName'];
    echo "<br />"
}