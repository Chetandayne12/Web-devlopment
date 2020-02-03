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
       $dbusername="root";
       $dbpassword="";
       $dbname="test1";
       $conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
       if($conn)
       {
           
           if(isset($_POST['submit'])) 
           {
              // $user me user se value aayi or usi value ko escape function ke dwara kachra bahara kiya or wapas user me dal di 
     $user=$_POST['username']; // small username
     $user=mysqli_real_escape_string($conn,$user); // real escape ye name jitu' mese jitu\' ko hata dega agr ye database me gya  
           //toh data base hack ho sakta h isliye  ye function lagana jarurui h    
    // echo $user;
      $sql="select * from demo_db where username ='$user'"; 
      $res=mysqli_query($conn,$sql);
      $x=mysqli_fetch_assoc($res);
      if($x)
      {
      echo "$user your password is ".$x['Password'];
      }
      else
      {
          echo "wrong entry";
      }
           }  
           
       }
       
        ?>
         <form action="security43.php" method="POST">
            <input type="text" name="username" value="" placeholder="username"/><br>  
            <input type="submit" value="submit" name="submit" /> 
        </form>
    </body>
</html>
