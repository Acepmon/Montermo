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
            <div class="row" id="brands">
                <div class="col-lg-12">
                    <h1 class="page-header">Brands</h1>
                    <p>
                        <a href="#brand_add_modal" class="btn btn-success" data-toggle="modal">
                            <span class="glyphicon glyphicon-plus"></span> Add new brand
                        </a>
                    </p>
                    <div class="panel-group" id="brands_group" role="tablist" aria-multiselectable="true">
                        <?php
                        $db = new db\Connector();
                        $db->query("select * from brands order by brand_id desc");
                        $res = $db->resultset();

                        if (empty($res)) {
                            echo "<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> There are no brands!</div>";
                        }

                        foreach ($res as $row) {
                            $id = $row['brand_id'];
                            $title = $row['brand_title'];
                            $desc = $row['brand_description'];
                            $logo = $row['brand_logo'];
                            $img = $row['brand_img'];
                            $lang = $row['brand_lang'];
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="brands_group_item<?php echo $id; ?>_heading" data-target="#brands_group_item<?php echo $id; ?>_collapse" data-toggle="collapse" data-parent="#brands_group" aria-expanded="true" aria-controls="brands_group_item<?php echo $id; ?>_collapse">
                                <h4 class="panel-title">
                                    <?php echo $title." - ".ucfirst($lang); ?>
                                </h4>
                            </div>
                            <div id="brands_group_item<?php echo $id; ?>_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="brands_group_item<?php echo $id; ?>_heading">
                                <div class="panel-body">
                                    <div class="col-md-12 margin-10">
                                        <img src="../../images/brand_images/<?php echo $img; ?>" alt="Brands own image" class="img-responsive">
                                    </div>
                                    <div class="col-md-4 margin-10">
                                        <img src="../../images/brand_images/<?php echo $logo; ?>" alt="Logo" class="img-responsive">
                                    </div>
                                    <div class="col-md-8 margin-10">
                                        <h2><?php echo $title; ?></h2>
                                    </div>
                                    <div class="col-md-12 margin-10">
                                        <pre><?php echo $desc; ?></pre>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="btn btn-info">
                                        <span class="glyphicon glyphicon-th-list"></span> List products</a>
                                    <a href="#brand_edit_modal" id="brand_edit" value="<?php echo $id; ?>" class="btn btn-warning" data-toggle="modal">
                                        <span class="glyphicon glyphicon-pencil"></span> Edit</a>
                                    <a href="../backend/brand_deleting.php?del_id=<?php echo $id; ?>" id="brand_list_delete" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div id="brand_add_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="brand_add_form" method="POST" action="../backend/brand_adding.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3>Add new brand</h3>
                        </div>
                        <div class="modal-body">
                            <fieldset class="form-group">
                                <label for="brand_title">Title</label>
                                <input type="text" class="form-control" name="brand_title" required>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="brand_description">Description</label>
                                <textarea class="form-control" name="brand_description" rows="10" required></textarea>
                            </fieldset>
                            <div class="col-sm-6">
                                <fieldset class="form-group">
                                    <label for="brand_logo">Logo</label>
                                    <input type="file" name="brand_logo" accept="image/*" required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="brand_img">Header Image</label>
                                    <input type="file" name="brand_img" accept="image/*" required>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset class="form-group">
                                    <label for="brand_lang">Language</label>
                                    <select name="brand_lang" class="form-control">
                                        <option>English</option>
                                        <option>Mongolian</option>
                                    </select>
                                </fieldset>
                            </div>
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
            <div class="modal fade" id="brand_edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="brand_edit_form">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3>Edit brand</h3>
                        </div>
                        <div class="modal-body">
                            <fieldset class="form-group">
                                <label for="brand_title">Title</label>
                                <input type="text" class="form-control" id="brand_edit_title" name="brand_title" value="" required>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="brand_description">Description</label>
                                <textarea class="form-control" id="brand_edit_desc" rows="10" required></textarea>
                            </fieldset>
                            <fieldset class="form-group col-sm-6">
                                <img src="../../images/logo.png" id="brand_edit_logo" class="img-responsive">
                            </fieldset>
                            <fieldset class="form-group col-sm-6">
                                <label for="brand_logo">Change Logo</label>
                                <input type="file" name="brand_logo" required>
                            </fieldset>
                            <fieldset class="form-group col-sm-6">
                                <img src="../../images/about_1.jpg" id="brand_edit_img" class="img-responsive">
                            </fieldset>
                            <fieldset class="form-group col-sm-6">
                                <label for="brand_img">Change Header</label>
                                <input type="file" name="brand_img" required>
                            </fieldset>
                            <div class="clearfix"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
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

    <!-- Jquery form validation plugin -->
    <script src="../bower_components/validate/jquery.validate.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- 
    <script data-require="angular.js@1.2.10" data-semver="1.2.10" src="http://code.angularjs.org/1.2.10/angular.js"></script>
    <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
    -->

</body>

</html>
