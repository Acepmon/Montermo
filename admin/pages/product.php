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

            <div class="row" id="product">

                <div class="col-lg-12" id="brands">

                    <?php

                        $db = new db\Connector();

                        $db->query("select * from brands order by brand_id desc");

                        $res = $db->resultset();

                    ?>

                    <h1 class="page-header">Product <a href="#product_add_modal" class="btn btn-success pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Add new product</a></h1>

                    <h5 class='text-info'>

                        Click on brand item to expand products!

                    </h5>

                    <div class="panel-group" id="brands_group" role="tablist" aria-multiselectable="true">

                        <?php



                        if (empty($res)) {

                            echo "<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> There are no brands!</div>";

                        }



                        foreach ($res as $row) {

                            $id = $row['brand_id'];

                            $title = $row['brand_title'];

                            $s_desc = $row['brand_short_desc'];

                            $desc = $row['brand_description'];

                            $logo = $row['brand_logo'];

                            $lang = $row['brand_lang'];



                            $db->query("select * from products where brands_brand_id = :brand_id");

                            $db->bind(":brand_id", $id);

                            $products = $db->resultset();

                        ?>

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="brands_group_item<?php echo $id; ?>_heading" data-target="#brands_group_item<?php echo $id; ?>_collapse" data-toggle="collapse" data-parent="#brands_group" aria-expanded="true" aria-controls="brands_group_item<?php echo $id; ?>_collapse">

                                <h4 class="panel-title clearfix">

                                    <?php echo $title." - ".ucfirst($lang)." <span class='badge pull-right'>".count($products)."</span>"; ?>

                                </h4>

                            </div>

                            <div id="brands_group_item<?php echo $id; ?>_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="brands_group_item<?php echo $id; ?>_heading">

                                <?php

                                if (empty($products)) {

                                    echo "<div class='panel-body'><div class='alert alert-warning' style='margin-bottom: 0px;'><span class='glyphicon glyphicon-warning-sign'></span> No products!</div></div>";

                                } else {

                                    echo "<ul class='list-group'>";

                                    foreach ($products as $product) {

                                        $product_name = $product['product_name'];

                                        $product_lang = $product['product_lang'];

                                        echo "<li class='list-group-item clearfix'>";

                                        echo "<a href='#product_collapse_".$product['product_id']."' data-toggle='collapse'>".$product_name." - ".ucfirst($product_lang)."</a>";

                                        echo "<span class='pull-right'>";

                                        // echo "<a href='#product_edit_modal".$product['product_id']."' id='product_edit' class='btn btn-warning' data-toggle='modal'><span class='glyphicon glyphicon-pencil'></span> Edit</a> ";

                                        echo "<a href='../backend/product_deleting.php?del_product_id=".$product['product_id']."&brand_id=".$id."' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a>";

                                        echo "</span>";

                                        echo "<div id='product_collapse_".$product['product_id']."' class='collapse' style='padding-top: 10px;'>";

                                        echo "<p>".$product['product_description']."</p>";

                                        $db->query("select img_url from product_img where products_product_id = :id");

                                        $db->bind(":id", $product['product_id']);

                                        foreach ($db->resultset() as $r) {

                                            echo "<img src='../../images/brand_images/brand_".$id."/products/".$r['img_url']."' class='img-responsive'>";

                                        }

                                        echo "</div>";

                                        echo "</li>";



                                        ?>

                                        <div id="product_edit_modal<?php echo $product['product_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <form>

                                                        <div class="modal-header">

                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            <h3>Edit product</h3>

                                                        </div>

                                                        <div class="modal-body">

                                                            <fieldset class="form-group">

                                                                <label for="product_name">Name</label>

                                                                <input type="text" name="product_name" class="form-control">

                                                            </fieldset>

                                                            <fieldset class="form-group">

                                                                <label for="product_desc">Description</label>

                                                                <textarea name="product_desc" cols="30" rows="10" class="form-control"></textarea>

                                                            </fieldset>

                                                            <fieldset class="form-group">

                                                                <label for="product_lang">Language</label>

                                                                <select name="product_lang" class="form-control">

                                                                    <option>English</option>

                                                                    <option>Mongolian</option>

                                                                </select>

                                                            </fieldset>

                                                            <fieldset class="form-group">

                                                                <label for="product_brand">Product Brand</label>

                                                                <select name="product_brand" class="form-control">

                                                                    <option></option>

                                                                    <?php

                                                                    $db->query("select brand_id, brand_title, brand_lang from brands");

                                                                    $res = $db->resultset();

                                                                    foreach ($res as $r) {

                                                                        echo "<option value='".$r['brand_id']."'>".$r['brand_title']." - ".ucfirst($r['brand_lang'])."</option>";

                                                                    }

                                                                    ?>

                                                                </select>

                                                            </fieldset>

                                                            <fieldset class="form-group">

                                                                <?php



                                                                $db->query("select * from product_img where products_product_id = :product_id");

                                                                $db->bind(":product_id", $product['product_id']);

                                                                $product_imgs = $db->resultset();

                                                                echo "<table class='table'>";

                                                                foreach ($product_imgs as $img) {

                                                                    $url = "../../images/brand_images/brand_".$id."/products/".$img['img_url'];

                                                                    echo "<tr>";

                                                                    echo "<td><img src='$url' class='img-responsive'></td>";

                                                                    echo "<td>";

                                                                    echo "<p><a href='' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></p>";

                                                                    echo "<input type='checkbox'> <label> Change</label>";

                                                                    echo "<input type='file' accept='image/*'>";

                                                                    echo "</td>";

                                                                    echo "</tr>";

                                                                }

                                                                echo "</table>";



                                                                ?>

                                                            </fieldset>

                                                        </div>

                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                            <button type="submit" class="btn btn-success">Submit Data</button>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                        <?php

                                    }

                                    echo "</ul>";

                                }

                                ?>

                            </div>

                        </div>

                        <?php

                        }

                        ?>

                    </div>

                </div>

            </div>

        </div>



        <div id="product_add_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <form method="post" action="../backend/product_adding.php" enctype="multipart/form-data">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        <h3>Add new product</h3>

                    </div>

                    <div class="modal-body" id="output_modal_content">

                        <fieldset class="form-group">

                            <label for="product_name">Name</label>

                            <input type="text" name="product_name" class="form-control">

                        </fieldset>

                        <fieldset class="form-group">

                            <label for="product_desc">Description</label>

                            <textarea name="product_desc" cols="30" rows="10" class="form-control"></textarea>

                        </fieldset>

                        <fieldset class="form-group">

                            <label for="product_lang">Language</label>

                            <select name="product_lang" class="form-control">

                                <option>English</option>

                                <option>Mongolian</option>

                            </select>

                        </fieldset>

                        <fieldset class="form-group">

                            <label for="product_brand">Product Brand</label>

                            <select name="product_brand" class="form-control">

                                <option></option>

                                <?php

                                $db->query("select brand_id, brand_title, brand_lang from brands");

                                $res = $db->resultset();

                                foreach ($res as $r) {

                                    echo "<option value='".$r['brand_id']."'>".$r['brand_title']." - ".ucfirst($r['brand_lang'])."</option>";

                                }

                                ?>

                            </select>

                        </fieldset>

                        <fieldset class="form-group">

                            <label for="product_img">Images</label>

                            <input name="product_img[]" type="file" multiple="multiple" accept="image/*">

                        </fieldset>

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

