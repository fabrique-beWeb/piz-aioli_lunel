var monAppli = angular.module('command', []);

monAppli.controller('commandAdmin', ['$scope', '$http', function ($scope, $http) {
        $scope.getCommandAdmin = function () {
            $http.get("http://www.pizaioli.fr/admin/command/notDone")
                    .then(function (response) {
                        $scope.commands = response.data;
                    });
        };
    }]);