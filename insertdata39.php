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
                //$id=$_POST['Id'];
                $username=$_POST['Username'];
                $password=$_POST['Password'];
                $date=$_POST['Date'];
                $address=$_POST['Address'];
                
                $sql="insert into demo_db(Username,Password,Date,Address) values($username',$password,'$date','$address')";
                $res=mysqli_query($conn,$sql);
                
                if($res)
                {
                    echo "successfully data inserted";
                }
                else
                {
                    echo "somethng went wrong";
                }
            }
        }
        ?>
    </body>
</html>
