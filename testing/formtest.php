<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<div class="" ng-app="myApp" >

  <form class="" ng-controller="ct1" ng-submit="reg()" method="post">
<select class="" ng-model="input1" name="">
  <option value="">test</option>
</select>
<button type="submit" class="btn btn-default">Submit</button>
  </form>

</div>



<script>
var app = angular.module("myApp", []);
app.controller("ct1",function($scope){
$scope.reg = function(){
  var x = $scope.input1;
  console.log(x);
}
});
</script>





</body>
</html>
