<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Add Menu</title>

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
</head>

<body>


    <div id="all">
        
    @include('includes.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Menu Form</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Menu Form</li>
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
                            <h2 class="text-uppercase">Menu</h2>

                            <p class="lead">Menu Here.</p>
                            <p class="text-muted">Please Create Menu.</p>

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
                        
                         
                            <form id="checkboxForm" action="/menus" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="menu_name">Menu Name</label>
                                    <input type="text" size="5" class="form-control" name="menu_name" value="{{old('indicator')}}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="menu_link">Menu Link</label>     
                                    <input type="text" size="5" class="form-control" name="menu_link" value="{{old('indicator')}}">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Parent Id</label>
                                    <input type="text" size="5" class="form-control" name="parent_id" value="{{old('indicator')}}">
                                    
                                </div>
                                                                
                                <br/>

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


    



</body>

</html>