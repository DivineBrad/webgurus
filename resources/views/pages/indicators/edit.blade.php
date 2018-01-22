<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Update Indicator</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    
      

    <!-- Css animations  -->
    <link href="<?php public_path() ?>/css/animate.css" rel="stylesheet">
    
        <!-- Theme stylesheet, if possible do not edit this stylesheet -->
        <link href="<?php public_path() ?>/css/style.blue.css" rel="stylesheet" id="theme-stylesheet">
    
        <!-- Custom stylesheet - for your changes -->
        <link href="<?php public_path() ?>/css/custom.css" rel="stylesheet">
    
        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="<?php public_path() ?>/img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php public_path() ?>/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php public_path() ?>/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php public_path() ?>/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php public_path() ?>/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php public_path() ?>/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php public_path() ?>/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php public_path() ?>/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php public_path() ?>/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="<?php public_path() ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php public_path() ?>/css/owl.theme.css" rel="stylesheet">
</head>

<body>


    <div id="all">
        
    @include('includes.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Indicator Form</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
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
                            <p class="text-muted">Please Edit Indicator.</p>

                            <hr>
                            <!-- Error information for validation-->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </div>
                            @endif
                        
                         
                            <form id="checkboxForm" action="{{ route('indicators.update', $indicator->indicator_id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="indicator">Indicator</label>
                                    <input type="text" size="5" class="form-control" value="{{$indicator->indicator}}" name="indicator">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" size="5" class="form-control" value="{{$indicator->description}}" name="description">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="areas[]" value="1" @if($indicator->type_id==1) checked @endif
                                            data-validation-minchecked-minchecked="1" data-validation-minchecked-message="Choose one"/> skills 
                                        </label>
                                    
                                    
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="areas[]" value="2"@if($indicator->type_id==2) checked @endif /> trait
                                        </label>
                                    
                                   
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="areas[]" value="3" @if($indicator->type_id==3) checked @endif /> passion
                                        </label>

                                        <div class="help-block"></div>
                                    </div>
                                
                                </div><br/>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>

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
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>




    <script src="<?php resource_path()?>/js/jquery.cookie.js"></script>
    <script src="<?php resource_path()?>/js/waypoints.min.js"></script>
    <script src="<?php resource_path()?>/js/jquery.counterup.min.js"></script>
    <script src="<?php resource_path()?>/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php resource_path()?>/js/front.js"></script>

    



</body>

</html>