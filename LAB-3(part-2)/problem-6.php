<html>
  <head>
  </head>
  <body>
    <?php

    $original = array( '1','2','3','4','5' );
  echo 'Original array : '."\n";
  foreach ($original as $x) //print the whole array using foreach loop
  {echo "$x ";}  // print the main array
  $inserted = 'im';

  array_splice( $original, 3, 0, $inserted ); // inserting array after 3
  echo " \n After inserting  the array is : "."\n";
  foreach ($original as $x) //print the whole array using foreach loop
  {echo "$x ";}
  echo "\n"

    ?>
 </body>
</html>
