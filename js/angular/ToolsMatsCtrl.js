var app = angular.module('ToolsMats',[]);

app.controller('ToolsMatsCtrl', function($scope) {
    
    $scope.arrowClick = function(id) {
        $scope.id = id;
        if (angular.element('#'+id+'-pix').css('display') === 'none') {
            angular.element('#'+id+"-pix").css('display','block');
            if (id == "worm-fact") {
                angular.element('#worm_description').css('display','block');
                angular.element('#worm-fact-see').html("Click here to hide pictures and details.");
            } else {
                angular.element('#'+id+"-see").html('Click here to hide pictures.');
            }
        } else {
            angular.element('#'+id+"-pix").css('display','none');
            if (id === "worm-fact") {
                angular.element('#worm_description').css('display','none');
                angular.element('#'+id+"-see").html("Click here to see pictures and details.");
                window.location.hash = '#wfact';
            } else {
                angular.element('#'+id+"-see").html('Click here to see pictures.');
            }
        }
        
    };
    
});