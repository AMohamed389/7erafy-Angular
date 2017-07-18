<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../JavaScript/Angular_functions.js"></script>
<script src="../JavaScript/AngularApp.js"></script>
<script src="../JavaScript/Angular_RegisterServices.js"></script>
<script src="../JavaScript/Angular_RegisterController.js"></script>

<body>

<div ng-app="myApp" ng-controller="registerController">
  {{yearList}}
  {{monthList}}
  {{dayList}}
  <select ng-model="selectedCity" ng-options="c.city_ar_name for c in cityList">
    
  </select>
  <select ng-model="selectedZone" ng-options="z.zone_ar_name for z in zoneList | filter:selectedCity.city_ar_name">
    
  </select>

  <select ng-model="selectedJob" ng-options="j.job_name for j in JobList">
    
  </select>


<button type="" ng-click="g()">log</button>



</div>

</body>
</html>
