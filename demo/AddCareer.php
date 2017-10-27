<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Register</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    
    

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.blue.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
</head>

<body>


    <div id="all">
        
        <?php
        include('header.php');
        ?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Indicator Form</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Indicator Form</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container container-table">
                <div class="row vertical-center-row">
                    <div class="text-center col-md-6 col-md-offset-3">
                        <div class="box">
                            <h2 class="text-uppercase">Indicator</h2>

                            <p class="lead">Indicator Here.</p>
                            <p class="text-muted">Please indicator the website.</p>

                            <hr>
                        
                         
                            <form action="customer-orders.html" method="post" data-toggle="validator"  data-fv-framework="bootstrap"
                            data-fv-icon-valid="glyphicon glyphicon-ok"
                            data-fv-icon-invalid="glyphicon glyphicon-remove"
                            data-fv-icon-validating="glyphicon glyphicon-refresh">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <div class="controls">
                                    <input type="text" size="55" id="title" required>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <div class="controls">
                                    <input type="text" size="55" id="description" required>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="editors">Editors</label>
                                    <div class="controls">
                                    <select  name="editors" id="editors" required>
                        
                                        <option value="">Choose 2 - 3 editors</option>
                                        <option value="atom">Atom</option>
                                        <option value="eclipse">Eclipse</option>
                                    
                                    </select>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    
                                </div><br/>
                        
                                <div class="text-center">
                                    <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->    

        <?php
        include('footer.php');
        ?>



    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    



</body>

</html>