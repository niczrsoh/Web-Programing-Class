<?php 
$name = $_POST['name'];
$gender = $_POST['gender'];
$foods = $_POST['foods'];

echo "Your name is $name. <br>";
echo "You are $gender. <br>";
echo "Your favourite foods is/are ";
if(!empty($foods))
{
foreach($foods as $f)
echo "$f, ";
}
?>