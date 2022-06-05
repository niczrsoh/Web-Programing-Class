<html>
    <head>
        <title>Multi-dimensional array </title>
    </head>
    <body>
        <?php 
        $marks = array(
            "class1"=>array(
            "James"=>"80",
            "John"=>"70",
            "Aisyah"=>"90"
        ),
        "class2"=>array(
            "Peter"=>"55",
            "Linda"=>"50",
            "Ahmad"=>"60"
        ),
        "class3"=>array(
            "Shin"=>"55",
            "Lala"=>"56",
            "Tom"=>"57"
        ),
    );
    echo "Marks for class 2 peter : ";
    echo $marks['class2']['Peter']."<br>";
        ?>
    </body>

</html>