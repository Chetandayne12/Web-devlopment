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
        //  ye program connection bna h ya nhi bna h uske liye h
        $dbservername="localhost";   //ye charo variables h
        $dbuser="root";
        $dbpassword="";
        $dbname="test1";
        
//mysqli_connect  ek  function h jo connection create hone ke bad value return karega (use connection variable) bolenge $conn ko
        $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
// agar connection hoga toh connection object koi value return karega jo ki $conn object me store hogi
        // it does not work for 0 value
        if($conn)//if condition true for all non zero values 
        {
         echo "yes we did it ";    
       // print_r($conn);     
        }
        else
        {
        echo "something went wrong";    
        }
        
        ?>
    </body>
</html>
