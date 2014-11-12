<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $topic = $_POST['topic'];
    $desc = $_POST['desc'];
    $post = $_POST['post'];
    $dbcon = new mysqli("localhost", "root", "", "vit");
    $sql = "insert into post (Name, RegNo, Topic, Description, Post) values ('$name', '$regno', '$topic', '$desc', '$post');";
    $result = $dbcon->query($sql);
    if(!$result)
        echo "Error : ".  mysqli_error($dbcon);
    header('Location: Account/index.php');
}
?>