<?php 

require_once "../admin/backend/db.php";
require_once "../admin/backend/helper.php";

$current_page = basename($_SERVER['PHP_SELF']);
$page = 1;
if ($current_page == "products.php")
    $page = 2;
else if ($current_page == "brandsSpecific.php")
    $page = 2;
else if ($current_page == "news.php")
    $page = 3;
else if ($current_page == "newsSpecific.php")
    $page = 3;
else if ($current_page == "about.php")
    $page = 5;
else if ($current_page == "careers.php")
    $page = 4;
else if ($current_page == "contact.php")
    $page = 6;
else
    $page = 1;

?>

	<div class="container">
        <div class="row" style="margin: 0px 0px; padding-bottom: 5px; text-align: right">   
            <a href="../eng/" class="btn btn-primary">English</a>
            <a href="../mon/" class="btn btn-default">Монгол</a>
        </div>
        <div class="main-header">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-10">
                    <div class="logo">
                        <a href="../eng/">
                            <img src="../images/logo.png" alt="travel html5 template" title="travel html5 template">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-6 col-xs-2">
                    <div class="main-menu">
                        <ul class="visible-lg visible-md">
                            <li <?php if ($page == 5) echo "class='active'"; ?>><a href="about.php">About us</a></li>
                            <li <?php if ($page == 2) echo "class='active'"; ?>><a href="products.php">Products</a></li>
                            <li <?php if ($page == 4) echo "class='active'"; ?>><a href="careers.php">Services</a></li>
                            <li <?php if ($page == 3) echo "class='active'"; ?>><a href="news.php">News</a></li>
                            <li <?php if ($page == 6) echo "class='active'"; ?>><a href="contact.php">Contact us</a></li>
                        </ul>
                        <a href="#" class="toggle-menu visible-sm visible-xs">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.main-header -->
        <div class="row">
            <div class="col-md-12 visible-sm visible-xs">
                <div class="menu-responsive">
                    <ul>
                        <li <?php if ($page == 5) echo "class='active'"; ?>><a href="about.php">About us</a></li>
                            <li <?php if ($page == 2) echo "class='active'"; ?>><a href="products.php">Products</a></li>
                            <li <?php if ($page == 4) echo "class='active'"; ?>><a href="careers.php">Services</a></li>
                            <li <?php if ($page == 3) echo "class='active'"; ?>><a href="news.php">News</a></li>
                            <li <?php if ($page == 6) echo "class='active'"; ?>><a href="contact.php">Contact us</a></li>
                    </ul>
                </div> <!-- /.menu-responsive -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->