$( document ).ready(function() {
    
var insightsApp = {
         
         indicators:{},
         dataReady : false,
         instructions: "",
         description : "",
         status : 0,
         autoApi : "",
         skillsList : {data:[]}, 
         traitsList:  {data:[]}, 
         passionList : {data:[]},
            
         getIndicators:  function (callback1,callback2,indicatorsApi){
            //"/api/indicators"
            $.getJSON(indicatorsApi, function(data){
            //console.log(data.data);
            insightsApp.indicators= data.data;
            callback1(insightsApp.indicators);
            callback2(insightsApp.indicators);
            }) },
        getCurrentList : function () {
            var list =[] ;
            var count=  $("#indicator-list").children().length;
            for (var i=0;i<count;i++){
                list.push({indicator:$("#indicator-list").children().eq(i).text()});
            }
            return list; 
            console.log("List items in getCurrentList");
            console.log(list);
        },
        
        showList : function (list,parentId){
            
         var listParent = $("#"+parentId);
         listParent.empty();
         var items=[];
        
        for (var i=0; i<list.length;i++){
            if(list[i].indicator!=null){
                items.push(list[i].indicator);
            }           
        }
        for (var i=0; i<items.length;i++){
            
            $("<li>"+items[i]+"</li>").appendTo(listParent);
                       
        }

        
     // add an onclick event to each list item...to complete
         $(listParent).on('click','li', function(){
            
         });
      }, 
      searchList : function (list,name){
         // console.log(name)
          var indicator=null;
          for (var i=0;i<list.length;i++){
            if(list[i].indicator==name){
               indicator=list[i];
               break;
            }
          }
          console.log(list) ; 
          console.log("Indicator inside search list");
          console.log(indicator) ;     
        return indicator;
      },
      matchArray : function(list, name) {
        var indicator=null;
        for (var i=0;i<list.length;i++){
            if(list[i]==name){
               indicator=list[i];
               break;
             }
         }
         return indicator;
    },
      showDescription : function (list){
        
        $("#indicator-input").on('mouseenter', function (){
          
            if ($("#indicator-input").val().length>0){
                var name=$("#indicator-input").val();
                var indicator =insightsApp.searchList(list,name);
                console.log("Show indicator from showDescription()");
                console.log(indicator) ; 
                if (indicator!=null){
                   $("#indicator-desc").text(indicator.description);
                }
                
            }
         
        });
        $("#indicator-input").on('mouseleave', function (){
            
                     $("#indicator-desc").text("");
                          
          });


      },
      
      
      actionIndicator : function (){
               
     $("#btn-indicator").on('click', function(){
                insightsApp.updateStatus();
                insightsApp.displayInstructions();
             if ($("#indicator-input").val().length>0){
                var listItem=null;
                 var userInput = $("#indicator-input").val();
                 console.log("User Input");
                 console.log(userInput);
                    // First check if it is part of the list 
                   var currentList= insightsApp.getCurrentList();
                   console.log("Current List");
                   console.log(currentList);
                   listItem= insightsApp.searchList(currentList,userInput);
                   
                   console.log("List item in action indicator");
                   console.log(listItem);
                    if (listItem===null){ // If no match then user typed something different from list
                        $("#instructions").text("You must choose an indicator from the list");

                    }
                    else { // if there is a match method continues 
                        $("#instructions").text(insightsApp.instructions);
                 // Switch cases depending on where in the process the person is 
                 switch(insightsApp.status){
                    case 1: // Case for skills
                    //check if there is already a tag in the specific array
                        matchItem = insightsApp.matchArray (insightsApp.skillsList.data,userInput);
                        console.log (userInput);
                        console.log (matchItem);
                        if (matchItem===null){
                            insightsApp.skillsList.data.push($("#indicator-input").val());
                            $("#skills-txt").html($("#skills-txt").html()+"<span class='tag'>"
                            +$("#indicator-input").val()+"</span><span class='tag-delete'>x</span> ");
                            $("#indicator-input").val("");
                            insightsApp.updateStatus();
                            insightsApp.displayInstructions();
                            insightsApp.deleteTagEvent(insightsApp.skillsList.data);
                        }
                        else {// If there was a match to previous item. Give message
                            $("#instructions").text("You must choose an item that you have not chosen from skills list already");
                            
                        }
                        
                        
                        
                    break;
                    case 2: // Case for traits
                    matchItem = insightsApp.matchArray (insightsApp.traitsList.data,userInput);
                    if (matchItem===null){
                        insightsApp.traitsList.data.push($("#indicator-input").val());
                        $("#traits-txt").html($("#traits-txt").html()+"<span class='tag'>"
                        +$("#indicator-input").val()+"</span><span class='tag-delete'>x</span> ");
                        $("#indicator-input").val("");
                        insightsApp.updateStatus();
                        insightsApp.displayInstructions();
                        insightsApp.deleteTagEvent(insightsApp.traitsList.data);
                    }
                    else {// If there was a match to previous item. Give message
                        $("#instructions").text("You must choose an item that you have not chosen from traits list already");
                        
                    }
                    

                    break;
                    case 3: // Case for passion
                    matchItem = insightsApp.matchArray (insightsApp.passionList.data,userInput);
                    if (matchItem===null){
                        insightsApp.passionList.data.push($("#indicator-input").val());
                        $("#passions-txt").html($("#passions-txt").html()+"<span class='tag'>"
                        +$("#indicator-input").val()+"</span><span class='tag-delete'>x</span> ");
                        $("#indicator-input").val("");
                        insightsApp.updateStatus();
                        insightsApp.displayInstructions();
                        insightsApp.deleteTagEvent(insightsApp.passionList.data);
                    }
                    else {// If there was a match to previous item. Give message
                        $("#instructions").text("You must choose an item that you have not chosen from passion list already");
                        
                    }

                    break;
                    
                 }
                                               
             }
            } // End of first if block
            else if (insightsApp.status==4) {
                $("#indicator-input").hide();
                insightsApp.sendList(insightsApp.skillsList,
                 insightsApp.traitsList,insightsApp.passionList);

            } 
            console.log ("Within Action Method---------");
            console.log (insightsApp.status);
         });
        
    },
    deleteTagEvent : function (list) {
    $(".tag-delete").on('click', function(event){
        var xTag = $(event.target);
        var tag = $(xTag).prev();
        console.log($(xTag).prev().text());
        //store tag / indicator text
        var tagVal = $(tag).text();
        // Remove x and tag from list 
        xTag.remove();
        tag.remove();
        // Now delete from array 
        insightsApp.deleteFromList(list,tagVal);
                
    });
    },
    deleteFromList : function(list,indicator) {
        console.log("List before ");
        console.log(list);
        for (var i=0;i<list.length;i++){
            if(list[i]===indicator){
               list.splice(i,1);
            }
        }
        console.log("New list");
        console.log(list);
    
    },
    skipStep : function (newStatus) {
    $("#btn-additional").on('click', function(){
        if (typeof newStatus=='undefined'){
            insightsApp.status++;
            insightsApp.displayInstructions();
           
        }
        else {
            insightsApp.updateStatus(newStatus);
            insightsApp.displayInstructions();
      
        }
        
    });

    },
    updateStatus : function(newStatus) {
        // check if if a new status is passed
        
        if (typeof newStatus=='undefined'){
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
            $("#indicator-input").hide().removeClass('hide');
            $("#btn-additional").hide().removeClass('hide');

            var  instructions ="In order to get insights we need know about you. Press start to begin";
            $("#instructions").html(instructions);
            $("#btn-indicator").html("Start");
            break;
            case 1:
            insightsApp.autoApi="/api/indicators/skill";
             insightsApp.instructions ="Choose top 5 skills you may have";
                      
            if (insightsApp.skillsList.data.length==0){
                $("#instructions").html(insightsApp.instructions);
                
                $("#btn-indicator").html("Add Skills");
                $("#indicator-label").html("Indicator");
                $("#indicator-input").fadeIn(1000);
                var showList = function(indicators){
                    insightsApp.showList(indicators,"indicator-list");
                        }
                var searchList = function(indicators){
                    insightsApp.showDescription(indicators);
                        }
                 insightsApp.getIndicators(showList,searchList,insightsApp.autoApi);
                 $("#btn-additional").hide();
                                            
            }
            
            else if (insightsApp.skillsList.data.length>2 &&
                insightsApp.skillsList.data.length<5 ) {
                $("#btn-additional").html("Skip to Traits");
                $("#btn-additional").fadeIn(1000);

                }
                else {
                    $("#btn-additional").hide();
                }
                insightsApp.runAutoComplete();
            break;
            case 2:
            insightsApp.autoApi="/api/indicators/trait";
            if (insightsApp.traitsList.data.length==0){
             insightsApp.instructions ="Choose top 5 traits which best describe you";
            $("#instructions").html(insightsApp.instructions);
            $("#btn-indicator").html("Add Traits");
            var showList = function(indicators){
                insightsApp.showList(indicators,"indicator-list");
                    }
            var searchList = function(indicators){
                insightsApp.showDescription(indicators);
                    }
             insightsApp.getIndicators(showList,searchList,insightsApp.autoApi);
             $("#btn-additional").hide();
            }
            else if (insightsApp.traitsList.data.length>2 &&
                insightsApp.traitsList.data.length<5 ) {
                $("#btn-additional").html("Skip to Passion");
                $("#btn-additional").fadeIn(1000);
            }
            else {
                $("#btn-additional").hide();
            }
            
            insightsApp.runAutoComplete();
            break;
            case 3:
            insightsApp.autoApi="/api/indicators/passion";
            if (insightsApp.passionList.data.length==0){
            insightsApp.instructions ="Choose one or two things which you are most passionate about";
            $("#instructions").html(insightsApp.instructions);
            $("#btn-indicator").html("Add Passion");

            var showList = function(indicators){
                insightsApp.showList(indicators,"indicator-list");
                    }
            var searchList = function(indicators){
                insightsApp.showDescription(indicators);
                    }
             insightsApp.getIndicators(showList,searchList,insightsApp.autoApi);
             $("#btn-additional").hide();
            }
            else if (insightsApp.passionList.data.length == 1 ) {
                $("#btn-additional").html("Skip to Insights");
                $("#btn-additional").fadeIn(1000);
                
            }
            else {
                $("#btn-additional").hide();
            }
            insightsApp.runAutoComplete();
            break;
            case 4:
            $("#btn-additional").hide();
            insightsApp.instructions ="If you are satisfied with your choices";
            $("#instructions").html(insightsApp.instructions);
            $("#btn-indicator").html("Get Insights");
            $("#input-indicator-group").hide();
            break;
            case 5:
            $("#btn-additional").hide();
            insightsApp.instructions ="If you are satisfied with your choices";
            $("#instructions").html(insightsApp.instructions);
            break;
        }
    },
    sendList : function(skillsList,traitsList,passionList) {
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
    
    // getInsights : function (){
    //  $("#get-insights").on('click', function(){
    //      insightsApp.sendList();
    //      //alert("working");
    //          });
    // },
    
         getResults : function (url, data) {
                 var form = $("#results_form");
              
                $("#results_input").val(data);
              form.submit();
    
     },
     runAutoComplete : function (){
        var options= {
            url: insightsApp.autoApi,
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

     },
     startApp : function () {
        insightsApp.displayInstructions();
        insightsApp.actionIndicator();
        //insightsApp.getInsights();
        insightsApp.skipStep();
     }
 } // End of Insights App Object
 
 // Calling startApp method to begin app

    
    insightsApp.startApp();


     

   
 });
 

