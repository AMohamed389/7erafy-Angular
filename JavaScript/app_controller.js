//this is an AngularRouter config.
app.config(function($routeProvider) {
    $routeProvider
    .when("/newCustomer", {
        templateUrl : "newCustomer.html"
    })
    .when("/newTech", {
        templateUrl : "newTech.html"
    })
    .when("/findTech", {
        templateUrl : "findTech.html"
    })
});


//Angular service to bind zone to all dropdowns
app.factory('APIservices', function($http) {
  var APIzoneJson = {};
  APIzoneJson.getAPIzoneJSON = function() {

    return $http.get('api.php/bindZone/')
  }
  return APIzoneJson;

});

//controllerCity






//Registeration controller ( technicians )
//Author : Ahmed Shalaby
  app.controller('RegisterCtrl', function ($scope, $http,APIservices) {

$http.get('api.php/bindProfessions/').then(function(response){
  $scope.jobJSON = response.data;
});
	
	$http.get("api.php/bindCity/")
  .then(function(response){
    $scope.gov = response.data;});
	
    $http.get("api.php/bindZone/")
  .then(function(response){
    $scope.cities = response.data;

        $scope.register = function() {
            //TODO :1.add JSON response incase of already registered --maged

            var fname = $scope.fname;
          var lastname = $scope.lastname;
          var mobile = $scope.mobile;
          var email = $scope.email;
          var password = $scope.password;
          var day = document.getElementById("day").value;
          var month = document.getElementById("month").value;
          var year =document.getElementById("year").value;
          var city= $scope.orderProp1.city_id;
          var zone = $scope.orderProp2.zone_id;
          var gender = $('input[name=gender]:checked', '#regForm').val();
          var birth = year+"-"+month+"-"+day;
          var job = $scope.jobsModel.job_id;



            $.ajax({
              url: "webservices.php",
              type: "get", //send it through get method
              data: {
              name:fname
              ,techId:"11"
              ,password:password
              ,nickName:lastname
              ,mobile:mobile
              ,techEmail:email
              ,birthDate:birth
              ,cityId:city
              ,zoneId:zone
              ,gender:gender
              ,countryId:"1"
              ,service:job
              ,methodName:"insertTech"}
            })



  }

});
});


//Registeration controller ( customers )
//Author : Ahmed Shalaby
  app.controller('RegisterCtrlCustomer', function ($scope, $http,APIservices) {

$http.get('api.php/bindProfessions/').then(function(response){
  $scope.jobJSON = response.data;
});

	$http.get("api.php/bindCity/")
  .then(function(response){
    $scope.gov = response.data;
	
	});

    $http.get("api.php/bindZone/")
  .then(function(response){
    $scope.cities = response.data;
	
        $scope.register = function() {
            //TODO :1.add JSON response incase of already registered --maged

            var fname = $scope.fname;
          var lastname = $scope.lastname;
          var mobile = $scope.mobile;
          var email = $scope.email;
          var password = $scope.password;
          var day = document.getElementById("day").value;
          var month = document.getElementById("month").value;
          var year =document.getElementById("year").value;
          var city= $scope.orderProp1.city_id;
          var zone = $scope.orderProp2.zone_id;
          var gender = $('input[name=gender]:checked', '#regForm').val();
          var birth = year+"-"+month+"-"+day;




            $.ajax({
              url: "webservices.php",
              type: "get", //send it through get method
              data: {
              name:fname
              ,cstId:"11"
              ,password:password
              ,nickName:lastname
              ,mobile:mobile
              ,cstEmail:email
              ,birthDate:birth
              ,cityId:city
              ,zoneId:zone
              ,gender:gender
              ,countryId:"1"
              ,methodName:"insertCust"
            },
            success: function(data) {
$scope.cstData = data;
    }
          })


  }

});
});
//
