<!-- *** FOOTER ***
_________________________________________________________ -->

<footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Our passion is to helping people find their dream career paths 
                    through understanding the skills, traits and passion</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>
                   

                    <form method="post" action="/newsletter_user">
                    {{ csrf_field() }}
                        <div class="input-group">

                            <input type="email" name="email" class="form-control" />
                            <span class="input-group-btn">

                        <button class="btn btn-default" type="submit"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger flash">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

               

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Career Insights Ltd.</strong>
                        <br>Humber College
                        <br>Humber River
                        <br>XXX XXX
                        <br>Ontario
                        <br>
                        <strong>Canada</strong>
                    </p>

                    <a href="/contact" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->


                

                
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
        <div class="container">
            <div class="col-md-12">
                <p class="pull-left">&copy; 2017. Career Insights / XXX XXX</p>
                <p class="pull-right">Project by <a href="">Web Gurus</a>
                   
                </p>
            </div>
        </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->