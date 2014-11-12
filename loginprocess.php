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
            session_start();
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $dbcon = new mysqli("localhost","root","","vit");
            $sql = "select * from users where Mail='$mail' and Password='$pass'";
            $result = $dbcon->query($sql);
            $data = $result->fetch_array(MYSQLI_ASSOC); 
            $_SESSION['name'] = $data['Name'];
            $_SESSION['mail'] = $data['Mail'];
            $_SESSION['regno'] = $data['RegNo'];
            $_SESSION['school'] = $data['School'];
            $_SESSION['pic'] = $data['Pic'];
            header('Location: ./Account/index.php');
        ?>
    </body>
</html>
