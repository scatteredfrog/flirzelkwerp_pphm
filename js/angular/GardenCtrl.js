var app = angular.module('Gardening',[]);

app.controller('GardenCtrl', function($scope) {
    $scope.gtab = 'design';
    $scope.tab_front = 'design';
    
    $scope.focusTab = function(gtab) {
        $scope.gtab = gtab;
        angular.element('#'+gtab).removeClass('tab_back');
        angular.element('#'+$scope.tab_front).addClass('tab_back');
        $scope.tab_front = gtab;
    };
    
    });