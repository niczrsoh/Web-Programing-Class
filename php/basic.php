<html>
 <head>
     <title>Learning basics</title>
 </head>
 <body>
     <?php 
     $x=20;
     $y=40;

     function globalTest() {
         global $x, $y;
         $y=$x+$y;
     }
     function localTest() {
         $x=1;
         $y=2;
         $y=$x+$y;
     }
     function staticTest() {
         static $z=0;
         echo "$z<br>";
         $z++;
     }
     function sumTest($num1,$num2) {
        echo "Sum of the 2 numbers: ".$num1+$num2."<br>";
     }
     function returnTest($num1) {
         $num1 *= 2;
         return $num1;
     }
     localTest();
     echo "$y<br>";
     globalTest();
     echo "$y<br>";
     staticTest();
     staticTest();
     sumTest(3,4);
     $retval = returnTest(4);
     Print "The return value is : $retval <br>";
     $string_test = "My name is Nicholas! <br><br>";
     print($string_test);
     echo $string_test;
     echo "Length of \"Hello World!\" :";
     echo strlen("Hello World!");
     echo "<br> Position of World in \"Hello World!\" :";
     echo strpos("Hello World!","World");
     $result = ($x>$y)?$x : $y;
     echo "<br>TEST1 : Value of result is $result<br>";
     //if else & switch same as other language
     //array in php
     echo "<b>Testing array<br></b>";
     $array = array(1,2,3,4,5);
     foreach($array as $value){
         echo "Value is $value <br>";
     }
     $array2 = array("Nissan","Honda","Toyota");
     echo "The number of cars in the array is ".count($array2)."</br>";
     echo "<br>for loop 1: ";
     for($x=0;$x<count($array2);$x++){
         echo $array2[$x].",";
     }
     echo "<br>for loop 2: ";
     foreach($array2 as $value){
         echo $value.",";
     }
     ?>
 </body>
</html>