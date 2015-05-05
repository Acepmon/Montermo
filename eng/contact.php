<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Contact Page - Travel by templatemo</title>
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

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">Our Address</h3>
                        <div class="map-holder"></div>
                        <div class="contact-infos">						
                            <ul>
                                <li>Website: <a href="http://www.montermo.com">www.montermo.com</a></li>
                                <li>Khonkhor-147a, Songinokhairkhan District Khoroo -11, Ulaanbaatar city, Mongolia</li>
                                <li>P.O.box-089, Ulaanbaatar-14253</li>
                                <li><br> Tel: (976) - 70001563 <br> Fax: (976) - 70001563</li>
                                <li>Email: <a href="mailto:ivshin@montermo.com">ivshin@montermo.com, </a><a href="mailto:montermo@yandex.com">montermo@yandex.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Contact Us</h3>
                        <div id="acceptContactOutput">
                        </div>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="#" method="post">
                                <p>
                                    <input name="name" type="text" id="name" placeholder=" Name">
                                </p>
                                <p>
                                    <input name="email" type="email" id="email" placeholder=" Email"> 
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Position title"> 
                                </p>
								<p>
                                    <input name="company_name" type="text" id="company_name" placeholder="Company name"> 
                                </p>
                                <p>
                                    <textarea name="message" id="message" placeholder="Message"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>


        <div class="site-footer">
            <?php include 'footer.php'; ?>
        </div> <!-- /.site-footer -->

        <script src="../js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="../js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('.first-map, .map-holder').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>
        <!-- templatemo 409 travel -->
    </body>
</html>