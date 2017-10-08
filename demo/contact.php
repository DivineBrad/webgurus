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
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>We are here to help you</h2>
                                </div>

                                <p class="lead">Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party world. Of so am
                                    he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                                <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Address</h3>
                                <p>13/25 New Avenue
                                    <br>New Heaven, 45Y 73J
                                    <br>England, <strong>Great Britain</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+33 555 444 333</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                <ul class="list-style-none">
                                    <li><strong><a href="mailto:">info@fakeemail.com</a></strong>
                                    </li>
                                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Contact form</h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form data-toggle="validator" role="form" method="post" action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" data-error="Please enter first name field." class="form-control" id="firstname" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" data-error="Please enter last name field." class="form-control" id="lastname" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" data-error="Please enter subject field." class="form-control" id="subject" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>

                                    </div>

                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

        <div id="map">

        </div>

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

    

    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>

    <!-- gmaps end -->





</body>

</html>