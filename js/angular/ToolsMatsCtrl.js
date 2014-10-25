var app = angular.module('ToolsMats',[]);

app.controller('ToolsMatsCtrl', function($scope) {
    
    $scope.arrowClick = function(id) {
        $scope.id = id;
        if (angular.element('#'+id+"-span").hasClass('saleTriangle')) {
            angular.element('#'+id+"-span").removeClass('saleTriangle');
            angular.element('#'+id+"-span").addClass('saleTriangleDown');
            angular.element('#'+id+"-stuff").show();
            if ($scope.id == 'litter' || $scope.id == 'covers') {
                window.scrollBy(0,500);
            }
        } else {
            angular.element('#'+id+"-span").removeClass('saleTriangleDown');
            angular.element('#'+id+"-span").addClass('saleTriangle');
            angular.element('#'+id+"-stuff").hide();
        }
    };
    
});