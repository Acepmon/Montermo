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
        <title>Events Page - Travel by templatemo</title>
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

        <script src="../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

		<div class="site-header">
            <?php include 'menu.php'; ?>
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_events">
        </div> <!-- /.page-header -->

        <div class="middle-content">
            <div class="container">
                <div class="row">
                    <?php

                    $db = new db\Connector();
                    $db->query("select * from brands where brand_lang = 'english'");
                    $res = $db->resultset();
                    foreach ($res as $r) {
                        
                        ?>
                        <div class="col-md-4">
                            <div class="widget-item">
                                <h3 class="widget-title">
                                    <a href="brandsSpecific.php?brands_id=<?php echo $r['brand_id']; ?>"><?php echo $r['brand_title']; ?></a>
                                </h3>
                                <div class="sample-thumb">
                                    <img src="../images/brand_images/<?php echo $r['brand_logo']; ?>" alt="Flowrox">
                                </div>
                                <h4 class="consult-title">
                                    <a href="brandsSpecific.php?brand_id=<?php echo $r['brand_id']; ?>"><?php echo $r['brand_short_desc']; ?></a>
                                </h4>
                                <p>
                                    <?php echo substr($r['brand_description'], 0, 500); ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        
                    }
                    ?>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->

        <div class="site-footer">
            <?php include 'footer.php'; ?>
        </div> <!-- /.site-footer -->

        <script src="../js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <!-- templatemo 409 travel -->
    </body>
</html>