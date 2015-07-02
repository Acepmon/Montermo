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

        <div class="middle-content" id="aboutus" ng-app="our_company">
            <div class="container">

                <?php

                    $tab = isset($_GET['tab']) ? $_GET['tab'] : "";
                    $tab_c = 0;
                    if ($tab == "life") {
                        $tab_c = 0;
                    } else if ($tab == "job") {
                        $tab_c = 1;
                    } else if ($tab == "employment") {
                        $tab_c = 2;
                    } else if ($tab == "jobapp") {
                        $tab_c = 3;
                    }

                ?>
            
                <div class="col-lg-3">
                    <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li role="presentation" <?php if ($tab_c==0) echo "class='active'"; ?>><a href="#life" aria-controls="life" role="tab" data-toggle="tab">Техник үйлчилгээ</a></li>
                        <li role="presentation" <?php if ($tab_c==1) echo "class='active'"; ?>><a href="#job" role="tab" data-toggle="tab" aria-control="job">Зөвлөгөө</a></li>
                        <li role="presentation" <?php if ($tab_c==2) echo "class='active'"; ?>><a href="#employment" role="tab" data-toggle="tab" aria-control="employment">Суурилуулалт</a></li>
                        <!-- <li role="presentation" <?php /* if ($tab_c==3) echo "class='active'"; */ ?>><a href="#jobapp" role="tab" data-toggle="tab" aria-control="jobapp">Анкет татах</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==0) echo "active"; ?>" id="life">
                            <h3>Техник үйлчилгээ</h3>
                            <P>
                                Бид харилцагчиддаа өндөр чанар бүхий сэлбэг хэрэгсэл, эд анги нийлүүлэхээс 
                                гадна хамгийн шилдэг найдвартай үйлчилгээг үзүүлэхийг цаг ямагт эрхэмлэн ажилладаг. 
                                Ингэснээр харилцагч бүрийнхээ тоног төхөөрөмжийн тасралтгүй ажиллагааг хангах, үйлдвэрлэлийг 
                                хэвийн явуулах, бүтээмжийг нэмэгдүүлэх, сэтгэл ханамжийг дээшлүүлэхэд бодит хувь нэмэр оруулдаг юм. 
                            </P>
                            <img src="../images/services/news4.JPG" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                        <div class="tab-pane <?php if ($tab_c==1) echo "active"; ?>" id="job">
                            <h3>Зөвлөгөө</h3>
                            <P>
                                Бид уул уурхайн баяжуулах салбарын тоног төхөөрөмж, сэлбэг хэрэгсэл үйлдвэрлэгчдийн талаар 
                                мэдээллийн баазтай ба салбартаа тэргүүлэгч үйлдвэрлэгчидтэй хамтран ажилладаг. Бид өөрсдийн 
                                туршлага, мэдлэг, харилцаа холбоонд үндэслэн, харилцагчийнхаа тусгай хэрэгцээ, шаардлагад нийцсэн, 
                                ханган нийлүүлэх, зөвлөх үйлчилгээг үзүүлдэг.
                            </P>
                            <br>
                            <P>
                                Монтермо ХХК-ийн худалдааны болон инженерийн баг таны уул уурхайн бүх хэрэгцээг дээр дурьдсан 
                                мэдээллийн баазад тулгуурлан дэлхий даяарх үйлдвэрлэгч, ханган нийлүүлэгчдээс тохиромжтой шийдлийг 
                                гарган нийлүүлэлт, угсралт суурилуулалт болон нийлүүлэлтийн дараах зөвлөгөө үйлчилгээг үзүүлэх боломжтой.
                            </P>
                            <img src="../images/services/news4-2.JPG" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                        <div class="tab-pane <?php if ($tab_c==2) echo "active"; ?>" id="employment">
                            <h3>Суурилуулалт</h3>
                            <P>
                                Манай компани уул уурхай, баяжуулалтын компаниудтай хамтран ажилласан арвин туршлагатай бөгөөд шуурхай нийлүүлэлт, 
                                угсралт суурилуулалтын үйлчилгээгээрээ үйлчдвэрлэлийн эрсдэлийг бууруулах, 
                                бодит гүйцэтгэлийг нэмэгдүүлэхийг ямагт зорин ажилладаг.
                            </P>
                            <br>
                            <P>
                                Бид харилцагчидтайгаа бизнесийн амжилттай урт удаан харилцааг хөгжүүлэн ажилладаг ба таны бүхий л хүсэлтийг хүлээн 
                                авахад бэлэн байдаг. Бүх төрлийн өргөн сонголттой бүтээгдэхүүнүүддээ өрсөлдөхүйц үнэ санал болгодог ба Монгол 
                                улсын нутаг дэвсгэрт дурын цэгт тээвэрлэн, угралт суурилуулалтын ажлыг өндөр чанартайгаар гүйцэтгэж байна. 
                            </P>
                            <img src="../images/services/halo_service_01.jpg" style="min-width: auto; max-width: 100%; height: auto; margin-top: 20px;">
                        </div>
                        <!-- <div class="tab-pane <?php /* if ($tab_c==3) echo "active"; */ ?>" id="jobapp">
                            Дараах ажлын байрны анкетыг бөглөөд <a href="mailto:hr@montermo.com">hr@montermo.com</a> хаяг руу илгээнэ үү.
                        </div> -->
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
        <script src="../js/app.js"></script>
        <!-- templatemo 409 travel -->
    </body>
</html>