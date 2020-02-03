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
        // row ko delete karne or data ko update karne me 
         $dbservername="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="test1";
        $conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
        if($conn)
        {
            //$sql="delete from demo_db where id=9"; //ye demo_db se id=9 wali row hata dega puri delete kar dega
            $sql="update demo_db set Address='Kashmir' where id=8";
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                echo "successfully done";
            }
        }
        ?>
    </body>
</html>
