<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
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
                        <li role="presentation" <?php if ($tab_c==0) echo "class='active'"; ?>><a href="#story" aria-controls="story" role="tab" data-toggle="tab">Бидний түүх</a></li>
                        <li role="presentation" <?php if ($tab_c==1) echo "class='active'"; ?>><a href="#values" aria-controls="values" role="tab" data-toggle="tab">Бидний үнэт зүйлс</a></li>
                        <li role="presentation" <?php if ($tab_c==2) echo "class='active'"; ?>><a href="#ohse" aria-controls="ohse" role="tab" data-toggle="tab">ХАБЭА</a></li>
                        <li role="presentation" <?php if ($tab_c==3) echo "class='active'"; ?>><a href="#crs" aria-controls="crs" role="tab" data-toggle="tab">Нийгмийн хариуцлага</a></li>
                        <li role="presentation" <?php if ($tab_c==4) echo "class='active'"; ?>><a href="#careers" aria-controls="careers" role="tab" data-toggle="tab">Ажлын байр</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==0) echo "active"; ?>" id="story">
                            <p>Монтермо ХХК нь уул уурхай, баяжуулах үйлдвэр болон эрчим хүчний 
                                салбарын боловсруулах ба баяжуулах үйлдвэрийн үндсэн дамжлагуудад 
                                өргөн хэрэглэгддэг тусгай тоног төхөөрөмж, сэлбэг хэрэгслийн ханган 
                                нийлүүлэлт, техник үйлчилгээ үзүүлдэг, 2008 онд байгуулагдсан, 
                                үндэсний компани юм.</p>
                            <p>Манай бүтээгдэхүүн, үйлчилгээ нь төмрийн хүдэр, зэс, алт, нүүрс, 
                                молибден, жонш зэрэг бүх төрлийн ашигт малтмалын боловсруулах ба 
                                баяжуулах процесст өргөн хэрэглэгддэг.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==1) echo "active"; ?>" id="values">
				<p>
					АЛСЫН ХАРАА: </br>
Таны баяжуулалтын хэрэгцээг цогцоор нь
				</p>
				</br>
				<p>ЭРХЭМ ЗОРИЛГО: </br>
Хүний хөгжил, бизнесийн боломж  бүрийг нээж салбарын жишгийг бид тодорхойлно
                            </p>
                            <br>
                            <p>ҮНЭТ ЗҮЙЛС:</p>
                            <ul>
                                <li>Нэгдмэл, эерэг цэнэгэтэй хамт олон</li>
                                <li>Санал, санаачилга</li>
                                <li>Аюулгүй ажиллагаа </li>
                                <li>Мэргэжлийн өндөр чадавхи</li>
                                <li>Ажилдаа эзэн байх</li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==2) echo "active"; ?>" id="ohse">
                            <h3>ХӨДӨЛМӨРИЙН АЮУЛГҮЙ БАЙДАЛ ЭРҮҮЛ АХУЙ</h3>
                            <p>
                                Монтермо ХХК нь “Компанийн хөдөлмөрийн аюулгүй байдал, эрүүл ахуйн 
                                бодлого”-ын хүрээнд бүхий л үйл ажиллагаагаа явуулдаг бөгөөд ажилтнуудын 
                                ажлын байрны эрүүл ахуй, хөдөлмөрийн аюулгүй ажиллагаанд нягт 
                                анхаарч ажилладаг.
                            </p>
                            <p>
                                Бид үйл ажиллагааныхаа бүх түвшинд Монгол улсын болон олон улсын хөдөлмөрийн 
                                аюулгүй ажиллагааны хууль тогтоомж, стандартуудыг чандлан мөрдөж, эрүүл ахуйн 
                                шаардлагуудад нийцсэн, байгаль орчинд элдэв сөрөг нөлөөгүй, үйл ажиллагаа 
                                явуулдаг.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==3) echo "active"; ?>" id="crs">
                            <p>Монтермо ХХК нь бизнесийн бүхий л үйл ажиллагаандаа ил тод, нийгмийн 
                                хариуцлагатай, бизнесийн ёс зүйтэй байдлыг эрхэмлэн ажилладаг ба 
                                тогтвортой хөгжилд бодит хувь нэмэр оруулах дараах хөтөлбөрүүдийг 
                                “Нийгмийн хариуцлагын бодлого”-ынхоо хүрээнд хэрэгжүүлэн ажилладаг.
                            </p>
                            <br>
                            <ul>
                                <li>Монтермо 'Хөгжлийн бэрхшээлтэй иргэдийн хөтөлбөр'</li>
                                <li>Монтермо 'Ахмадыг дэмжих хөтөлбөр'</li>
                                <li>Монтермо 'Эрүүл, аюулгүй орчны хөтөлбөр'</li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==4) echo "active"; ?>" id="careers">
                            
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