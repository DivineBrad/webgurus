

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Insights Results</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php public_path()?>/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php public_path()?>/css/style.blue.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php public_path()?>/css/custom.css" rel="stylesheet">
    <!-- Stylesheet for autocomplete -->
    <link href="<?php public_path()?>/css/easy-autocomplete.min.css" rel="stylesheet">


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
                        <h1>Insights Results</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Insights Results</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    

                    <div class="col-12 ">
                        <div class="box">
                            <h5 class="text-uppercase">Insights TEST Results</h5>
                            <div>
                            <p>Based on your skills, personality traits and passion, 
                             these careers below present strong options to explore! </p>
                            <p> You can compare careers by going  <a href="/career-insights">here</a></p>
                            <ul id="results-list">
                           
                            @foreach ($results as $key => $item)
                            <li>
                           {{$item['career']}}
                           </li>
                            @endforeach
                           
                            </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div id ="share_results">

                           Share results with friends, family or collegues.
                           
                            <form method="POST" action="/insights/share">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Your Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="sender">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Receivers's Email </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="email" placeholder="(seperate multiple emails with commans)" name="recipients">
                                </div>
                                </div>
                                
                                <!-- Hidden Form fields for results-->
                                <input type="hidden" name="results_items" value='{!! json_encode($results) !!}'>

                                <div class="form-group row">
                                <div class="offset-sm-2 col-sm-4">
                                <input type="submit" class="btn btn-primary" value="share" />
                                </div>
                                </div>
                            </form>
                          

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
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    

    



</body>

</html>