<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Privacy Policy</title>

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
@include('includes.header')

        

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>About us</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>About us</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <section>
                @foreach($policy as $policy)

                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading">
                                <p><h2 style="font-style: italic; color:#000066">{{$policy->text12}}</h2></p><br><br>
								
                            </div>

                            <p class="lead"><p  style="font-size: 20px; text-align:justify">{{$policy->text13}}<br></p>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel-group accordion" id="accordionThree">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3a">

                                                    <p><strong>{{$policy->topic1}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3a" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-customize.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                   <p><span style="font-weight: 400;">{{$policy->text1}}</span></p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3b">

                                                    <p><strong>{{$policy->topic2}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3b" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$policy->text2}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3c">

                                                    <p><strong>{{$policy->topic3}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="collapse3c" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><span style="font-weight: 400;">{{$policy->text3}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3d">

                                                    <p><strong>{{$policy->topic4}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3d" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><span style="font-weight: 400;">{{$policy->text4}}</p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
							    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3e">

                                                    <p><strong>{{$policy->topic5}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3e" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                  <p><span style="font-weight: 400;">{{$policy->text5}}</span></p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3f">

                                                   <p><strong>{{$policy->topic6}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3f" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$policy->text6}}</span></p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3g">

                                                   <p><strong>{{$policy->topic7}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3g" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$policy->text7}}</p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3h">

                                                   <p><strong>{{$policy->topic8}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3h" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><span style="font-weight: 400;">{{$policy->text8}}</span></p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3i">

                                                   <p><strong>{{$policy->topic9}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3i" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><span style="font-weight: 400;">{{$policy->text9}}</p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3j">

                                                   <p><strong>{{$policy->topic10}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3j" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                   <p><span style="font-weight: 400;">{{$policy->text10}}</span></p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3k">

                                                   <p><strong>{{$policy->topic11}}</strong></p> 

                                                </a>

                                            </h4>
                                    </div>
									
                                    <div id="collapse3k" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                                                </div>
                                                <div class="col-md-8">
                                                   <p><span style="font-weight: 400;">{{$policy->text11}}</p> 
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								

                    </div>
                </div>
                @endforeach   
            </section>
            <!-- /.bar -->


        </div>
        <!-- /#content -->

        


        <!-- *** FOOTER ***
_________________________________________________________ -->

@include('includes.footer')


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

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>



</body>

</html>