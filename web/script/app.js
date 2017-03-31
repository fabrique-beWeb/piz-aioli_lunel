var monAppli = angular.module('command', []);

monAppli.controller('commandAdmin', ['$scope', '$http', function ($scope, $http) {
        $scope.getCommandAdmin = function () {
            $http.get("http://www.pizaioli.fr/command/notDone")
                    .then(function (response) {
                        alert(response.data);
                        $scope.commands = response.data;
                    });
        };
    }]);