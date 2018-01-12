<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Home</title>

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

    <div id="all">
    @include('includes.header')

    

        
    @include('includes.Slider')
       
    @if(Session::has('newsletter'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    <strong>Success!</strong> You are now subscribed to our Newsletter!
                    </div>
                    @endif

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">Do you want to know more about Insights?</h3>
                        <p class="lead">We have prepared for you the career path finder</p>
                        <p class="text-center">
                            <a href="/about" class="btn btn-template-transparent-black btn-lg">Check our About Us</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Testimonials</h2>
                        </div>

                        <p class="lead">We have thousands of person find the passion, the dream career and be the best that they can be.</p>


                       <!-- *** TESTIMONIALS CAROUSEL ***
 _________________________________________________________ -->

 <ul class="owl-carousel testimonials same-height-row">
                        @foreach($testimonials as $testimonial)
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p> {{$testimonial->testimony}}</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src={{$testimonial->photo}}>
                                            <h5>{{$testimonial->name}}y</h5>
                                            <p>{{$testimonial->position}}, {{$testimonial->company}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>

                </div>
            </div>
        </section>
        <!-- /.bar -->

        
                    <!-- *** BLOG HOMEPAGE ***
                    Maybe implement later 
_________________________________________________________ -->


                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->


       


        <!-- *** FOOTER ***
_________________________________________________________ -->

@include('includes.footer')


        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->


    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->
    <script>
    window.setTimeout(function() { 
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>

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