<html>
    <head>
        <title>Associative / Hash array </title>
    </head>
    <body>
        <?php 
        $age = array(
            "James"=>"40",
            "John"=>"50",
            "Aisyah"=>"30"
        );
        echo "Aisyah is ". $age['Aisyah'] ."years old.<br>";
        echo "Changing the value<br>";
        $age['James']=50;
        echo "James is ". $age['James'] ."years old.<br><br>";
        echo "Uisng for loop to display associative array<br><br>";
        foreach($age as $x=>$value){
            echo "$x is $value years old.<br>";
        }
        ?>
    </body>

</html>