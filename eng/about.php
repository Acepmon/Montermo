<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>About us - Montermo.com</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
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

        <div class="page-top" id="templatemo_about">
        </div> <!-- /.page-header -->

        <div class="middle-content" id="aboutus">
            <div class="container">

                <?php

                    $tab = isset($_GET['tab']) ? $_GET['tab'] : "";
                    $tab_c = 0;
                    if ($tab == "story") {
                        $tab_c = 0;
                    } else if ($tab == "values") {
                        $tab_c = 1;
                    } else if ($tab == "ohse") {
                        $tab_c = 2;
                    } else if ($tab == "csr") {
                        $tab_c = 3;
                    } else if ($tab == "careers") {
                        $tab_c = 4;
                    }

                ?>
            
                <div class="col-lg-3">
                    <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li role="presentation" <?php if ($tab_c==0) echo "class='active'"; ?>><a href="#story" aria-controls="story" role="tab" data-toggle="tab">Our Story</a></li>
                        <li role="presentation" <?php if ($tab_c==1) echo "class='active'"; ?>><a href="#values" aria-controls="values" role="tab" data-toggle="tab">Our values</a></li>
                        <li role="presentation" <?php if ($tab_c==2) echo "class='active'"; ?>><a href="#ohse" aria-controls="ohse" role="tab" data-toggle="tab">OHSE</a></li>
                        <li role="presentation" <?php if ($tab_c==3) echo "class='active'"; ?>><a href="#crs" aria-controls="crs" role="tab" data-toggle="tab">CSR</a></li>
                        <li role="presentation" <?php if ($tab_c==4) echo "class='active'"; ?>><a href="#careers" aria-controls="careers" role="tab" data-toggle="tab">Careers</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==0) echo "active"; ?>" id="story">
                            <h3>Our Story</h3>
                            <p>Montermo LLC is a specialist supplier and service provider to mining, 
                                mineral processing & beneficiation, and power generation industries of 
                                Mongolia. Montermo LLC was established in 2008 and it`s a 100% privately 
                                Mongolian-owned company.</p>
                            <p>Our product and services covers a wide range of minerals such as iron ore, 
                                copper, gold, coal, molybdenum and fluorspar.</p>
                                <img src="../images/about_us/Our story.jpg" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==1) echo "active"; ?>" id="values">
                        	<h3>Our Values</h3>
                            <p>
                                
                            </p>
                                <img src="../images/about_us/our values.jpg" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==2) echo "active"; ?>" id="ohse">
                            <h3>Occupational Health & Safety Environment</h3>
                            <p>Montermo LLC undertakes all its actions and activities in accordance with the 
                                policy of “Occupational Health & Safety Environment” and has a deep commitment 
                                to the health and safety of Montermo employees and protection of environment.</p>
                            <p>We ensure that our products and services have no harm on environment; community 
                                and our employees; that satisfactory procedures are met to have an occupational 
                                health and safety policy in accordance with local and international safety standards.</p>
                                <img src="../images/about_us/OHSE.jpg" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">  
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==3) echo "active"; ?>" id="crs">
                            <h3>Corporate Social Responsibility</h3>
                            <p>
                                Montermo LLC is committed to transparent, socially responsible and 
                                ethical business practice. Under its “Corporate Social Responsibility 
                                Policy” we implement a number of programs and activities in key areas 
                                of society to support sustainable development.
                            </p>
                            <br>
                            <ul>
                                <li>Montermo 'Disabled People Support Program'</li>
                                <li>Montermo 'Elder Support Program'</li>
                                <li>Montermo 'Health and Safe Environment Program'</li>
                            </ul>
                            <img src="../images/about_us/Corporate-Social-Responsibility.jpg" style="min-width: auto; max-width: 100%; height: auto; float: left; margin-top: 20px;">
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==4) echo "active"; ?>" id="careers">
                            <h3>Careers</h3>
                            <p> We appreciate your interest in joining Montermo LLC. We are always in search of talented individuals that have a sincere desire to join our company.</p>
<p>We are looking for individuals who are committed to quality, recognize and focus on their clients, commit to “digging” deep into discovering why problems are occurring, realize the benefit of understanding what is actually going on in the workplace to solve problems and/or make improvements, understand the importance of clear communication of goals and objectives, value their business partners, and recognize that employees are the most important asset to our company.</p>
<p>Please take the time to search for YOUR next opportunity.</p>
                            <br>
                            Please send your CV to <a href="mailto:hr@montermo.com">hr@montermo.com</a>
                            <img src="../images/services/Job posting.JPG"  style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                    </div>
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
        <script src="../js/angular.min.js"></script>
        <!-- templatemo 409 travel -->
    </body>
</html>