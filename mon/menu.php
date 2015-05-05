<?php 

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
    $page = 4;
else if ($current_page == "careers.php")
    $page = 4;
else if ($current_page == "contact.php")
    $page = 5;
else
    $page = 1;

?>
<div class="container">
    <div class="row" style="margin: 0px 0px; padding-bottom: 5px; text-align: right">
        <a href="../eng/" class="btn btn-default">English</a>
        <a href="../mon/" class="btn btn-primary">Монгол</a>
    </div>
    <div class="main-header">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-10">
                <div class="logo">
                    <a href="../mon/">
                        <img src="../images/logo.png" alt="travel html5 template" title="travel html5 template">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->
            <div class="col-md-8 col-sm-6 col-xs-2">
                <div class="main-menu">
                    <ul class="visible-lg visible-md">
                        <li <?php if ($page == 1) echo "class='active'"; ?>><a href="index.php">Эхлэл</a></li>
                        <li <?php if ($page == 2) echo "class='active'"; ?>><a href="products.php">Бараа</a>
						</li>
                        <li <?php if ($page == 3) echo "class='active'"; ?>><a href="news.php">Мэдээ</a></li>
                    	<li class="dropdown <?php if ($page == 4) echo "active"; ?>"><a href="#" data-toggle="dropdown">Манай компани <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.php">Бидний тухай</a></li>
                                <li><a href="careers.php">Careers</a></li>
                            </ul>
                        </li>
                        <li <?php if ($page == 5) echo "class='active'"; ?>><a href="contact.php">Холбоо барих</a></li>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li class="active"><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div> <!-- /.menu-responsive -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->