<?php
	session_start();
	include "../backend/init.php";
	include "../backend/session.php";
    $userType = Session::get('user');
    if ($userType != 'admin') {
        header('Location: login.html');
    }
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Montermo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/">Montermo Administrative section</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="../backend/logoutForm.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="brand.php">Brands</a>
                        </li>
                        <li>
                            <a href="product.php">Product</a>
                        </li> 
                        <li>
                            <a href="inbox.php">Inbox</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
                
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <div class="well well-md">
                            <h3 class="text-center">
                                <a href="news.php">
                                    News Section
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="well well-md">
                            <h3 class="text-center">
                                <a href="brand.php">
                                    Brands Section
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="well well-md">
                            <h3 class="text-center">
                                <a href="product.php">
                                    Product Section
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="well well-md">
                            <h3 class="text-center">
                                <a href="inbox.php">
                                    Inbox Section
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slides</h1>
                </div>
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#slide_english" data-toggle="tab">English</a></li>
                        <li><a href="#slide_mongolian" data-toggle="tab">Mongolian</a></li>
                    </ul>
                    <?php 
                    $db = new db\Connector();
                    ?>
                    <div class="tab-content" style="border: 1px solid #ddd; border-top: none; margin-top: 0px; padding-top: 10px;">
                        <div class="tab-pane active" id="slide_english">
                            <?php
                            $db->query("select * from slides where slide_lang = 'english'");
                            $res = $db->resultset();
                            foreach ($res as $slide) {
                            ?>
                            <div class="container-fluid" style="margin-top: 25px; margin-bottom: 20px;">
                                <div class="col-md-8">
                                    <img src="../../images/<?php echo $slide['slide_image']; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-4 well well-md">
                                    <form action="../backend/slideSave.php" method="POST" enctype="multipart/form-data">
                                        <fieldset class="form-group">
                                            <input type="hidden" value="<?php echo $slide['slide_id']; ?>" name="slide_id">
                                            <label for="slide_title">Title</label>
                                            <input type="text" value="<?php echo $slide['slide_title']; ?>" class="form-control" name="slide_title" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_desc">Description</label>
                                            <textarea class="form-control" name="slide_desc" rows="10" required><?php echo $slide['slide_description']; ?></textarea>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_link">Link</label>
                                            <input type="text" class="form-control" name="slide_link" value="<?php echo $slide['slide_link']; ?>" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_lang">Language</label>
                                            <select class="form-control" name="slide_lang" required>
                                                <option <?php if ($slide['slide_lang'] == "english") echo "selected"; ?>>English</option>
                                                <option <?php if ($slide['slide_lang'] == "mongolian") echo "selected"; ?>>Mongolian</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="checkbox" value="Change" name="slide_image_change" brand_edit="change">
                                            <label for="slide_image">Change slide image</label><br>
                                            <input type="file" name="slide_image">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="tab-pane" id="slide_mongolian">
                            <?php
                            $db->query("select * from slides where slide_lang = 'mongolian'");
                            $res = $db->resultset();
                            foreach ($res as $slide) {
                            ?>
                            <div class="container-fluid" style="margin-top: 25px; margin-bottom: 20px;">
                                <div class="col-md-8">
                                    <img src="../../images/<?php echo $slide['slide_image']; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-4 well well-md">
                                    <form action="../backend/slideSave.php" method="POST" enctype="multipart/form-data">
                                        <fieldset class="form-group">
                                            <input type="hidden" value="<?php echo $slide['slide_id']; ?>" name="slide_id">
                                            <label for="slide_title">Title</label>
                                            <input type="text" value="<?php echo $slide['slide_title']; ?>" class="form-control" name="slide_title">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_desc">Description</label>
                                            <textarea class="form-control" name="slide_desc" rows="10"><?php echo $slide['slide_description']; ?></textarea>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_link">Link</label>
                                            <input type="text" class="form-control" name="slide_link" value="<?php echo $slide['slide_link']; ?>">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="slide_lang">Language</label>
                                            <select class="form-control" name="slide_lang">
                                                <option <?php if ($slide['slide_lang'] == "english") echo "selected"; ?>>English</option>
                                                <option <?php if ($slide['slide_lang'] == "mongolian") echo "selected"; ?>>Mongolian</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="checkbox" value="Change" brand_edit="change">
                                            <label for="slide_image">Change slide image</label><br>
                                            <input type="file" name="slide_image">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    -->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- 
    <script data-require="angular.js@1.2.10" data-semver="1.2.10" src="http://code.angularjs.org/1.2.10/angular.js"></script>
    <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
    -->

</body>

</html>
