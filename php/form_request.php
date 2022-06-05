<?php 
//isset is used to determine whether it is declared or NULL 
  if(isset($_REQUEST["submit"])){
      echo "My name is ".$_GET['name']."</br>";
      echo "I am ".$_GET['age']." years old.";
      exit();
  }
  ?>
<html>
  <body>
      <form action="<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type="text" name="name"/>
        Age: <input type="text" name="age"/>
        <input type="submit" name="submit"/>   
    </form>
  </body>
</html>