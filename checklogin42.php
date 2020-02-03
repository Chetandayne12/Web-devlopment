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
        // in charo se connection banega 
        $dbservername="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="test1";
        // $conn database connection object banaya
         $conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
         //conection object ne value return kari $conn me
        if($conn)
        {
            if(isset($_POST['submit']))
            {
                $username=$_POST['Username']; //['Username'] database ke jesa hona
                $password=$_POST['Password'];  ///['Paasword'] database ke jesa hona
                
                $sql="select Password from demo_db where Username='$username' ";  //select Password(capital) database me jesa likha h wesa hi hona 
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res))
                {
                    $x=mysqli_fetch_assoc($res); //$x me password aaega $sql se
                  // $x['Password'];  
               if($x['Password']===$password) //===isliye kyuki strictly check kr rhe h data type or pass same hona chaiye 
                   //$x['Password']database se aaega ===$password enter kra usse match krega
                {
                    echo " welcome $username you have successfully logged in";
                }
                else {
                      header("Location:indexlogin42.php");
                    }
                }
                else
                {
                    header("Location:indexlogin42.php");
                }
                    
                
            }
        }
        ?>
    </body>
</html>
