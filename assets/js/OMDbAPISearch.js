(function(angular) {
    'use strict';
    var app = angular.module('OMDbAPISearch', [])
    app.controller('searchMovies', ['$scope', '$http',
        function($scope, $http) {
            $scope.method = 'GET';
            $scope.fetch = function() {
                if ($scope.searchparam) {
                    $scope.url = 'http://www.omdbapi.com/?apikey=87cda9f5&s=' + $scope.searchparam + '&type=movie&r=json';
                    $http({
                        method: $scope.method,
                        url: $scope.url
                    }).
                    then(function(response) {
                        if (response.data.Response) {
                            // success
                            var theSrchResults = response.data["Search"];
                            angular.forEach(theSrchResults, function(obj) {
                                // loop through each movie, and pull the details using the IMDB ID
                                $http({
                                    method: $scope.method,
                                    url: 'http://www.omdbapi.com/?apikey=87cda9f5&i=' + obj.imdbID
                                }).
                                then(function(response) {
                                // extend the details to the parent
                                obj.details = response.data;
                                });
                            });
                            $scope.movieResults = theSrchResults;
                        } else {
                        //error, movie not found
                            console.log("not found");
                            $('.noResults').html("<div class='col'><h1 class='text-center'><strong>No Results Found.</strong></h1></div>");
                        }
                    }, function(response) {
                        console.log("failure");
                        $('.noResults').html("<div class='col'><h1 class='text-center'><strong>Network Or Data Error, Please Try Again.</strong></h1></div>");
                    });
                } else {
                    // no input value
                }
            };
        }
    ])
    app.directive('movieSrchResults', function() {
        return {
            templateUrl: 'movieResults.php'
        };
    });
})(window.angular);
