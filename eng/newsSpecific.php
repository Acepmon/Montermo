<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<?php
    require_once "../admin/backend/db.php";
    require_once "../admin/backend/helper.php";
?>
    <head>
        <meta charset="utf-8">
        <title>News - Montermo.com</title>
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">
        <link rel="stylesheet" href="../css/custom.css">

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

        <div class="page-top" id="templatemo_events">
        </div> <!-- /.page-header -->

        <div class="middle-content">
			<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    <a href="news.php">News</a>
                </h1>
                <?php

                $news_id = isset($_GET['news_id']) ? $_GET['news_id'] : null;
                if (!empty($news_id)) {
                $db = new db\Connector();
                $db->query("select * from news where news_id = :id");
                $db->bind(":id", $news_id);
                $news = $db->single();
                ?>
                    <div class="news_post">
                        <h3>
                            <?php echo $news['news_header']; ?>
                        </h3>
                        <p>
                            Posted on <?php echo $news['news_date']; ?>
                        </p>
                        <?php 
                        if (!empty($news['news_thumb'])) {
                            echo "<img class='img-responsive' src='../images/news/".$news['news_thumb']."' alt=''>";
                        }
                        echo $news['news_text'];
                        ?>
                        <br>
                        <a href="news.php" class="btn btn-primary">Go Back</a>
                    </div>
                <?php
                }
                ?>

            </div>

            <div class="col-md-4">
                
                <div class="panel panel-default aside-brands">
                    <div class="panel-heading"><h4>Other news</h4></div>
                    <ul class="list-group">
                    <?php
                        $db = new db\Connector();
                        $db->query("select * from news where news_lang = 'english' AND news_id != :id");
                        $db->bind(":id", $news_id);
                        $result = $db->resultset();
                        foreach ($result as $res) {
                    ?>
                        <li class="list-group-item">
                            <a href="newsSpecific.php?news_id=<?php echo $res['news_id']; ?>">
                                <p>
                                    <?php echo $res['news_header']; ?>
                                </p>
                                <p class="text-right" style="margin-top: 5px;">
                                    <?php echo $res['news_date']; ?>
                                </p>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>

                <div class="well">
                <h4>ONE SOURCE FOR YOUR BENEFICATION NEEDS</h4>
                    <p>Tel: (976) - 70001563 <br>
                    Mail: sales@montermo.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>
        </div> <!-- /.middle-content -->

        <div class="site-footer">
            <?php include 'footer.php'; ?>
        </div> <!-- /.site-footer -->

        <script src="../js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>