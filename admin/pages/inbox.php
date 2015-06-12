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
            <div class="row" id="contact_inbox">
                <div class="col-lg-12">
                    <h1 class="page-header">Inbox</h1>
                    <ul class="list-group">
                    <?php

                        $db = new db\Connector();
                        $db->query("select * from contact_inbox order by contact_inbox_id desc");
                        $inbox = $db->resultset();

                        if (empty($inbox)) {
                            echo "<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> There are no messages!</div>";
                        }

                        foreach ($inbox as $row) {

                            $id = $row['contact_inbox_id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $pos_title = $row['position_title'];
                            $com_name = $row['company_name'];
                            $message = $row['message'];

                    ?>
                        <li class="list-group-item">
                            <a href="#inbox_collapse<?php echo $id; ?>" data-toggle="collapse"><?php echo $name; ?></a>
                            <div id="inbox_collapse<?php echo $id; ?>" class="collapse">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <table class="table table-condensed">
                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo $name; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?php echo $email; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Title</th>
                                                <td><?php echo $pos_title; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Company name</th>
                                                <td><?php echo $com_name; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>Message</h4>
                                        <P><?php echo $message; ?></P>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="../backend/contact_inbox.php?contact_inbox_id=<?php echo $id; ?>" id="inbox_delete_btn" data-target="id-<?php echo $id; ?>" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </a>
                                    </div>
                                </div>  
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- 
    <script data-require="angular.js@1.2.10" data-semver="1.2.10" src="http://code.angularjs.org/1.2.10/angular.js"></script>
    <script src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
    -->

</body>

</html>

