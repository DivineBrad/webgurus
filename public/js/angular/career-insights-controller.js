app.controller('career-insights-controller', ['$scope','$http', '$uibModal', function($scope, $http, $uibModal){
    $http({
        method : "GET",
        url : "http://localhost:8000/careers-list"
    }).then(function mySuccess(response) {
        // $scope.myWelcome = response.data;
        $scope.careers=response.data;
        
    }, function myError(response) {
        // $scope.myWelcome = response.statusText;
        console.log("Error: "+response.statusText);
    });

    $scope.$watch(function () {
      $scope.filteredItems = $scope.$eval("careers | filter:searchText");
    });
    //adding Pagination
    $scope.currentPage = 0;
    $scope.pageSize = 10;
    
    $scope.numberOfPages=function(){
        return Math.ceil($scope.filteredItems.length/$scope.pageSize);                
    }
   
    //pagination code ended

    $scope.selectedItems=0;
    $scope.compareModal=null;

    $scope.$watch('careers', function(careers){
        var selectedItems = 0;
        angular.forEach(careers, function(career){
          selectedItems += career.selected ? 1 : 0;
        })
        $scope.selectedItems = selectedItems;
        if ($scope.selectedItems==2){
            $('#compare').prop('disabled', false);
          }
          else{
            $('#compare').prop('disabled', true);  
          }
        console.log($scope.selectedItems);
      }, true); 
      
      
      
    $scope.openCompareModal=function(c1,c2){
          var modalInstance=$uibModal.open({
            size: 'lg',
            controller: function($scope, $uibModalInstance) {
              $scope.career1 = c1; 
              $scope.career2 = c2;  
    
              $scope.ok = function () {
                $uibModalInstance.close('success');
              };

              $scope.cancel = function () {
                $uibModalInstance.dismiss('cancel');       
              };
            },
            backdrop:'static',
            templateUrl:'js/angular/templates/myModalContent.html'

          });
          modalInstance.result.then(function () {
            
                    }, function () {
                        // $log.info('Modal dismissed at: ' + new Date());
                    });
                
          
      }
      

    

    //   $scope.closeCompareModal=function(){
    //     $scope.compareModal.dismiss('cancel');
    // }

      $('#compare').bind('click', function(){
          var selectedCareers=[];
          angular.forEach($scope.careers, function(career) {
            if(career.selected) selectedCareers.push(career);
          });
          if (selectedCareers.length==2){
              console.log(selectedCareers);
            $scope.openCompareModal(selectedCareers[0], selectedCareers[1]);
          }
        
      });
}]);