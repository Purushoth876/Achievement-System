<!DOCTYPE html>
<html lang="en">
    <?php
    include("header.php");
    ?>
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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
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

                        <!--<div class="price-range"><!--price-range
                                <h2>Price Range</h2>
                                <div class="well">
                                         <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                         <b>$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                        </div><!--/price-range-->

                        <!--<div class="shipping text-center"><!--shipping->
                                <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Latest From our Blog</h2>
                        <div class="single-blog-post">
                            <?php
                            $regno = $_GET['regno'];
                            $database = new mysqli("localhost","root","","vit");
                            $sql = "Select * from post where RegNo = '$regno';";
                            $result = $database->query($sql);
                            while ($dataResult = $result->fetch_array(MYSQLI_ASSOC)) {
                            ?>
                            
                                <h3><?php echo $dataResult['Topic']; ?></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa fa-user"></i><?php echo $dataResult['Name']; ?></li>
                                        <li><i class="fa fa-clock-o"></i> 2:36 pm</li>
                                        <li><i class="fa fa-calendar"></i> SEP 15, 2014</li>
                                    </ul>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </span>
                                </div>
                                <a href="">
                                    <img src="Account/profile_pic/<?php echo $dataResult['RegNo'] ?>.jpg"  width="200" height="400" alt="<?php echo $dataResult['Name'];  ?>">
                                </a>
                                <p><?php echo $dataResult['Post']; ?></p>
                                <a  class="btn btn-primary" href="">Read More</a>
                            </div>
                            <div class="single-blog-post">
                                <?php
                            }
                            ?>
                            <div class="pagination-area">
                                <ul class="pagination">
                                    <li><a href="" class="active">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php
    include('footer.php');
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>