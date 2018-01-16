<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Menu</title>

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
                        <h1>FrontEnd Menu</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Menu List </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

            <h5 class="text-uppercase">Menu List</h5>
            <div id="career-list">
            <table class="table">
            <tr><th>ID</th><th>Menu Name</th><th>Menu Link</th><th>Parent</th><th>EDIT</th><th>DELETE</th></tr>
            @foreach($menus as $key => $value)
            <tr><td>{{$value->menu_id}}</td><td>{{$value->menu_name}}</td><td>{{$value->menu_link}}</td><td>{{$value->parent_id}}</td>
            <td><form action="{{ route('menus.show', $value->menu_id) }}" method="get"><input type="submit" value="detail" ></form></td>
            <td><form action="{{ route('menus.edit', $value->menu_id) }}" method="get"><input type="submit" value="edit" ></form></td>
            <td><form action="menus/{{$value->menu_id}}" method="post">
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
    <script src="js/jquery.easy-autocomplete.min.js"> </script>
    <script src="js/data.js"></script>
    <script>
    var indicators =testData();
    //document.write(indicators);
    //displayArrayList(indicators, "indicator-list");
    </script>


    



</body>

</html>