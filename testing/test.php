<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>

<div id="city" ng-app="myApp" ng-controller="myCtrl">

<p>city</p>

<select ng-model="orderProp" ng-options="c.city_ar_name for c in xhf ">
<option value="0">اختر</option>

</select>

  <select ng-model="orderProp" ng-options="z.zone_ar_name for z in cities">
      <option value="0">اختر</option>

  </select>

</div>


Selected City :{{orderProp.city_ar_name}} and id is : {{orderProp.city_id}}
Selected zone :{{orderProp.zone_ar_name}} and id is : {{orderProp.zone_id}}

<script>
var app = angular.module('myApp', []);





app.factory('APIservices', function($http) {
  var APIzoneJson = {};
  APIzoneJson.getAPIzoneJSON = function() {

    return $http.get('api.php/bindZone/')
  }
  return APIzoneJson;


});
app.factory('APIservices2', function($http) {
  var APIzoneJson2 = {};
  APIzoneJson2.getAPIzoneJSON2 = function() {

    return $http.get('api.php/bindCity/')
  }
  return APIzoneJson2;


});
app.controller('myCtrl',function myCtrl($scope,$http, APIservices,APIservices2) {

  $http.get("api.php/bindZone/")
.then(function(response){
  $scope.cities = response.data;
});

$http.get("api.php/bindCity/")
.then(function(response){
$scope.xhf = response.data;
});


  });





//







</script>




</body>
</html>
