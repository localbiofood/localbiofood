$(document).ready( function () {});

angular.module('main', [])
        .config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        })
        .controller('TodosController', function ($scope, $http) {
        	console.log('test');
            var count = 0;
            $scope.inputDevice = [
                {value: 'vidzeme', label: 'Vidzeme'},
                {value: 'latgale', label:    'Latgale'}
            ];

            $http.get('/regions').success(function(todos){
                $scope.todos = todos;
                angular.forEach($scope.todos, function(todo) {
                    $scope.count += 1;
                });
            });
            $scope.count = count;

        });

