<html>
  <head>
  </head>
  <body>
    <?php
    $marks = 91;

    if ($marks >= 90)
     {
        echo "You Got A+";
     }
    else if (($marks >=80) && ($marks <90))
      {
         echo " You Got A";
      }
    else if (($marks >=70) && ($marks <80))
      {
         echo "B";
      }
    else if ($marks >=60 && $marks <70)
      {
         echo " You Got C";
      }

    else echo " You GotF";

     ?>

  </body>
</html>
