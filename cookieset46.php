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
       setcookie('user2','chetan',time()+600);  //second me diya h
       if($_COOKIE['user'])
       {
           echo "thank you for returning";
       }
      // setcookie('user','chetan',time()-600); // cookie hatane ke liye  
        ?>
    </body>
</html>
