function todoCtrl($scope) {
    $scope.todoList = [{todoText: 'Regular work', done:false}];
    
    $scope.todoAdd = function() {
        if ($scope.todoInput.length > 0) {
            $scope.todoList.push({todoText: $scope.todoInput, done:false});
        }
        $scope.todoInput = "";
    }
    
    $scope.toggleAll = function() {
        var oldList = $scope.todoList;
        $scope.todoList = [];
        
        angular.forEach(oldList, function(x) {
            if (x.done) {
                $scope.todoList.push({todoText: x.todoText, done:false});
            } else {
                $scope.todoList.push({todoText: x.todoText, done:true});
            }
        });
    }
    
    $scope.remove = function() {
        var oldList = $scope.todoList;
        $scope.todoList = [];
        
        angular.forEach(oldList, function(x) {
            if (! x.done) {
                $scope.todoList.push(x);
            }
        });
    };
}