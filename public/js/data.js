
function getIndicators(){
    //first use jquery ajax to call to backend laravel api 
    //convert json reply to javascript object 
    // example
    var insightsJson = [
        { "firstName":"John", "lastName":"Doe" },
        { "firstName":"Anna", "lastName":"Smith" },
        { "firstName":"Peter", "lastName":"Jones" }
    ];
    var insightsList = insightsJson;
    
    // return array of Objects
    return insightsList;

}

function testData (){
var data = ["Logical", "Artistic","Extrovert","Introvert"];
return data;
}

function displayArrayList(array, elementId){
  var element = document.getElementById(elementId);
  var valueString = "";
  for (var i=0; i<array.length; i++){
    valueString += array[i] +"<br>";
  }
  element.innerHTML= valueString;
}
function displayObjectList(){

}
function showObject(obj) {
    var result = "";
    for (var p in obj) {
      if( obj.hasOwnProperty(p) ) {
        result += p + " , " + obj[p] + "\n";
      } 
    }              
    return result;
  }

function showInsightsList(obj) {
    var result = "";
    $.each(obj, function(k, v) {
      result += k + " , " + v + "\n";
    });
    return result;
  }

  function showObjectArray (objectArray){
for (var i in objectArray){
    showObject(i);
}
  }