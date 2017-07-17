var app = angular.module("myApp", ["ngRoute"]);

// Angular controller to bind data to  age dropdowns
app.controller("ctrl_birthdate", function($scope) {

BindYears();
BindDay();
BindMonth();






  function BindYears() {
          $scope.YearList = [];

          int: 1940;
          for (var Y = 1940; Y <= 2010; Y++) {
              $scope.YearList.push(Y);
          }
      }

      function BindDay() {
              $scope.DayList = [];
              int: 1;
              for (var Y = 1; Y <= 31; Y++) {
                  $scope.DayList.push(Y);
              }
          }

          function BindMonth() {
                  $scope.MonthList =[
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December"];


              }
});
