<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $date=getdate();
     print_r($date);  // sirf yha tak ye associative array h 
     //print_r ke hisab se niche print hue ye sare 
     echo $date['month']."<br>";
      echo $date['weekday']."<br>";
      echo $date['year']."<br>";
      echo $date['mon']."<br>";
      echo $date['mday']."<br>";
      echo $date['hours']."<br>";
      echo $date['minutes']."<br>";
      echo $date['seconds']."<br>";








// echo time();     //ye function time batata h seconds me 
         /*$date=date('D',time());
         echo 'today is '.$date."<br>";
          $date=date('M',time());
         echo 'Month is'.$date."<br>";;
          $date=date('Y',time());
         echo 'Year is'. $date;*/
        ?>
    </body>
</html>
