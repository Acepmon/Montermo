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
                        <li role="presentation" <?php if ($tab_c==0) echo "class='active'"; ?>><a href="#life" aria-controls="life" role="tab" data-toggle="tab">Танд олдох боломжууд</a></li>
                        <li role="presentation" <?php if ($tab_c==1) echo "class='active'"; ?>><a href="#job" role="tab" data-toggle="tab" aria-control="job">Нээлттэй ажлын байр</a></li>
                        <li role="presentation" <?php if ($tab_c==2) echo "class='active'"; ?>><a href="#employment" role="tab" data-toggle="tab" aria-control="employment">Ажилтан сонгон шалгаруулах үйл явц</a></li>
                        <li role="presentation" <?php if ($tab_c==3) echo "class='active'"; ?>><a href="#jobapp" role="tab" data-toggle="tab" aria-control="jobapp">Анкет татах</a></li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane <?php if ($tab_c==0) echo "active"; ?>" id="life">
                            <p>
                                Монтермо ХХК нь ажил олгох болон сонгон шалгаруулах явцад ижил 
                                боломжоор хангах нээлттэй бодлого баримталдаг бөгөөд Мэдлэг 
                                чадвартай - Эрч хүчтэй - Бүтээлч хүн бүрийг нээлттэй ажлын 
                                байранд урьж байна.
                            </p>
                            <br>
                            <strong>ТАНД ОЛГОХ БОЛОМЖУУД:</strong>
                            <ul>
                                <li>Тогтвортой, таатай ажлын байр</li>
                                <li>Зах зээлд өрсөлдөхүйц цалин</li>
                                <li>Ажлын гүйцэтгэлээс хамаарсан урамшууллын бодлого</li>
                                <li>Ажил хэрэгч, эвсэг хамт олон</li>
                                <li>Өсч дэвжих, өөрийгөө хөгжүүлэх өргөн боломж</li>
                                <li>Нийгмийн төрөл бүрийн халамж, дэмжлэгүүд</li>
                            </ul>
                            <br>
                            <strong>НЭЭЛТТЭЙ АЖЛЫН БАЙРАНД ТАВИГДАХ НИЙТЛЭГ ШААРДЛАГА:</strong>
                            <ul>
                                <li>Бие даан бүтээлчээр сэтгэдэг, идэвхи санаачлагатай, багаар ажиллах чадвартай</li>
                                <li>Хариуцлагатай, ажлын ачаалал даах чадвартай</li>
                                <li>Цаашид тогтвор суурьшилтай ажиллах</li>
                                <li>Харилцааны өндөр чадвар, хувийн зохион байгуулалт, цагийн менежмент сайтай</li>
                                <li>Англи хэлний өндөр мэдлэгтэй</li>
                                <li>Компьютерийн хэрэглээний программуудыг бүрэн эзэмшсэн</li>
                            </ul>
                        </div>
                        <div class="tab-pane <?php if ($tab_c==1) echo "active"; ?>" id="job">
                            Нээлттэй ажлын байр байхгүй байна.
                        </div>
                        <div class="tab-pane <?php if ($tab_c==2) echo "active"; ?>" id="employment">
                        </div>
                        <div class="tab-pane <?php if ($tab_c==3) echo "active"; ?>" id="jobapp">
                            Дараах ажлын байрны анкетыг бөглөөд <a href="mailto:hr@montermo.com">hr@montermo.com</a> хаяг руу илгээнэ үү.
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
        <script src="../js/app.js"></script>
        <!-- templatemo 409 travel -->
    </body>
</html>