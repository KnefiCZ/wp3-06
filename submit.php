<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>-_-</title>
  </head>
  <body>
    <?php
      $age  = filter_input(INPUT_POST,'age');
      $belt = getBelt($age);
        echo "Je ti : " . $age;
     ?>
     <div style="display:block; width:40px; height:40px; border: 2px black solid; background-color:<?php echo $belt ?>;">

     </div>
  </body>
</html>
