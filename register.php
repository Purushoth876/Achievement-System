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
        include("header.php");
        
        ?>
        <section id="form">
            <div class="container" style="alignment-adjust: central">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="signup-form" style="margin-left: 30%;"><!--sign up form-->
                            <h1>New User Signup!</h1>
                            <form action="registerprocess.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="name" placeholder="Name" value=""/>
                                <input type="email" name="mail" placeholder="Email Address" value=""/>
                                <input type="password" name="pass" placeholder="Password" value=""/>
                                <input type="password" name="cpass" placeholder="Confrim - Password"/>
                                <input type="text" name="regno" placeholder="Reg. No"/>
                                <input type="text" name="school" placeholder="VIT School Eg: SCSE"/>
                                <input type="file" name="myfile" />
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section>
        <?php
        include("footer.php");
        ?>
    </body>
</html>
