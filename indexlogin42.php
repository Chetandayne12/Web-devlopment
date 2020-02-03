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
    <body bg color="#ffb3b3">
        <div style="margin-left: 500px;margin-top: 100px;">
            <h1>welcome to login page</h1>
        <form action="checklogin42.php" method="POST" >
           Username <input type="text" name="Username" id="user" placeholder="enter username" value="" /><br> <!--name ki value key value h-->
           Password  <input type="password" name="Password" id="pass"  placeholder="enter password" value="" /><br>
            <input type="submit" value="Login" name="submit" /> <!-- value me jo likhenge wo button pr likha hoga -->
            
            
        </form>
    </body>
</html>
