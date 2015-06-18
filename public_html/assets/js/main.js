require.config({
    baseUrl: data['ASSETS']
    , paths: {
        angular: 'libs/angular/angular.min'
        , ngRoute: 'libs/angular-route/angular-route.min'
        , app: 'js/app'
    }
    , shim: {
        angular: {exports: 'angular'}
        , ngResource: ['angular']
        , ngRoute: ['angular']
        , app: ['angular', 'ngRoute']
    }

    , deps: ['angular', 'app']
    , callback: function (angular) {
        angular.element().ready(function () {
            angular.bootstrap(document, ['app']);
        });
    }
});