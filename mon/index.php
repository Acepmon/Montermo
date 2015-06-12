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
        <title>Montermo - Homepage</title>
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


        <div class="flexslider">
            <ul class="slides">
                <?php
                $db = new db\Connector();
                $db->query("select * from slides where slide_lang = 'mongolian'");
                $res = $db->resultset();
                foreach ($res as $slide) {
                ?>
                <li>
                    <div class="overlay"></div>
                    <img src="../images/<?php echo $slide['slide_image']; ?>" alt="Special 1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price"><?php echo $slide['slide_title']; ?></span>
                                    <h3 class="title"></h3>
                                    <p><?php echo $slide['slide_description']; ?></p>
                                    <!-- <a href="<?php echo $slide['slide_link']; ?>" class="slider-btn">Learn more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div> <!-- /.flexslider -->

        
        
        <div class="container">
            <div class="row">
                <div class="our-listing owl-carousel">
                    
                    <!-- Image width : 263px and height : 195px -->
                    <?php
                        $db = new db\Connector();
                        $db->query("select * from brands where brand_lang = 'mongolian'");
                        foreach ($db->resultset() as $row) {
                            $id = $row['brand_id'];
                            $title = $row['brand_title'];
                            $logo = $row['brand_logo'];
                            $s_desc = $row['brand_short_desc'];
                            ?>

                            <div class="list-item">
                                <div class="list-thumb">
                                    <div class="title">
                                        <h4><?php echo $title; ?></h4>
                                    </div>
                                    <img src="../images/brand_images/<?php echo $logo; ?>" alt="<?php echo $title; ?>">
                                </div>
                                <div class="list-content">
                                    <h5></h5>
                                    <div class="short_desc">
                                        <span><?php echo $s_desc; ?></span>
                                    </div>
                                    <a href="brandsSpecific.php?brands_id=<?php echo $id; ?>" class="price-btn">Цааш унших</a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                    <!-- <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>FLOWROX</h4>
                            </div>
                            <img src="../images/brands/flowrox/flowrox_logo.jpg" alt="Flowrox">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Хаалт, насос, шийдлүүд</span>
                            <a href="brandsSpecific.php?brands_id=1" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>CiDra</h4>
                            </div>
                            <img src="../images/brands/cidra/cidra_logo_downgraded.jpg" alt="CiDra">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Шугам хоолойн урсгал мэдрэгч ба элэгдлийн түвшин тодорхойлогч</span>
                            <a href="brandsSpecific.php?brands_id=2" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Multotec</h4>
                            </div>
                            <img src="../images/brands/multotec/multotec_logo.gif" alt="Multotec">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Баяжуулах үйлдвэрийн тоног төхөөрөмж</span>
                            <a href="brandsSpecific.php?brands_id=3" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Flygt</h4>
                            </div>
                            <img src="../images/brands/flygt/flygt_logo.png" alt="Flygt">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Насос, холигч, ус шавхах төхөөрөмж, хяналт, шинжилгээний төхөөрөмжүүд</span>
                            <a href="brandsSpecific.php?brands_id=4" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Puda</h4>
                            </div>
                            <img src="../images/brands/puda/puda_logo.jpg" alt="Puda">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Хэмжилт ба савлалтын тоног төхөөрөмж</span>
                            <a href="brandsSpecific.php?brands_id=5" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Geho</h4>
                            </div>
                            <img src="../images/brands/geho/geho_logo.gif" alt="Geho">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>PD Slurry pumps</span>
                            <a href="brandsSpecific.php?brands_id=6" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Kamat</h4>
                            </div>
                            <img src="../images/brands/kamat/kamat_logo.gif" alt="Kamat">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>High pressure plunger pumps and pump systems</span>
                            <a href="brandsSpecific.php?brands_id=7" class="price-btn">Цааш унших</a>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Tyco</h4>
                            </div>
                            <img src="../images/brands/tyco/tyco_logo.jpg" alt="Tyco">
                        </div>
                        <div class="list-content">
                            <h5></h5>
                            <span>Actuators & Controls</span>
                            <a href="brandsSpecific.php?brands_id=8" class="price-btn">Цааш унших</a>
                        </div>
                    </div> -->

                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    &nbsp;
                </div>
			</div>
            <div class="row blue"><!-- first row -->	
                    
                    <div class="col-md-4"><!-- second column -->
                        <div class="widget-item">
                            <h3 class="widget-title"><a href="about.php">Бидний тухай</a></h3>
                            <div class="sample-thumb">
                                <img src="../images/event_1.jpg" alt="New Event" title="New Event">
                            </div> <!-- /.sample-thumb -->
                            <h4 class="consult-title">Нийгмийн хариуцлага</h4>
                            <P>
                                Монтермо ХХК нь бизнесийн бүхий л үйл ажиллагаандаа ил тод, 
                                нийгмийн хариуцлагатай, бизнесийн ёс зүйтэй байдлыг эрхэмлэн ажилладаг
                                ба тогтвортой хөгжилд бодит хувь нэмэр оруулах дараах хөтөлбөрүүдийг 
                                “Нийгмийн хариуцлагын бодлого”-ынхоо хүрээнд хэрэгжүүлэн ажилладаг
                            </P>
							<p class="customMore"><a href="about.php">&#62; Дэлгэрэнгүй</a></p>
						</div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-4"><!-- third column -->
                        <div class="widget-item">
                            <h3 class="widget-title"><a href="careers.php">Ажлын байр</a></h3>
                            <div class="sample-thumb">
                                <img src="../images/event_2.jpg" alt="Special Eve" title="Special Eve">
                            </div> <!-- /.sample-thumb -->
                            <h4 class="consult-title">Ирээдүйд гарах таны түлхүүр</h4>
                            <p>
                            Монтермо ХХК нь ажил олгох болон сонгон шалгаруулах явцад ижил боломжоор хангах нээлттэй бодлого баримталдаг бөгөөд Мэдлэг чадвартай - Эрч хүчтэй - Бүтээлч хүн бүрийг нээлттэй ажлын байранд урьж байна.
                            </p>
                            
							<p class="customMore"><a href="careers.php">&#62; Дэлгэрэнгүй</a></p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
                    
					<div class="col-md-4">
                        <div class="widget-item">
                            <h3 class="widget-title"><a href="news.php">Шинэ мэдээ</a></h3>
                            <?php
                                $db->query("select * from news where news_lang = 'english' order by news_id desc limit 4");
                                foreach($db->resultset() as $res) {
                                    ?>
                                    <div class="post-small">
                                        <div class="post-date">
                                            <?php
                                                $date = $res['news_date'];
                                                $dateExploded = explode("-", $date);
                                                $month = $dateExploded['1'];
                                                $day = $dateExploded['2'];

                                                $monthText = getMonthText($month);
                                            ?>
                                            <span class="time"><?php echo $day; ?></span>
                                            <span><?php echo $monthText; ?></span>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                <a href="newsSpecific.php?news_id=<?php echo $res['news_id']; ?>">
                                                    <?php echo $res['news_header']; ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
							
							<p class="customMore"><a href="news.php">&#62; Дэлгэрэнгүй</a></p>
							
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-4 -->
					
					
                    
                </div> <!-- /.row first -->
        </div> <!-- /.container -->

		<div class="middle-content"></div>


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