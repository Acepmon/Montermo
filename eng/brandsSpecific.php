<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>About Page - Travel by templatemo</title>
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
                    if ($brands_id == 1) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/flowrox/flowrox_logo.jpg">
                                </div>
                                <div class="col-md-6">
                                    <h2>Flowrox</h2>
                                    <span>Heavy duty valves, pumps and system</span>
                                </div>
                            </div>
                            <div class="row">
                                <P>
                                    Montermo LLC is an authorized representative of Flowrox Oy, 
                                    Finland in the Mongolian market since 2013. 
                                </P>
                                <P>
                                    Flowrox has over 30 years of experience with more than 120 000 
                                    installed products. Flowrox was the first pinch valve manufacturer 
                                    in the world to get awarded the ISO 9001: 2000 Quality Certificate 
                                    in 1997. 
                                </P>
                                <P>
                                    Flowrox is known for its reliable solutions for demanding pro¬cess 
                                    conditions and deliver flow control technology especially for Mining, 
                                    Minerals & Metallurgy and Energy & Environment industries as well as 
                                    for OEMs, but Flowrox have many prov¬en solutions also in Chemical, 
                                    Pulp & Paper, Oil & Offshore and Cement processes as well as in Waste 
                                    Water Treatment among others. 
                                </P>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Pinch valves </li>
                                    <li>Knife gate valves </li>
                                    <li>Rotary disc valves </li>
                                    <li>Peristaltic hose pumps </li>
                                    <li>Progressive cavity pumps </li>
                                    <li>Spare components </li>
                                    <li>Service agreements for heavy duty valves, pumps and system</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img class="img-responsive" src="../images/brands/flowrox/top_quality/all_valves.jpg">
                                <img class="img-responsive" src="../images/brands/flowrox/top_quality/flowrox_products.jpg">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 2) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/cidra/cidra_logo_downgraded.jpg">
                                </div>
                                <div class="col-md-6">
                                    <h2>CiDra</h2>
                                    <span>Pipeline flow & wear monitoring sensors</span>
                                </div>
                            </div>
                            <div class="row">
                                <P>
                                    Montermo LLC has been working as an authorized representative of CiDRA 
                                    Corporate Services Inc, USA in Mongolia since 2014. 
                                </P>
                                <p>
                                    CiDRA is a leader in Process Optimization and Enhanced Recovery solutions 
                                    and services to many of the world’s largest industrial markets. CiDRA’s 
                                    Intellectual Property portfolio contains 700 U.S. and International patent 
                                    applications; moreover, 65% of the world’s copper is processed through 
                                    CIDRA products.
                                </p>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>
                                        SONARtrac® Flow Measurement.
                                    </li>
                                    <li>
                                        HALO® Pipe Wear Measurement.
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/cidra/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/cidra/included_pics/img2.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/cidra/included_pics/img3.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/cidra/included_pics/img4.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/cidra/included_pics/img5.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/cidra/included_pics/img6.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 3) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/multotec/multotec_logo.gif">
                                </div>
                                <div class="col-md-6">
                                    <h2>Multotec</h2>
                                    <span>Processing equipment and consumable parts</span>
                                </div>
                            </div>
                            <div class="row">
                                <P>
                                    Montermo LLC has been working as an `Authorized Representative` of 
                                    The Multotec Group, South African in the Mongolia since 2014.
                                </P>
                                <p>
                                    The Multotec Group, established more than thirty years ago, is a 
                                    South African organization with German shareholding. Its core business 
                                    is the supply of products and services to the mining, mineral beneficiation 
                                    and power generation industries.
                                </p>
                                <p>
                                    Quality remains an integral part of the group’s ongoing strategy and 
                                    the entire organization is ISO 9001:2008 certified.
                                </p>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Screening and Flotation Solutions</li>
                                    <li>Process Equipment Solutions</li>
                                    <li>Solid / Liquid Separation Solutions</li>
                                    <li>Rubber Wear Solutions</li>
                                    <li>Wear Resistant Linings</li>
                                    <li>Conveyor Belt Fastening Solutions</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/multotec/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img2.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img3.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img4.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img5.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img6.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img7.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img8.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img9.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img10.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img11.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img12.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img13.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img14.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img15.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img16.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img18.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img19.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img20.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img21.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img22.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/multotec/included_pics/img23.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 4) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/flygt/flygt_logo.png">
                                </div>
                                <div class="col-md-6">
                                    <h2>Flygt</h2>
                                    <span>Pumps, mixers, monitoring and control equipment</span>
                                </div>
                            </div>
                            <div class="row">
                                <P>
                                    Montermo LLC has been working for a trade partner of Flygt brand 
                                    of Xylem, Sweden in Mongolian market since 2014. 
                                    The world’s premier manufacturer of submersible pumps, mixers and 
                                    mechanical aeration equipment for use in mar¬kets ranging from water 
                                    and wastewater treatment, raw water supply, abrasive or contaminated 
                                    industrial processes, mining and irrigation. 
                                </P>
                                <ul>
                                    <li>Flygt mixers and agitators are systematically tested for thrust and comply with ISO 21630:2007 for sub mersible mixers of all sizes </li>
                                    <li>There are more than 200,000 Flygt mixers installed in wastewater treatment plants around the world </li>
                                    <li>One Flygt dewatering pump is sold every three minutes somewhere around the world </li>
                                    <li>175,200 dewatering pumps are put into service around the world every year </li>
                                </ul>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Pumps</li>
                                    <li>Mixers</li>
                                    <li>Dewatering pumps and equipment</li>
                                    <li>Monitoring and Control equipment</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/flygt/included_pics/img1.png" alt="" class="img-responsive">
                                <img src="../images/brands/flygt/included_pics/img2.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/flygt/included_pics/img3.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/flygt/included_pics/img4.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 5) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/puda/puda_logo.jpg">
                                </div>
                                <div class="col-md-6">
                                    <h2>Puda</h2>
                                    <span>Weighing and filling equipments and systems</span>
                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    Montermo LLC has been working for an official distributor of PUDA-International 
                                    Packaging Machinery Inc, Canada in the Mongolian market since 2014. 
                                    PUDA produces weighing and filling equipment and systems. Automated bagging 
                                    facilitates the quantifying and packag¬ing of various products such as packaging 
                                    powders, pellets, flakes or granules for many different industries such as food, 
                                    feed, chemical and building materials industries. Furthermore, PUDA`s systems have 
                                    been used with a variety of packaging materials: paper, plastic, as well woven polypropylene.
                                </p>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Valve bag packing series</li>
                                    <li>Open mouth bag packing series</li>
                                    <li>Big bag handling series</li>
                                    <li>In-process weighing series</li>
                                    <li>Mobile Containerized Bagging System</li>
                                    <li>Mixer series</li>
                                    <li>Dry Mixing and Blending Line </li>
                                    <li>Automatic packing and stacking line </li>
                                    <li>Others (conveyor, platform and crane scales)</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/puda/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img2.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img3.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img4.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img5.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img6.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img7.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img8.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/puda/included_pics/img9.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 6) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/geho/geho_logo.gif">
                                </div>
                                <div class="col-md-6">
                                    <h2>Geho</h2>
                                    <span>PD Slurry pumps</span>
                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    GEHO® pumps are world market and technological leaders in the design and 
                                    manufacture of piston, piston diaphragm and hose diaphragm pumps for slurry, 
                                    sludge and paste applications. The pumps handle a wide range of applications 
                                    such as long-distance slurry pipeline transport, mine dewatering and backfill, 
                                    autoclave, reactor and digester feed, gasifier feed and high density tailings 
                                    disposal.
                                </p>
                                <p>
                                    The crankshaft driven piston pumps handle slurries and sludges with moderate abrasivity, 
                                    medium to high viscosity, mild corrosivity, up to 6 mm particle size and up to 
                                    75% solids content.
                                </p>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Crankshaft driven piston pumps</li>
                                    <li>Hose diaphragm pumps</li>
                                    <li>Hydraulic driven piston pumps</li>
                                    <li>Piston diaphragm pumps</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/geho/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/geho/included_pics/img2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 7) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/kamat/kamat_logo.gif">
                                </div>
                                <div class="col-md-6">
                                    <h2>Kamat</h2>
                                    <span>High pressure plunger pumps and pump systems</span>
                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    KAMAT produces high pressure plunger pumps, with operating pressures of up to 
                                    3,500 bar, for the most demanding industrial applications. Our pumps excel 
                                    through their small dimensions, as well as high modularity that makes special 
                                    designs and single piece production possible.
                                </p>
                                <p>
                                    KAMAT plunger pumps with integrated transmissions, are the heart of any KAMAT 
                                    high pressure system. With minimum space requirements it ensures continuous high 
                                    pressure and maximum reliability. While achieving efficiency of over 90 percent, 
                                    energy is utilized to the fullest. Further advantages of KAMAT high pressure pumps:
                                </p>
                                <ul>
                                    <li>Modular construction makes special designs and single piece production possible</li>
                                    <li>Simple operation and maintenance with customer friendly service</li>
                                    <li>High versatility for pressure and flow is achieved simply by changing the plunger conversion kit</li>
                                    <li>Reliable gearboxes with high lubrication security</li>
                                    <li>Compliance with electrical & mechanical international standards like eg ATEX, API 674</li>
                                </ul>
                                <p>
                                    KAMAT offers suitable pumps for any demand. Input power range from at 15 kW and reaches 
                                    up to 800 kW. Operating pressure can be chosen from between 0 to 3,500 bar. The spectrum 
                                    of usable fluids range from high viscous, watery or loaded with solids to very hot or 
                                    very cold.
                                </p>
                                <p>
                                    A plunger pump is a type of positive displacement pump where the high-pressure seal is 
                                    stationary and a smooth cylindrical plunger slides through the seal. This makes them 
                                    different from piston pumps and allows them to be used at higher pressures.
                                </p>
                            </div>
                            <div class="row">
                                <img src="../images/brands/kamat/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/kamat/included_pics/img2.gif" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    } else if ($brands_id == 8) {
                        ?>
                        <div class="brand">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/brands/tyco/tyco_logo.jpg">
                                </div>
                                <div class="col-md-6">
                                    <h2>Tyco</h2>
                                    <span>Actuators & Controls</span>
                                </div>
                            </div>
                            <div class="row">
                                <p>
                                    Pentair offers one of the largest portfolios of actuation and controls products available 
                                    in the market today.  Global manufacturing facilities produce electric, pneumatic, hydraulic, 
                                    gas-hydraulic and subsea actuators along with rotary and linear valve position and control monitors.  
                                    Servicing a wide range of industries including oil and gas (onshore and offshore), petrochemical, 
                                    chemical and power generation, Pentair has the applications experience and customization capabilities 
                                    to find the optimum solution for your valve automation needs.  Whether it’s providing a bare actuator, 
                                    helping to size an actuator or designing a customized automation solution, Pentair actuation and controls 
                                    can help.
                                </p>
                                <strong>Product range:</strong>
                                <ul>
                                    <li>Electric Actuators</li>
                                    <li>Hydraulic Actuators</li>
                                    <li>Manual Operators</li>
                                    <li>Pneumatic Actuators</li>
                                    <li>Pneumatic Controls</li>
                                </ul>
                            </div>
                            <div class="row">
                                <img src="../images/brands/tyco/included_pics/img1.jpg" alt="" class="img-responsive">
                                <img src="../images/brands/tyco/included_pics/img2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="row">
                                <a href="products.php" class="btn btn-primary">Go Back!</a>
                            </div>
                        </div>
                        <?php
                    }
                }

                ?>
                </div>
                <div class="col-md-4">

                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
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