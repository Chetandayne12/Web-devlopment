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
        
        if(isset($_POST['login1']))
        {
            $user="chetan";
            $password="12345";
            {
                if($user===$_POST['user']&&$password===$_POST['password'])
                {
                    header("Location:login.php");
                }
                else
                {
                    header("Location:login.php");
                }
                    
                
        }
                   
        }
        ?>
    </body>
</html>
