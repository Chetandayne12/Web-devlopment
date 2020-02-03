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
         if(isset($_GET['submit'])) //submit ki value  name se aai key se ise single qoute me likhna h hamesh 
           
       {
             if(!empty(trim($_GET['username']))){
                 echo trim($_GET['username']);
             }
            
//            echo $_GET['username']; //print username
//            echo $_GET['password'];  //print password
            
             
        }
           
        
             
            
             
             
             
             
         
         /*if(isset($_GET['submit'])) 
          {
             echo"you have clicked";
         }
         else{
             echo "you have not clicked";
         }*/
         ?>
    </body>
</html>
