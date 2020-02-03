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
        if(isset($_POST['submit']))
        {
            $image=$_FILES['image'];
          //  print_r($image);
        
            echo "file name is".$image['name']."<br>"; // image ka name batayega 
            echo "file size is".$image['size']."<br>"; // image ka size batayega 
            echo "file directory is".$image['tmp_name']."<br>"; //jmage kha save h yee batayega 
            echo "file type is".$image['type']."<br>"; // file ka tyoe batayega 
        }
        
        ?>
    </body>
</html>
