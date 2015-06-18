define(['angular'], function (angular) {
    return angular.module('app', ['ngRoute'])
        .controller('SiteCtrl', function($scope) {
            $scope.data = data;
        });
});