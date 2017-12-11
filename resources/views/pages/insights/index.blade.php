<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Get Insights</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php public_path()?>css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php public_path()?>css/style.blue.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php public_path()?>css/custom.css" rel="stylesheet">
    <!-- Stylesheet for autocomplete -->
    <link href="<?php public_path()?>css/easy-autocomplete.min.css" rel="stylesheet">


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


    <div id="all">
        
    @include('includes.header')

       
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Career Insights</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Insights</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-push-4">
                        <div class="box">
                            <h5 class="text-uppercase">Type in Indicator</h5>
                            <div>
                            <h6 id="indicator-heading"> Personality Traits and Habits</h6> 
                            <p id="instructions" > </p> 
                            </div>
                            
                            <form action="#" >
                                <div class="form-group" id="input-indicator-group">
                                    <label for="indicator-input" id="indicator-label"></label>
                                    <input type="text" class="form-control" id="indicator-input" >
                                   
                                    
                                </div>
                                    <div class="text-center">
                                    <button  id="btn-indicator" class="btn btn-template-main" type="button"><i class="fa fa-user-md"></i> Add</button>
                                    <button  id="btn-additional" class="btn btn-template-main" type="button"><i class="fa fa-user-md"></i> Skip</button>
                                    
                                    
                                    
                                </div>
                                <div class="indicator-desc"></div>
                            </form>
                            <form method="POST" id="results_form" action='/insights/results'>
                             <!-- Adding hidden fields -->
                            <input type="hidden" name="results" value="" id="results_input">
                            <input type="hidden" name ="_token" value="{{csrf_token()}}" id="results_token">
                            </form>   
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-pull-4">
                        <div class="box">
                            <h5 class="text-uppercase">Selection</h5>
                            <form action="#" >
                                <div class="form-group">
                                <label for="skills-txt">Skills</label>
                                <textarea class="form-control" id="skills-txt" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="traits-txt">Traits</label>
                                <textarea class="form-control" id="traits-txt" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="passions-txt">Passion</label>
                                <textarea class="form-control" id="passions-txt" rows="3"></textarea>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="box">
                            <h5 class="text-uppercase">Indicator List</h5>
                            <div>


                            <ul id="indicator-list">
                           <!-- @foreach($indicators as $key => $value)
                            <li>{{$value->indicator}} {{$value->type->type}}</li>

                            @endforeach
                            -->
                            <script>
                           
                             </script>
                            </ul>
                            </div>
                           
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        @include('includes.footer')



    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php public_path()?>/js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="<?php public_path()?>/js/jquery.easy-autocomplete.min.js"> </script>
    <!-- Insights Jquery script for interactive functionality -->
    <script src="<?php public_path()?>/js/insights.js"> </script> 


</body>

</html>