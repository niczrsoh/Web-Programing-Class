<html>
    <head>
        <title>Sort 1D & Associative array </title>
    </head>
    <body>
        <?php 
        $student = array("Peter","James","Aisyah");
        $marks = array(
            "James"=>"80",
            "John"=>"70",
            "Aisyah"=>"90"
        );
    sort($student);
    echo "After sort in ascending order: ";
    foreach($student as $x) echo $x.",";
    rsort($student);
    echo "<br>After sort in descending order: ";
    foreach($student as $x) echo $x.",";
    echo"<br>Name is sorted according to value: <br>";
    asort($marks);
foreach($marks as $name=>$mark){
    echo "$name got $mark mark<br>";
}
echo"<br>Name is sorted according to keyname: <br>";
    ksort($marks);
foreach($marks as $name=>$mark){
    echo "$name got $mark mark<br>";
}
    
        ?>
    </body>

</html>