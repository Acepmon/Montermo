<!DOCTYPE html>
<html lang="en" ng-app="app">

<?php
    include "../backend/init.php";
?>

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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
                <a class="navbar-brand" href="/admin/pages/">Montermo Administrative section</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <h1 class="page-header">News <a href="#news_add_modal" class="btn btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Publish news</a></h1>

                    <?php
                    $db = new db\Connector();
                    $db->query("select * from news order by news_id desc");
                    $newses = $db->resultset();
                    if (empty($newses)) {
                        echo "<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> No news!</div>";
                    } else {
                        echo "<ul class='list-group'>";
                        foreach ($newses as $news) {
                            ?>
                            <li class="list-group-item">
                                <div class="col-sm-1 text-left">
                                    <h4><?php echo ucfirst($news['news_lang']); ?></h4>
                                </div>
                                <div class="col-sm-9 text-center">
                                    <a href="#news_view<?php echo $news['news_id']; ?>" data-toggle="collapse"><h4><?php echo $news['news_header'];?></h4></a>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <a href="../backend/news_deleting.php?news_id=<?php echo $news['news_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                </div>
                                <div id="news_view<?php echo $news['news_id']; ?>" class="col-sm-12 panel-collapse collapse">
                                    <img src="../../images/news/<?php echo $news['news_thumb']; ?>" alt="" class="img-responsive">
                                    <div>
                                        <?php echo $news['news_text']; ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php
                        }
                        echo "</ul>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

        <div id="news_add_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="../backend/news_adding.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3>Publish News</h3>
                    </div>
                    <div class="modal-body" id="output_modal_content">
                        <fieldset class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="news_header" required>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" name="news_text" rows="10" required></textarea>
                        </fieldset>
                        <fieldset>
                            <label>Date</label>
                            <input type="text" name="news_date" class='form-control' value="<?php echo date("Y-m-d"); ?>" readonly>
                        </fieldset>
                        <br>
                        <fieldset class="form-group">
                            <label>Header image</label>
                            <input type="file" name="news_thumb" accept="image/*">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Language</label>
                            <select name="news_lang" class="form-control">
                                <option>English</option>
                                <option>Mongolian</option>
                            </select>
                        </fieldset>
                        <div class="clearfix"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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
