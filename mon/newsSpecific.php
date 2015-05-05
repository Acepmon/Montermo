<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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

        <div class="page-top" id="templatemo_events">
        </div> <!-- /.page-header -->

        <div class="middle-content">
			<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    <a href="news.php">Мэдээ</a>
                    <!-- <small> Recent</small> -->
                </h1>

                <?php

                $news_id = isset($_GET['news_id']) ? $_GET['news_id'] : null;
                if (!empty($news_id)) {
                    if ($news_id == 4) {
                        ?>
                        <div class="news_post">
                            <h2>
                                АНУ-ын PENTAIR компанитай хамтран Оюу Толгой ХХК-ийн баяжуулах үйлдвэрд шугам хоолойн хаалтны судалгааг хийлээ
                            </h2>
                            <p>
                                2015/04/30 - ны өдөр тавигдав.
                            </p>
                            <img class="img-responsive" src="" alt="">
                            <p>
                                Монтермо ХХК нь 2014 оноос АНУ-ын “Pentair Ltd”-ийн Монгол дахь албан ёсны 
                                төлөөлөгчөөр ажиллаж байна. 2015 оны 3-р сарын 24-27-нд манай компанийн урилгаар 
                                TYCO брэндийг суурилуулах мэргэжилтнүүд ирж, Оюу Толгой ХХК-ийн баяжуулах үйлдвэр 
                                дэх хаалт, хавхлаганы судалгаа хийсэн байна. Түүнчлэн судалгаандаа үндэслэн TYCO 
                                брэндийг суурилуулах талаар зөвлөгөө өгсөн байна.
                            </p>
                            <p>
                                Pentair offers one of the largest portfolios of actuation and controls products 
                                available in the market today.  Global manufacturing facilities produce electric, 
                                pneumatic, hydraulic, gas-hydraulic and subsea actuators along with rotary and linear 
                                valve position and control monitors.  Servicing a wide range of industries including 
                                oil and gas (onshore and offshore), petrochemical, chemical and power generation, 
                                Pentair has the applications experience and customization capabilities to find the 
                                optimum solution for your valve automation needs.  Whether it’s providing a bare actuator, 
                                helping to size an actuator or designing a customized automation solution, 
                                Pentair actuation and controls can help.
                            </p>
                            <strong>Product range: </strong>
                            <ul>
                                <li>Electric Actuators</li>
                                <li>Hydraulic Actuators</li>
                                <li>Manual Operators</li>
                                <li>Pneumatic Actuators</li>
                                <li>Pneumatic Controls</li>
                            </ul>
                            <a href="news.php" class="btn btn-primary">Буцах!</a>
                        </div>
                        <?php
                    } else if ($news_id == 3) {
                        ?>
                        <div class="news_post">
                            <h2>АНУ-ын “CiDRA Corporate Services Inc”-тэй хамтран “Эрдэнэт Үйлдвэр” ХХК-д сургалт явууллаа</h2>
                            <P>
                                2015/04/05 - ны өдөр тавигдав.
                            </P>
                            <img class="img-responsive" src="" alt="">
                            <P>
                                Монтермо ХХК нь 2014 оноос АНУ-ын “CiDRA Corporate Services Inc”-ийн Монгол дахь албан 
                                ёсны төлөөлөгчөөр ажиллаж байна. 2015 оны 4-р сард CiDRA компанийн мэргэжилтэн John Viega 
                                хүрэлцэн ирэж, Эрдэнэт Үйлдвэр ХХК-ийн 30 ажилтанд 1 хоног техникийн сургалт үзүүллээ. 
                                Тус сургалтын үеэр баяжуулах үйлдвэрийн шугам хоолойн ашиглалтыг сайжруулах, эвдрэлээс 
                                сэргийлэх талаар зөвлөгөө өгсөн байна.
                            </P>
                            <P>
                                CiDRA нь үйлдвэрийн процессийн оновчлол, эрчимжүүлсэн аргаар эрдэс баяжуулах шийдлээрээ 
                                тэргүүлэгч компани бөгөөд дэлхийн томоохон үйлдвэрүүдэд өөрийн шийдлээ нэвтрүүлсэн. 
                                CiDRA нь АНУ-ын болон олон улсын зэрэглэлтэй 700 гаруй патентыг эзэмшдэг бөгөөд албан 
                                ёсны оюуны өмчийн бүртгэлтэй. Дэлхийн нийт зэсийн баяжмалын 65% нь 
                                CiDRA-ийн бүтээгдэхүүнүүдээр дамжин өнгөрдөг.
                            </P>
                            <strong>Бүтээгдэхүүний нэр төрөл: </strong>
                            <ul>
                                <li>SONARtrac®- Шугаман хоолойн урсгал мэдрэгч - 
                                    Шугаман хоолойгоор дамжин өнгөрч буй баяжмалын 
                                    тунг тодорхойлдог ба хийн хэмжээг гаргаж ирдгээрээ 
                                    баяжмалын ашигтай эсэхийг тодорхойлдог.</li>
                                <li>
                                    HALO® – Элэгдлийн түвшин тодорхойлогч - 
                                    Шугаман хоолойн хананы зузааныг дуун 
                                    дохионы тусламжтайгаар тогтоодог бөгөөд 
                                    аливаа цооролт задралт үүсэхээс сэргийлдэг.
                                </li>
                            </ul>
                            <a href="news.php" class="btn btn-primary">Буцах!</a>
                        </div>
                        <?php
                    } else if ($news_id == 2) {
                        ?>
                        <div class="news_post">
                            <h2>АНУ-ын “CiDRA Corporate Services Inc”-тэй хамтран Оюу Толгой ХХК-д техникийн үйлчилгээ үзүүллээ</h2>
                            <P>
                                2015/02/21 - ны өдөр тавигдав.
                            </P>
                            <img class="img-responsive" src="" alt="">
                            <P>
                                Монтермо ХХК нь 2014 оноос АНУ-ын “CiDRA Corporate Services Inc”-ийн Монгол дахь албан 
                                ёсны төлөөлөгчөөр ажиллаж байна. 2015 оны 4-р сард CiDRA компанийн мэргэжилтэн John Viega 
                                хүрэлцэн ирэж, Эрдэнэт Үйлдвэр ХХК-ийн 30 ажилтанд 1 хоног техникийн сургалт үзүүллээ. 
                                Тус сургалтын үеэр баяжуулах үйлдвэрийн шугам хоолойн ашиглалтыг сайжруулах, эвдрэлээс 
                                сэргийлэх талаар зөвлөгөө өгсөн байна.
                            </P>
                            <P>
                                CiDRA нь үйлдвэрийн процессийн оновчлол, эрчимжүүлсэн аргаар эрдэс баяжуулах шийдлээрээ 
                                тэргүүлэгч компани бөгөөд дэлхийн томоохон үйлдвэрүүдэд өөрийн шийдлээ нэвтрүүлсэн. 
                                CiDRA нь АНУ-ын болон олон улсын зэрэглэлтэй 700 гаруй патентыг эзэмшдэг бөгөөд албан 
                                ёсны оюуны өмчийн бүртгэлтэй. Дэлхийн нийт зэсийн баяжмалын 65% нь 
                                CiDRA-ийн бүтээгдэхүүнүүдээр дамжин өнгөрдөг.
                            </P>
                            <strong>Бүтээгдэхүүний нэр төрөл: </strong>
                            <ul>
                                <li>SONARtrac®- Шугаман хоолойн урсгал мэдрэгч - 
                                    Шугаман хоолойгоор дамжин өнгөрч буй баяжмалын 
                                    тунг тодорхойлдог ба хийн хэмжээг гаргаж ирдгээрээ 
                                    баяжмалын ашигтай эсэхийг тодорхойлдог.</li>
                                <li>
                                    HALO® – Элэгдлийн түвшин тодорхойлогч - 
                                    Шугаман хоолойн хананы зузааныг дуун 
                                    дохионы тусламжтайгаар тогтоодог бөгөөд 
                                    аливаа цооролт задралт үүсэхээс сэргийлдэг.
                                </li>
                            </ul>
                            <a href="news.php" class="btn btn-primary">Буцах!</a>
                        </div>
                        <?php
                    } else if ($news_id == 1) {
                        ?>
                        <div class="news_post">
                            <h2>Монтермо ХХК “Mine Tech 2014” үзэсгэлэнд амжилттай оролцлоо</h2>
                            <P>
                                2014/04/01 - ны өдөр тавигдав.
                            </P>
                            <img class="img-responsive" src="" alt="">
                            <P>
                                Уул Уурхайн Үндэсний Ассоциациас жил бүр зохион байгуулдаг "Mine Tech" 
                                олон улсын уул уурхайн үзэсгэлэнд Монтермо ХХК анх удаа амжилттай оролцлоо. 
                                Мишээл Экспод 3 хоног үргэлжилсэн уг үзэсгэлэнд гадаад дотоодын нийт 70 гаруй 
                                компани оролцсон бөгөөд энэ үеэр Монтермо ХХК нийт харилцагчиддаа өөрсдийн түнш 
                                байгууллагуудын бүтээгдэхүүн үйлчилгээг танилцуулж, олон талаар хамтран ажиллах 
                                санал солилцлоо. Үзэсгэлэнгийн үеэр гадаад дотоодын нөлөө бүхий олон байгууллагын 
                                төлөөлөгчид хүрэлцэн ирж манай компанийн үйл ажиллагаатай танилцан, харилцан санал 
                                солилцох зэргээр үр дүнтэй арга хэмжээ болж өнгөрлөө.
                            </P>
                            <P>
                                Бид бүтээгдэхүүнийхээ нэр төрлүүдийг амжилттай сурталчилж, ингэснээрээ үйлчлүүлэгчдийн 
                                дунд өөрсдийн бүтээгдэхүүнийхээ талаар өргөн хүрээний, дэлгэрэнгүй ойлголтыг өгч чадсан юм.
                            </P>
                            <a href="news.php" class="btn btn-primary">Буцах!</a>
                        </div>
                        <?php
                    }
                }

                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

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
        <!-- templatemo 409 travel -->
    </body>
</html>