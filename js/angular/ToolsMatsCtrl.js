var app = angular.module('ToolsMats',[]);

app.controller('ToolsMatsCtrl', function($scope) {
    
    $scope.arrowClick = function(id) {
        $scope.id = id;
        if (angular.element('#'+id+'-pix').css('display') === 'none') {
            angular.element('#'+id+"-pix").css('display','block');
            angular.element('#'+id+"-see").html('Click here to hide pictures.');
        } else {
            angular.element('#'+id+"-pix").css('display','none');
            angular.element('#'+id+"-see").html('Click here to see pictures.');
        }
        
    };
    
});