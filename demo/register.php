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
                        <form action="customer-orders.html" method="post" data-toggle="validator">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_modal" placeholder="email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" data-minlength="5"  pattern="Reg" class="form-control" id="password_modal" placeholder="password" required>
                                <div class="help-block with-errors"></div>
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
                        <h1>New account / Sign in</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>New account / Sign in</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">New account</h2>

                            <p class="lead">Not our registered customer yet?</p>
                            <p>Register with us to get updates, save choices in your account and get new career insights.</p>
                            <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                            <hr>

                            <form action="customer-orders.html" method="post" data-toggle="validator">
                                <div class="form-group">
                                    <label for="name-login">Name</label>
                                    <input type="text" class="form-control" id="name-login" data-error="Please enter name field." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Email</label>
                                    <input type="email" class="form-control" id="email-login" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="password-login">Password</label>
                                    <input type="password" class="form-control" id="password-login" data-minlength="5" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#password-login" data-match-error="Whoops, these don't match" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">  
                                        <input type="checkbox" id="terms">
                                        <label>  Allow email notification.</label>
                                </div>
                                <div class="text-center">
                                    <button  class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">Login</h2>

                            <p class="lead">Already our customer?</p>
                            <p class="text-muted">Please login to get more features</p>

                            <hr>

                            <form action="customer-orders.html" method="post" data-toggle="validator">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" data-minlength="5" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


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