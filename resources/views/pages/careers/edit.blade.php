<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Update Career</title>

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
                        <h1>Edit Career</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Edit Career</li>
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
                            <h2 class="text-uppercase">Career</h2>

                            <p class="lead">Career Here.</p>
                            <p class="text-muted">Please Edit Career.</p>

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
                        
                         
                          
                            <form action="{{ route('careers.update', $career->career_id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <div class="controls">
                                    <input type="text" size="55" name="title" value="{{ $career->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <div class="controls">
                                    <input type="text" size="55" name="description" value="{{ $career->description }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                    <label for="juniorSalary" class="col-md-3 col-md-offset-2">Junior Salary</label><label for="seniorSalary" class="col-md-3 col-md-offset-1">Senior Salary</label>
                                    <div class="col-md-2 col-md-offset-2">
                                    <input type="text" name="juniorSalary" value="{{ $career->avg_sal_jnr }}">
                                    </div>
                                    <div class="col-md-2 col-md-offset-2">
                                    <input type="text" name="seniorSalary" value="{{ $career->avg_sal_snr }}">
                                    </div>  
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="unrate">Unemployment Rate</label>
                                    <div class="controls">
                                    <input type="text" size="55" name="unrate" value="{{ $career->unemployment_rate }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="satisfaction">Job Satisfaction</label>
                                    <div class="controls">
                                    <select name="satisfaction">
                                        <option value="">Choose Job Satisfaction</option>
                                        <option value="Low" @if("Low" == $career->job_satisfaction) selected @endif>Low</option>
                                        <option value="Average" @if("Average" == $career->job_satisfaction) selected @endif>Average</option>
                                        <option value="High" @if("High" == $career->job_satisfaction) selected @endif>High</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="careergroups">Groups</label>
                                    <div class="controls">
                                    <select  name="careergroups" id="careergroups">
                        
                                        <option value="">Choose 1 group</option>
                                        @foreach($careergroups as $key => $value)
                                        <option value="{{$value->group_id}}" @if($value->group_id == $career->group_id) selected @endif>{{$value->group_title}}</option>
                                        @endforeach
                                    
                                    </select>
                                    </div>
                                    
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