<!DOCTYPE html>
<html lang="en">

<?php
include('head.php');
?>

<body>


    <div id="all">

    <?php
    include('header.php');
    ?>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>FAQ</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Frequently asked questions</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix">
                        <section>

                            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                            <div class="panel-group" id="accordion">

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#faq1">

						    1. What to do if I have still not received the order?

						</a>

					    </h4>
                                    </div>
                                    <div id="faq1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

						    2. What are the postal rates?

						</a>

					    </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->


                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

						    3. Do you send overseas?

						</a>

					    </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#faq4">

						    4. Why are you more expensive than others?

						</a>

					    </h4>
                                    </div>
                                    <div id="faq4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

						<a data-toggle="collapse" data-parent="#accordion" href="#faq5">

						    5. Another important question

						</a>

					    </h4>
                                    </div>
                                    <div id="faq5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel -->

                            </div>
                            <!-- /.panel-group -->

                            <p class="text-muted">In case you haven't found the answer for your question please feel free to <a href="contact.html">contact us</a>, our customer support will be happy to help you.</p>
                        </section>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
				_________________________________________________________ -->

                    <div class="col-sm-3">
                        <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Pages</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="text.html">Text page</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact page</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <!-- *** PAGES MENU END *** -->


                        <div class="banner">
                            <a href="shop-category.html">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
_________________________________________________________ -->

        <?php
        include('footer.php');
        ?>



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

    



</body>

</html>