<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Admin Dashboard</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

    <!-- Css animations  -->
    <link href="<?php public_path()?>css/animate.css" rel="stylesheet">

    <link href="<?php public_path()?>css/bootstrap-touch-slider.css" rel="stylesheet" media="all">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php public_path()?>css/style.blue.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php public_path()?>css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php public_path()?>/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php public_path()?>/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php public_path()?>/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php public_path()?>/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php public_path()?>/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php public_path()?>/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php public_path()?>/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php public_path()?>/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php public_path()?>/img/apple-touch-icon-152x152.png" />
      <!-- owl carousel css -->

      <link href="<?php public_path()?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php public_path()?>/css/owl.theme.css" rel="stylesheet">
    
</head>

<body>

    <div id="all" class="">
    @include('includes.header')

      
    <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Admin Dashboard</h1>
                    </div>



                    
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Admin Dashboard </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <main>
        <div class="container-fluid">
        <div class = "row " >
         
         
        <!-- *** Admin LEFT COLUMN ***
			 _________________________________________________________ -->
             @include('includes.adminmenu')

         <!-- *** Left  Menu COLUMN END *** -->


                <!-- Admin Main Content -->


               <!-- <div class="col-md-8  col-sm-8 col-xs-8 ">

                </div>
                -->

                <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info ">
                    <div class="panel panel-primary "> 
                        <div class="panel-heading admin-panel-title"> Indicators  </div>
                        <div class="admin-summary"> Indcator Records in DB</div>
                        <div class="admin-number">{{$indicator_count}}</div>
                    </div>
                </div>


                <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info">
                <div class="panel panel-primary "> 
                    <div class="panel-heading admin-panel-title"> Careers </div>
                    <div class="admin-summary">  Careers Records in DB</div>
                    <div class="admin-number">{{$career_count}}</div>
                </div>
            </div>

                <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info">
                <div class="panel panel-primary "> 
                    <div class="panel-heading admin-panel-title"> News Items  </div>
                    <div class="admin-summary"> News Items in DB</div>
                    <div class="admin-number">{{$newsfeed_count}}</div>
                </div>
            </div>
            <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info">
            <div class="panel panel-primary "> 
                <div class="panel-heading admin-panel-title">  Admin Users </div>
                <div class="admin-summary"> Admins in DB</div>
                <div class="admin-number">{{$admin_count}}</div>
                 </div>
            </div>
                <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info">
                <div class="panel panel-primary "> 
                    <div class="panel-heading admin-panel-title"> Users  </div>
                    <div class="admin-summary"> Registered Users</div>
                    <div class="admin-number">{{$user_count}}</div>
                </div>
            </div>
                  
            <div class="col-md-3  col-sm-3 col-xs-3 admin-panel-info">
            <div class="panel panel-primary "> 
                <div class="panel-heading admin-panel-title"> Subscribed </div>
                <div class="admin-summary"> Subscribed to NewsLetter </div>
                <div class="admin-number">{{$subscribed_count}}</div>
            </div>
             </div>


                  <!-- Admin Main Content END -->





                </div>
                <!-- /.row -->
                </div>
                <!-- /.container -->

        </div>
          
        </main>

       


        <!-- *** FOOTER ***
_________________________________________________________ -->

@include('includes.footer')


        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->


    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
    <script src="js/bootstrap-touch-slider.js"></script>
        
    <script type="text/javascript">
        $('#bootstrap-touch-slider').bsTouchSlider();
    </script>
    

</body>

</html>