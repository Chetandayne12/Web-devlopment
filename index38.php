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
       $dbservername="localhost";
       $dbuser="root";
       $dbpassword="";
       $dbname="test1";
       
       $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
       
       if($conn)
       {
           //$ql ek variable banaya h jo value dega 
           
       $sql="select * from demo_db";  // ye command database se sari row or column dekhne ke liye karte h 
       
        $res=mysqli_query($conn,$sql); /*mysqli_query fuction database me uppar di hui command ko execute 
      karwata h isme connection object pass karte h or ye hame result dega wo $res me store hoga
         */
        if(mysqli_num_rows($res)>0) /*mysqli_num_rows function ye batata h ki res object($res) me koi value
                  aayi h ya nhi ydi data hua toh wo zero se bda h ya nhi agar data h toh*/
        {
           // print_r(mysqli_fetch_assoc($res)); //$res se data nikalne ke liye mysqli_fetch_assoc array format me value dega
         $x=mysqli_fetch_assoc($res); // associative array me key($res) pass krke data nikalna h
         echo 'Hello Mr.' .$x['Username'].' you joined '.$x['Date'];
         echo "<br>";
         echo 'Your password is '.$x['Password'];
        }
       }
        ?>
    </body>
</html>
