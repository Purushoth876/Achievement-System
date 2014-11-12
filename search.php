<!DOCTYPE html>
<?php
include("header.php");
?>
<html>
    <body>
        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Search Result</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Student Name</td>
                                <td class="description"></td>
                                <td class="price">School</td>
                                <td class="quantity">Department</td>
                                <td class="total">Read Article</td>
                                <td></td>
                            </tr>
                        </thead>
                        <?php
                        if ($_GET) {
                            $regno = strtoupper($_GET['regno']);
                        } else {
                            $regno = "No Data";
                        }
                        $dbcon = new mysqli("localhost", "root", "", "vit");
                        $sql = "select * from users where RegNo like '%$regno%';";
                        $result = $dbcon->query($sql);
                        while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
                            ?>

                            <tbody>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="Account/profile_pic/<?php echo $data['Pic']; ?>" alt="" width="100px" height="100px"></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""><?php echo $data['Name']; ?></a></h4>
                                        <p>Reg No : <?php echo $data['RegNo']; ?></p>
                                    </td>
                                    <td class="cart_price">
                                        <p><?php echo $data['School']; ?></p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">Software Engineering</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="blog.php?regno=<?php echo $data['RegNo']; ?>"><i class="fa fa-book">  Read</i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>

        </section> <!--/#cart_items-->

        <!--<section id="do_action">
                <div class="container">
                        <div class="heading">
                                <h3>What would you like to do next?</h3>
                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                        <div class="chose_area">
                                                <ul class="user_option">
                                                        <li>
                                                                <input type="checkbox">
                                                                <label>Use Coupon Code</label>
                                                        </li>
                                                        <li>
                                                                <input type="checkbox">
                                                                <label>Use Gift Voucher</label>
                                                        </li>
                                                        <li>
                                                                <input type="checkbox">
                                                                <label>Estimate Shipping & Taxes</label>
                                                        </li>
                                                </ul>
                                                <ul class="user_info">
                                                        <li class="single_field">
                                                                <label>Country:</label>
                                                                <select>
                                                                        <option>United States</option>
                                                                        <option>Bangladesh</option>
                                                                        <option>UK</option>
                                                                        <option>India</option>
                                                                        <option>Pakistan</option>
                                                                        <option>Ucrane</option>
                                                                        <option>Canada</option>
                                                                        <option>Dubai</option>
                                                                </select>
                                                                
                                                        </li>
                                                        <li class="single_field">
                                                                <label>Region / State:</label>
                                                                <select>
                                                                        <option>Select</option>
                                                                        <option>Dhaka</option>
                                                                        <option>London</option>
                                                                        <option>Dillih</option>
                                                                        <option>Lahore</option>
                                                                        <option>Alaska</option>
                                                                        <option>Canada</option>
                                                                        <option>Dubai</option>
                                                                </select>
                                                        
                                                        </li>
                                                        <li class="single_field zip-field">
                                                                <label>Zip Code:</label>
                                                                <input type="text">
                                                        </li>
                                                </ul>
                                                <a class="btn btn-default update" href="">Get Quotes</a>
                                                <a class="btn btn-default check_out" href="">Continue</a>
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                        <div class="total_area">
                                                <ul>
                                                        <li>Cart Sub Total <span>$59</span></li>
                                                        <li>Eco Tax <span>$2</span></li>
                                                        <li>Shipping Cost <span>Free</span></li>
                                                        <li>Total <span>$61</span></li>
                                                </ul>
                                                        <a class="btn btn-default update" href="">Update</a>
                                                        <a class="btn btn-default check_out" href="">Check Out</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </section><!--/#do_action-->
        <?php
        include('footer.php');
        ?>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>