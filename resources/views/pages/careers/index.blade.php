<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Career List</title>

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
                        <h1>Careers List</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/admin">Home</a>
                            </li>
                            <li>Careers</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                
                            <h5 class="text-uppercase">Career List</h5>
                            <div id="career-list">
                            <table class="table">
                            <tr><th>ID</th><th>TITLE</th><th>DESCRIPTION</th><th>GROUP TITLE</th><th>SHOW</th><th>EDIT</th><th>Link Indicators</th><th>DELETE</th></tr>
                            @foreach($careers as $key => $value)
                            <tr><td>{{$value->career_id}}</td><td>{{$value->title}}</td><td>{{$value->description}}</td><td>{{$value->group_title}}</td>
                            <td><form action="{{ route('careers.show', $value->career_id) }}" method="get"><input type="submit" value="detail" ></form></td>
                            <td><form action="{{ route('careers.edit', $value->career_id) }}" method="get"><input type="submit" value="edit" ></form></td>
                            <td><form action="careers/link/indicators/{{$value->career_id}}" method="get"><input type="submit" value="Add Indicators" ></form></td>
                            <td><form action="careers/{{$value->career_id}}" method="post">
                            <input type="hidden" name="_method" value="DELETE" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="delete " >
                            </form></td>
                            </tr>

                            @endforeach
                            </table>
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