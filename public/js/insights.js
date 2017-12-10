$( document ).ready(function() {
    
var insightsApp = {
         
         indicators:{},
         dataReady : false,
         instructions: "",
         description : "",
         status : 0,
         catChoices: 0,
         skillsList : {data:[]}, 
         traitsList:  {data:[]}, 
         passionList : {data:[]},
            
         getIndicators:  function (callback){
            
            $.getJSON("/api/indicators/trait", function(data){
            
            insightsApp.indicators= data.data;
            callback(insightsApp.indicators);
            
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
   
      
      actionIndicator : function (){
        
        // var skillsList= {data:[]}; 
        // var  traitsList= {data:[]}; 
        // var passionList= {data:[]};
        
     $("#btn-indicator").on('click', function(){
                insightsApp.updateStatus();
                insightsApp.displayInstructions();
             if ($("#indicator-input").val().length>0){
                 // Switch cases depending on where in the process the person is 
                 // General example for now
                
                
                 insightsApp.skillsList.data.push($("#indicator-input").val());
                 $("#skills-txt").text($("#skills-txt").text()+$("#indicator-input").val()+", ");
                 $("#indicator-input").val("");
                 insightsApp.passionList.data.push("teaching");
                 insightsApp.traitsList.data.push("extrovert");
                 if (insightsApp.status>1){
                     
                     insightsApp.sendList(insightsApp.traitsList,
                    insightsApp.skillsList,insightsApp.passionList);
                 }
                 
             }

         });
    },
    skipStep : function () {
    $("btn-additional").on('click', function(){
        insightsApp.status++;
    });

    },
    updateStatus : function() {
        if (insightsApp.status>0){
            insightsApp.status++;
        }
        else if (insightsApp.status==0){
            insightsApp.status=1;
          
        }
        
    },
    
    displayInstructions : function (){
        // Make Secondary button and input field hidden iniially
        $("#indicator-input").hide();
        $("#btn-additional").hide();


        switch (insightsApp.status){
            case 0:
            var  instructions ="In order to get insights we need know about you. Press start to begin";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Start");
            break;
            case 1:
             var  instructions ="Choose top 5 skills you may have";
            $("#instructions").html(instructions);
            
            $("#btn-indicator").html("Add Skills");
            $("#indicator-label").html("Indicator");
            
            if (insightsApp.skillsList.data.length<1){
                $("#indicator-input").fadeIn(1000, function(){});
            }
          
            
            break;
            case 2:
            var  instructions ="Choose top 5 traits which best describe you";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Add");
            break;
            case 3:
            var  instructions ="Choose one or two things which you are most passionate about";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Add");
            break;
            case 4:
            var  instructions ="If you are satisfied with your choices";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Get Insights");
            break;
            case 5:
            var  instructions ="If you are satisfied with your choices";
            $("#instructions").html(instructions);
            break;
        }
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
             
             
             insightsApp.getResults('/insights/results',JSON.stringify(response));
            
            
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
         this.sendList();
         //alert("working");
             });
    },
    
         getResults : function (url, data) {
                 var form = $("#results_form");
              
                $("#results_input").val(data);
              form.submit();
    
     }
 }
 insightsApp.getIndicators(function(indicators){
 insightsApp.showList(indicators,"indicator-list");
     
     });
     insightsApp.displayInstructions();
     insightsApp.actionIndicator();
    insightsApp.getInsights();

// Options for jQuery autocomplete
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
 

