<section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel ">

                <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line " data-ride="carousel" data-pause="click" data-interval="4000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                
                {{$i = 0}}
                @foreach($sliders as $slider)
                    <li data-target="#bootstrap-touch-slider" data-slide-to="{{$i}}"></li>
                    {{$i++}}
                @endforeach
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">


                {{$j = 0}}
                
                @foreach($sliders as $slider)
                <!-- DB Slide -->
                @if($j==0)
                {{$var = "active"}}
                @else
                {{$var = ""}}
                @endif
                
                <div class="item {{$var}}">

                    <!-- Slide Background -->
                    <img src="<?php public_path()?>/img/{{$slider->slider_img}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">{{$slider->slider_header}}</h1>
                        <p data-animation="animated lightSpeedIn">{{$slider->description}}</p>
                        <a href="/insights" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Get Insights</a>
                        
                    </div>
                </div>
                {{$j++}}
                @endforeach
                <!-- End of Slide -->

            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>