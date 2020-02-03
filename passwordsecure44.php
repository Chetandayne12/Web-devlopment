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
        $pass="password"; // ye sign up  ke samay user dalega password wo DB me jake store ho jayega 
        //password incrypte hoke dB me jayega wha se data ko hash karna h  
       $pass=password_hash($pass,PASSWORD_BCRYPT);// password_default bhi le sakte h lekin ye jyada secure nhi h pr
        echo $pass."<br>";
        //echo strlen($pass);
        
        if(password_verify('password',$pass)) //user ke password ko verify karna h database ke password se 
        {
            echo" your password is correct";
        }
        
        
               
        ?>
    </body>
</html>
