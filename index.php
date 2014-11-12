<!DOCTYPE html>
<html lang="en">
    <?php
    include("header.php");
    $dbcon = new mysqli("localhost", "root", "", "vit");
    $sql = "select * from post;";
    $result = $dbcon->query($sql);
    $resRand = array();
    $dataArray = array();
    $i = 1;
    while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
        $dataArray[$i] = $data['P_ID'];
        $i++;
    }
    ?>
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>VIT</span> University</h1>
                                    <h2>A place to learn, A change to grow.</h2>
                                    <p></p>
                                    <button type="button" class="btn btn-default get">About VIT</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="vitimages/student images/1.jpg" class="girl img-responsive" alt="" />
                                        <!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>VIT</span> University</h1>
                                    <h2>A place to learn, A change to grow.</h2>
                                    <p></p>
                                    <button type="button" class="btn btn-default get">About VIT</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="vitimages/student images/1.jpg" class="girl img-responsive" alt="" />
                                        <!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>VIT</span> University</h1>
                                    <h2>A place to learn, A change to grow.</h2>
                                    <p></p>
                                    <button type="button" class="btn btn-default get">About VIT</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="vitimages/student images/1.jpg" class="girl img-responsive" alt="" />
                                    <!--<img src="images/home/pricing.png" class="pricing" alt="" />-->
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Software Engg
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Microsoft </a></li>
                                            <li><a href="#">IBM </a></li>
                                            <li><a href="#">Oracle</a></li>
                                            <li><a href="#">Others </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Computer Science
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">App Fest</a></li>
                                            <li><a href="#">Hackthon</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Electrical and Electronics
                                        </a>
                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Electrical and Communications</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Civil Engg</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Mechanical Engg</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Structural Engg</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Management</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Law</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>SCHOOLS</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>SITE</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>SCSE</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>SMBS</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>SELECT</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>SENSE</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>VITBS</a></li>
                                    <!--<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>-->
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <!--<div class="price-range"><!--price-range->
                                <h2>Price Range</h2>
                                <div class="well text-center">
                                         <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                         <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                        </div><!--/price-range-->

                        <!--<div class="shipping text-center"><!--shipping->
                                <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>
                <?php

                function randNumber() {
                    static $j = 0;
                    $k=0;
                    $num = rand(0, (sizeof($dataArray)-1));
                    for ($i = 0; $i < sizeof($dataArray); $i++) {
                        if ($resRand[$k] == $num) {
                            $num = rand(0,(sizeof($dataArray)-1));
                            $k++;
                        } else {
                            $resRand[$j] = $num;
                            $j++;
                            return $num;
                            break;
                        }
                    }
                }
                $rand = array_rand($dataArray,7);
                //$rand = rand(0,  (sizeof($dataArray)-1));
                $sql1 = "select * from post where P_ID = $rand[6];";
                echo $rand[6];
                $result1 = $dbcon->query($sql1);
                $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                $temp1 = $data1['RegNo'];
                $newSql1 = "select * from users where RegNo = '$temp1';";
                $newResult1 = $dbcon->query($newSql1);
                $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Student Achievements</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px"/>
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Computer Science</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        //$rand = rand(0, sizeof($dataArray)-1);
                        $sql1 = "select * from post where P_ID =$rand[1];";
                        $result1 = $dbcon->query($sql1);
                        $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                        $temp1 = $data1['RegNo'];
                        $newSql1 = "select * from users where RegNo = '$temp1';";
                        $newResult1 = $dbcon->query($newSql1);
                        $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                        ?>
                        <div class = "col-sm-4">
                            <div class = "product-image-wrapper">
                                <div class = "single-products">
                                    <div class = "productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px" />
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Software Engg</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        //$rand = rand(0, (sizeof($dataArray)-1));
                        $sql1 = "select * from post where P_ID =$rand[2];";
                        $result1 = $dbcon->query($sql1);
                        $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                        $temp1 = $data1['RegNo'];
                        $newSql1 = "select * from users where RegNo = '$temp1';";
                        $newResult1 = $dbcon->query($newSql1);
                        $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                        ?> 
                        <div class = "col-sm-4">
                            <div class = "product-image-wrapper">
                                <div class = "single-products">
                                    <div class = "productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px"/>
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Civil Engg</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        //$rand = rand(0, (sizeof($dataArray)-1));
                        $sql1 = "select * from post where P_ID = $rand[3];";
                        $result1 = $dbcon->query($sql1);
                        $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                        $temp1 = $data1['RegNo'];
                        $newSql1 = "select * from users where RegNo = '$temp1';";
                        $newResult1 = $dbcon->query($newSql1);
                        $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                        ?>
                        <div class = "col-sm-4">
                            <div class = "product-image-wrapper">
                                <div class = "single-products">
                                    <div class = "productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px"/>
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Mechanical Engg</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                    <img src = "images/home/new.png" height = "50" class = "new" alt = "" />
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        //$rand = rand(0, (sizeof($dataArray)-1));
                        $sql1 = "select * from post where P_ID = $rand[4];";
                        $result1 = $dbcon->query($sql1);
                        $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                        $temp1 = $data1['RegNo'];
                        $newSql1 = "select * from users where RegNo = '$temp1';";
                        $newResult1 = $dbcon->query($newSql1);
                        $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                        ?>
                        <div class = "col-sm-4">
                            <div class = "product-image-wrapper">
                                <div class = "single-products">
                                    <div class = "productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px" />
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Electronics and Communications</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                    <img src = "images/home/new.png" height = "50" class = "new" alt = "" />
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        //$rand = rand(0, (sizeof($dataArray)-1));
                        $sql1 = "select * from post where P_ID = $rand[5];";
                        $result1 = $dbcon->query($sql1);
                        $data1 = $result1->fetch_array(MYSQLI_ASSOC);
                        $temp1 = $data1['RegNo'];
                        $newSql1 = "select * from users where RegNo = '$temp1';";
                        $newResult1 = $dbcon->query($newSql1);
                        $newData1 = $newResult1->fetch_array(MYSQL_ASSOC);
                        ?>
                        <div class = "col-sm-4">
                            <div class = "product-image-wrapper">
                                <div class = "single-products">
                                    <div class = "productinfo text-center">
                                        <img src = "Account/profile_pic/<?php echo $newData1['Pic'] ?>" width="55px"  height="235px" />
                                        <h2><?php echo $data1['Topic']; ?></h2>
                                        <p><?php echo $newData1['RegNo']; ?></p>
                                        <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                    </div>
                                    <div class = "product-overlay">
                                        <div class = "overlay-content">
                                            <p><?php echo $data1['Post']; ?></p>
                                            <h2><?php echo $newData1['School']; ?></h2>
                                            <p>Management</p>
                                            <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class = "choose">
                                    <ul class = "nav nav-pills nav-justified">
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Follow</a></li>
                                        <li><a href = "#"><i class = "fa fa-plus-square"></i>Expertise</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!--features_items-->

                    <div class = "category-tab"><!--category-tab-->
                        <div class = "col-sm-12">
                            <ul class = "nav nav-tabs">
                                <li class = "active"><a href = "#tshirt" data-toggle = "tab">Sport</a></li>
                                <li><a href = "#blazers" data-toggle = "tab">Club Activity</a></li>
                                <li><a href = "#sunglass" data-toggle = "tab">Social Works</a></li>
                                <li><a href = "#poloshirt" data-toggle = "tab">Others</a></li>
                            </ul>
                        </div>
                        <div class = "tab-content">
                            <div class = "tab-pane fade active in" id = "tshirt" >
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery1.jpg" alt = "" />
                                                <h2>Sports</h2>
                                                <p>Table Tennis</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-dribbble"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery2.jpg" alt = "" />
                                                <h2>Sports</h2>
                                                <p>Cricket</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-dribbble"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery3.jpg" alt = "" />
                                                <h2>Sports</h2>
                                                <p>Volley Ball</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-dribbble"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery4.jpg" alt = "" />
                                                <h2>Sports</h2>
                                                <p>Basket Ball</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-dribbble"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class = "tab-pane fade" id = "blazers" >
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery3.jpg" alt = "" />
                                                <h2>Club</h2>
                                                <p>Music Club</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery2.jpg" alt = "" />
                                                <h2>Club</h2>
                                                <p>Dance Club</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery1.jpg" alt = "" />
                                                <h2>Club</h2>
                                                <p>VITeach</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery2.jpg" alt = "" />
                                                <h2>Club</h2>
                                                <p>Drawing Club</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class = "tab-pane fade" id = "sunglass" >
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery3.jpg" alt = "" />
                                                <h2>Social</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery4.jpg" alt = "" />
                                                <h2>Social</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery1.jpg" alt = "" />
                                                <h2>Social</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery2.jpg" alt = "" />
                                                <h2>Social</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class = "tab-pane fade" id = "poloshirt" >
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery2.jpg" alt = "" />
                                                <h2>Others</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery4.jpg" alt = "" />
                                                <h2>Others</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery3.jpg" alt = "" />
                                                <h2>Others</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-3">
                                    <div class = "product-image-wrapper">
                                        <div class = "single-products">
                                            <div class = "productinfo text-center">
                                                <img src = "images/home/gallery1.jpg" alt = "" />
                                                <h2>Others</h2>
                                                <p>Description</p>
                                                <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->

                    <div class = "recommended_items"><!--recommended_items-->
                        <h2 class = "title text-center">recommended items</h2>

                        <div id = "recommended-item-carousel" class = "carousel slide" data-ride = "carousel">
                            <div class = "carousel-inner">
                                <div class = "item active">
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend1.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>Java Programming</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend2.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>Open Source Tools</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend3.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>App Fest</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class = "item">
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend1.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>Python Development</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend2.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>Software Design</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class = "col-sm-4">
                                        <div class = "product-image-wrapper">
                                            <div class = "single-products">
                                                <div class = "productinfo text-center">
                                                    <img src = "images/home/recommend3.jpg" alt = "" />
                                                    <h2>SITE</h2>
                                                    <p>Microsoft Awards</p>
                                                    <a href = "#" class = "btn btn-default add-to-cart"><i class = "fa fa-book"></i>Read</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class = "left recommended-item-control" href = "#recommended-item-carousel" data-slide = "prev">
                                <i class = "fa fa-angle-left"></i>
                            </a>
                            <a class = "right recommended-item-control" href = "#recommended-item-carousel" data-slide = "next">
                                <i class = "fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>