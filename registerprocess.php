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
        $dbcon = new mysqli("localhost", "root", "", "vit");
        if (isset($_POST)) {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $enc_pass = md5($_POST['pass']);
            $regno = $_POST['regno'];
            $school = $_POST['school'];
            $fileName = $_FILES["myfile"]["name"];
            $fileType = $_FILES["myfile"]["type"];
            $fileSize = $_FILES["myfile"]["size"];
            $fileTemp = $_FILES["myfile"]["tmp_name"];
            $fileError = $_FILES["myfile"]["error"];
        }

        echo $_FILES["myfile"]["name"];
        if ($fileError > 0)
            die("Error uploading file! code $fileError.");
        else {
            if ($fileType == "image/png") {//condition for the file
                die("Format  not allowed or file size too big!");
            } else {
                move_uploaded_file($fileTemp, "Account/profile_pic/".$regno.".jpg");
                $path = $regno.".jpg";
                $sql = "insert into users (Name, Mail, Password, Enc_Password, RegNo, School, Pic) values ('$name', '$mail', '$pass', '$enc_pass', '$regno', '$school', '$path')";
                $result = $dbcon->query($sql);
            }
        }
        
        if (!$result)
            echo "Error :  " . mysql_error();
        header('Location: Account/index.php');
        ?>
    </body>
</html>
