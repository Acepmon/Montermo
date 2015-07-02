<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<?php
    require_once "../admin/backend/db.php";
?>
    <head>
        <meta charset="utf-8">
        <title>About Page</title>
        <meta name="description" content="">
<!-- 
Travel Template 
http://www.templatemo.com/preview/templatemo_409_travel 
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="stylesheet" href="../bxslider/jquery.bxslider.css">
        <link rel="stylesheet" href="../css/mon_arial.css">
    
        <link rel="icon" type="image/png" href="../images/favicon.png" />
        

        <script src="../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <?php include 'menu.php'; ?>
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_about">
        </div> <!-- /.page-header -->

        <div class="middle-content" id="brandsSpecific">
            <div class="container">
                <div class="col-md-8">
                
                <?php

                $brands_id = isset($_GET['brands_id']) ? $_GET['brands_id'] : null;
                if (!empty($brands_id)) {

                    $db = new db\Connector();
                    $db->query("select * from brands where brand_id = :id");
                    $db->bind(":id", $brands_id);
                    $brand = $db->single();

                    ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brand_images/<?php echo $brand['brand_logo']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <h2></h2>
                                    <br><br>
                                    <h4><?php echo $brand['brand_short_desc']; ?></h4>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <?php echo $brand['brand_description']; ?>
                            </div>
                            
                            <?php
                                $db->query("select * from products where brands_brand_id = :brand_id");
                                $db->bind(":brand_id", $brand['brand_id']);
                                $res = $db->resultset();
                                $broke = break_array($res, 2);
                                
                                foreach ($broke as $r) {
                                    echo "<div class='row'>";
                                    // echo "<h4>".$r['product_name']."</h4>";
                                    // echo "<p>".$r['product_description']."</p>";
                                    foreach ($r as $br) {    
                                        $db->query("select * from product_img where products_product_id = :product_id");
                                        $db->bind(":product_id", $br['product_id']);
                                        $results = $db->resultset();
                                        foreach ($results as $img) {
                                            echo "<div class='col-sm-5 brand-product-cell'>";
                                            echo "<img src='../images/brand_images/brand_".$brand['brand_id']."/products/".$img['img_url']."'>";
                                            echo "<p><strong>".$br['product_name']."</strong>: ".$br['product_description']."</p>";
                                            echo "</div>";
                                        }
                                    }
                                    echo "</div>";
                                }
                            ?>


                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Буцах</a>
                            </div>
                        </div>
                    <?php
                }

                ?>
                </div>
                <div class="col-md-4">

                    <!-- Side Widget Well -->
                    <div class="panel panel-default aside-brands">
                        <div class="panel-heading"><h4>Глобал Брэндүүд</h4></div>
                        <ul class="list-group">
                            <?php
                            $db = new db\Connector();
                            $db->query("select * from brands where brand_lang = 'mongolian' AND brand_id != :id");
                            $db->bind(":id", $brands_id);
                            $result = $db->resultset();
                            shuffle($result);
                            foreach ($result as $res) {
                            ?>
                            
                            <li class="list-group-item">
                                <a href="brandsSpecific.php?brands_id=<?php echo $res['brand_id']; ?>">
                                <div class="col-sm-6">
                                    <img src="../images/brand_images/<?php echo $res['brand_logo']; ?>" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <p><?php echo $res['brand_short_desc']; ?></p>
                                </div>
                                <div class="clearfix"></div>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                </div>  
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

        <div class="site-footer">
            <?php include 'footer.php'; ?>
        </div> <!-- /.site-footer -->

        <script src="../js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="../bxslider/jquery.bxslider.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/angular.min.js"></script>
        <!-- templatemo 409 travel -->
    </body>
</html>