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
            
         getIndicators:  function (callback,indicatorsApi){
            //"/api/indicators"
            $.getJSON(indicatorsApi, function(data){
            
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
                 switch(insightsApp.status){
                    case 1: // Case for skills
                    
                        insightsApp.skillsList.data.push($("#indicator-input").val());
                        $("#skills-txt").text($("#skills-txt").text()+$("#indicator-input").val()+", ");
                        $("#indicator-input").val("");
                    break;
                    case 2: // Case for traits
                        insightsApp.traitsList.data.push($("#indicator-input").val());
                        $("#traits-txt").text($("#traits-txt").text()+$("#indicator-input").val()+", ");
                        $("#indicator-input").val("");
                    break;
                    case 3: // Case for passion
                        insightsApp.passionList.data.push($("#indicator-input").val());
                        $("#passions-txt").text($("#passions-txt").text()+$("#indicator-input").val()+", ");
                        $("#indicator-input").val("");
                    break;

                 }
                //Testing
                // insightsApp.passionList.data.push("teaching");
                // insightsApp.traitsList.data.push("extrovert");
                 if (insightsApp.status==4){
                    insightsApp.sendList(insightsApp.traitsList,
                    insightsApp.skillsList,insightsApp.passionList);
                 }
                 
             }

         });
    },
    skipStep : function () {
    $("btn-additional").on('click', function(){
        insightsApp.updateStatus++;
    });

    },
    updateStatus : function(newStatus) {
        // check if if a new status is passed
        
        if (newStatus== null){
            // Check status and conditions to change status 
            switch (insightsApp.status){
                case 0:
                insightsApp.status=1;
                break;
                case 1:
                if (insightsApp.skillsList.data.length==5){
                 insightsApp.status=2;
                }                            
                break;
                case 2:
                if (insightsApp.traitsList.data.length==5){
                    insightsApp.status=3;
                   }
                break;
                case 3:
                if (insightsApp.passionList.data.length==2){
                    insightsApp.status=4;
                   }
                break;
           } 
       }

            else {
                insightApp.status=newStatus;
            } 

       
        
    },
    
    displayInstructions : function (){
        
        switch (insightsApp.status){
            case 0:
            // Make Secondary button and input field hidden iniially
            $("#indicator-input").hide();
            $("#btn-additional").hide();

            var  instructions ="In order to get insights we need know about you. Press start to begin";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Start");
            break;
            case 1:
             var  instructions ="Choose top 5 skills you may have";
                      
            if (insightsApp.skillsList.data.length==0){
                $("#instructions").html(instructions);
                
                $("#btn-indicator").html("Add Skills");
                $("#indicator-label").html("Indicator");
                $("#indicator-input").fadeIn(1000, function(){});
            }
          
            
            break;
            case 2:
            if (insightsApp.traitsList.data.length==0){
            var  instructions ="Choose top 5 traits which best describe you";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Add");
            }
            break;
            case 3:
            if (insightsApp.skillsList.data.length==0){
            var  instructions ="Choose one or two things which you are most passionate about";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Add");
            }
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
         insightsApp.sendList();
         //alert("working");
             });
    },
    
         getResults : function (url, data) {
                 var form = $("#results_form");
              
                $("#results_input").val(data);
              form.submit();
    
     }
 } // End of Insights App Object
 
 // Calling methods from Insights App object 
 
 insightsApp.getIndicators(function(indicators){
 insightsApp.showList(indicators,"indicator-list");
     },"/api/indicators");
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
     //call easy Autocomplete
     $("#indicator-input").easyAutocomplete(options);

   
 });
 

