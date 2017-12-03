<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Insights | Register</title>

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
    <!-- Stylesheet for autocomplete -->
    <link href="css/easy-autocomplete.min.css" rel="stylesheet">


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
                        <h1>Career Insights</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Insights</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-push-4">
                        <div class="box">
                            <h5 class="text-uppercase">Type in Indicator</h5>
                            <div>
                            <h6 id="indicator-heading"> Personality Traits and Habits</h6> 
                            <p id="indicator-info" > Select a minimum of one trait that best describes you. Try to select at least 5</p> 
                            </div>
                            
                            <form action="#" >
                                <div class="form-group">
                                    <label for="indicator-input">Indicator</label>
                                    <input type="text" class="form-control" id="indicator-input" >
                                    
                                </div>
                                    <div class="text-center">
                                    <button  id="add-indicator" class="btn btn-template-main" type="button"><i class="fa fa-user-md"></i> Add</button>
                                    <button  id="get-insights" class="btn btn-template-main" type="button"><i class="fa fa-user-md"></i> Get Insights</button>
                                
                                </div>
                                <div class="indicator-desc"></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-pull-4">
                        <div class="box">
                            <h5 class="text-uppercase">Selection</h5>
                            <form action="#" >
                                <div class="form-group">
                                <label for="skills-txt">Skills</label>
                                <textarea class="form-control" id="skills-txt" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="traits-txt">Traits</label>
                                <textarea class="form-control" id="traits-txt" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="passions-txt">Passion</label>
                                <textarea class="form-control" id="passions-txt" rows="3"></textarea>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="box">
                            <h5 class="text-uppercase">Indicator List</h5>
                            <div>


                            <ul id="indicator-list">
                           <!-- @foreach($indicators as $key => $value)
                            <li>{{$value->indicator}} {{$value->type->type}}</li>

                            @endforeach
                            -->
                            <script>
                           
                             </script>
                            </ul>
                            </div>
                           
                        </div>
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
    <script src="js/jquery.easy-autocomplete.min.js"> </script>
    
    <script>

    $( document ).ready(function() {

      
       var insightsApp = {
            procedure : 1,
            indicators:{},
            dataReady : false,    
            getIndicators:  function (callback){
         $.getJSON("/api/indicators", function(data){
          this.indicators= data.data;
          callback(this.indicators);
          dataReady=true;
          }) },

          showList : function (list,parentId){
               
            var listParent = $("#"+parentId);
            var items=[];
            $.each(list, function(index, value){
                $.each(value,function(key,val) {
                if (key=="indicator"){
                    items.push(val);
                }
                }) ;
            });
           
            $.each(items, function (index,value){
               // document.write(value);
                $("<li>"+value+"</li>").appendTo(listParent);
        });
            $(listParent).on('click','li', function(){
               
            });
         },  
      
         
         addIndicator : function (){
           var skillsList= {data:[]}; 
           var  traitsList= {data:[]}; 
           var passionList= {data:[]};
           var counter = 0;
        $("#add-indicator").on('click', function(){
                counter++;
                if ($("#indicator-input").val().length>0){
                    // Switch cases depending on where in the process the person is 
                    // General example for now
                   
                   
                    skillsList.data.push($("#indicator-input").val());
                    $("#skills-txt").text($("#skills-txt").text()+$("#indicator-input").val()+", ");
                    $("#indicator-input").val("");
                    passionList.data.push("teaching");
                    traitsList.data.push("extrovert");
                    if (counter>1){
                        
                        insightsApp.sendList(traitsList,skillsList,passionList);
                    }
                    
                }

            });
       },
       sendList : function(traitsList,skillsList,passionList) {
           var indicatorList = {
               skills : skillsList,
               traits : traitsList,
               passion : passionList
           }
        $.ajax({
            url: '/api/insights/results',
            contentType: "application/json; charset=utf-8",
           // data: JSON.stringify({"test" :"Testing route"}),
           data: JSON.stringify(indicatorList),
            type: 'POST',
            success: function(response) {
                console.log(response);
                insightsApp.getResults('insights/results',JSON.stringify(response));
                //window.location.href = "/";
                // response is Javascript Object ready to use 
            },
            error: function(error) {
                console.log(error);
            }
        });
       },
       getInsights : function (){
        $("#get-insights").on('click', function(){
            insightsApp.sendList();
            //alert("working");
                });
       },
       getResults : function (url, data) {
                
                var form = document.createElement('form');
                document.body.appendChild(form);
                form.method = 'POST';
                form.action = url;
                
                    var input = document.createElement('input');
                    var input2 = document.createElement('input')
                    input.type = 'hidden';
                    input2.type = 'hidden';
                    input.name = 'results';
                    input2.name = '_token';
                    input.value = data;
                    input2.value = '{{ csrf_token() }}';
                    form.appendChild(input);
                    form.appendChild(input2);
                form.submit();
        }

       
        }

    
    insightsApp.getIndicators(function(indicators){
    insightsApp.showList(indicators,"indicator-list");
        
        });
    insightsApp.addIndicator();
    insightsApp.getInsights();

        var options= {
        url: "api/indicators",
        listLocation:"data",
        getValue:"indicator",
        list: {
		match: {
			enabled: true
		}
        }
        };
        $("#indicator-input").easyAutocomplete(options);

      
    });
    

    </script>


    



</body>

</html>