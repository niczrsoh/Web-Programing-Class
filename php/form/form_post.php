<html>
    <head>
        <title>Output form the submitted form</title>
    </head>
    <?php 
    $heading = $_POST["username"];$color = $_POST["color"];
    switch($color) {
        case "r":
            $backgroundColor = "rgb(255,0,0)";break;
        case "r":
            $backgroundColor = "rgb(0,255,0)";break;
        case "r":
            $backgroundColor = "rgb(0,0,255)";break;
        default:
            $backgroundColor = "rgb(200,200,200)";
            break;
    }
    ?>
    <body style="background: <?php echo $backgroundColor;?>;">
    <?php echo $heading;?>

    </body>
</html>