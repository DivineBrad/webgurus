<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Create Newsletter</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">

    
      

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
                        <h1>Create Newsletter</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Create Newsletter</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="row">
                <div class="offset-md-2 col-md-6">
                    <div class="box">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                <span class="round-tab">
                                                    <i class="glyphicon glyphicon-folder-open"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                <span class="round-tab">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                                <span class="round-tab">
                                                    <i class="glyphicon glyphicon-picture"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form" name="form-newsletter" method="post" action="/post-newsletter">
                                {{ csrf_field() }}
                                    <input type="hidden" name="test" value="test">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div id="editor">
                                                <p>Hello World!</p>
                                                
                                        </div>                        
                                        
                                            <ul class="list-inline pull-right">
                                                <li>
                                                <button type="button" class="btn btn-primary next-step">Next Pick Recipients
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <p>All Recipients</p>
                                            <ul>                                        
                                                <input class="form-check-input" type="checkbox" id="check-all"/> 
                                                Select All
                                            @foreach ($email_list as $email)
                                            <li>
                                                <input class="form-check-input recipients" type="checkbox" name="recipients[]" value="{{$email->email}}" />
                                                <label class="form-check-label">
                                                    {{$email->email}}
                                                </label>
                                            </li>
                                            @endforeach
                                            </ul>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" id="form-submit" class="btn btn-primary next-step">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <p>Your newsletter is ready to be sent.</p>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                <input type="submit" value="Send Email"  class="btn btn-primary btn-info-full next-step">                                                 
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <input type="hidden" name="body" id="editorContent" />
                                        
                                    </div>
                                </form>
                            </div>
                        </section>
                        
                    
                    
                       
                </div>
            
            </div>
            
        
        <!-- /.container -->
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

        <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var toolbarOptions = [
                                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                ['blockquote', 'code-block'],

                                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                                [{ 'direction': 'rtl' }],                         // text direction

                                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                                [{ 'font': [] }],
                                [{ 'align': [] }],

                                ['image','video', 'formula'],

                                ['clean']                                         // remove formatting button
                            ];
                       
        var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions,
        },
        theme: 'snow'
        });
        // var quill = new Quill('#editor', {
        //     theme: 'snow'
        // });
        var delta = quill.getContents();
        $('#editorContent').val(quill.container.firstChild.innerHTML);
        quill.on('editor-change', function(eventName, ...args) {
            if (eventName === 'text-change') {
                $('#editorContent').val(quill.container.firstChild.innerHTML);
            } 
            });
    </script>
    <script>
        $(document).ready(function () {
            //Initialize tooltips
            verifyRecipients();
            $('.nav-tabs > li a[title]').tooltip();
            
            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        
                var $target = $(e.target);
            
                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });
        
            $(".next-step").click(function (e) {
        
                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);
        
            });
            $(".prev-step").click(function (e) {
        
                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);
        
            });
        });
        $("#check-all").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        function verifyRecipients(){
            $('#form-submit').prop('disabled', true);
                 
            $('form input:checkbox').change(function(){
                if ($(".recipients").filter(':checked').length > 0)
                {
                    $('#form-submit').prop('disabled', false);
                }else{
                    $('#form-submit').prop('disabled', true);
                    
                }
           
            })
           
        }
        
        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>    

    <script src="<?php resource_path()?>/js/jquery.cookie.js"></script>
    <script src="<?php resource_path()?>/js/waypoints.min.js"></script>
    <script src="<?php resource_path()?>/js/jquery.counterup.min.js"></script>
    <script src="<?php resource_path()?>/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php resource_path()?>/js/front.js"></script>

    
   


</body>

</html>