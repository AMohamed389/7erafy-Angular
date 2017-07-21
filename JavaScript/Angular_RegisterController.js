app.controller("registerController", function ($scope,$filter, service_validateTechEmail, service_validateCustomerEmail, service_bindJob, service_bindyear, service_bindZone, service_bindCity, service_bindMonth, service_bindDay) {
    // get years array
    $scope.yearList = service_bindyear.getYear();
    // 
    $scope.monthList = service_bindMonth.getMonth();
    // 
    $scope.dayList = service_bindDay.getDay();
    // 
    service_bindCity.getCity().then(function (response) {
        $scope.cityList = response.data;
    });
    // 
    service_bindZone.getZone().then(function (response) {
        $scope.zoneList = response.data;
    });
    // 
    service_bindJob.getJob().then(function (response) {
        $scope.JobList = response.data;
    });

    // 

   

    // check if the customer mail textbox was modified..

      $scope.mail_customer = function () {
                var m = $scope.email;
                
                service_validateCustomerEmail.validateCustomermail(m).then(function (response) {
                    console.log(response.data[0].customerState);
                    $scope.state =response.data;
                    if ($scope.state[0].customerState == "current") {
                        $scope.label_currentCustomer = "true";
                        $scope.check_submitButton = "true";
                    }
                    else if ($scope.state[0].customerState == "new") {
                        $scope.label_currentCustomer = "";
                        $scope.check_submitButton = "";
                    }

                })
            };

                    $scope.mail_tech = function () {
                var m = $scope.email;
                service_validateTechEmail.validateTechmail(m).then(function (response) {
                    console.log(response.data[0].customerState);
                    $scope.state =response.data;
                    if ($scope.state[0].customerState == "current") {
                        $scope.label_currentTech = "true";
                        $scope.check_submitButtontech = "true";
                    }
                    else if ($scope.state[0].customerState == "new") {
                        $scope.label_currentTech = "";
                        $scope.check_submitButtontech = "";
                    }

                })
            };



    // 
    $scope.validateTechMail = function () {
        $scope.techData = service_validateTechEmail.validateTechEmail($scope.TechEmail);
    };
    // this is to register a customer.

    $scope.registerCustomer = function () {
        var fname = $scope.fname;
        var lastname = $scope.lastname;
        var mobile = $scope.mobile;
        var email = $scope.email;
        var password = $scope.password;
        var day = $scope.day;
        var month = $scope.month.monthOrder;
        var year = $scope.year;
        var city = $scope.selectedCity.city_id;
        var zone = $scope.selectedZone.zone_id;
        var gender = $('input[name=gender]:checked', '#regForm').val();
        var birth = year + "-" + month + "-" + day;


        $.ajax({
            url: "./webservices.php",
            type: "get", //send it through get method
            data: {
                name: fname
                , cstId: "11"
                , password: password
                , nickName: lastname
                , mobile: mobile
                , cstEmail: email
                , birthDate: birth
                , cityId: city
                , zoneId: zone
                , gender: gender
                , countryId: "1"
                , methodName: "insertCust"
            },
            success: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    // 
    // this is to register a technician
    $scope.registerTech = function () {
        var fname = $scope.fname;
        var lastname = $scope.lastname;
        var mobile = $scope.mobile;
        var email = $scope.email;
        var password = $scope.password;
        var day = $scope.day;
        var month = $scope.month.monthOrder;
        var year = $scope.year;
        var city = $scope.selectedCity.city_id;
        var zone = $scope.selectedZone.zone_id;
        var gender = $('input[name=gender]:checked', '#regForm').val();
        var birth = year + "-" + month + "-" + day;
        var job = $scope.job.job_id;


        $.ajax({
            url: "./webservices.php",
            type: "get", //send it through get method
            data: {
                name: fname
                , techId: "11"
                , password: password
                , nickName: lastname
                , mobile: mobile
                , techEmail: email
                , birthDate: birth
                , cityId: city
                , zoneId: zone
                , gender: gender
                , countryId: "1"
                , service: job
                , methodName: "insertTech"
            },
            success: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }



    // end of registeration 

    // 

    // search function
    $scope.items = [{
    "id": 1,
    "name": "name 1",
    "description": "نجار ",
    "field3": "القاهره1",
    "field4": "field4 1",
    "field5 ": "field5 1"
  }, {
    "id": 2,
    "name": "name 2",
    "description": "نجار ",
    "field3": "القاهره2",
    "field4": "field4 2",
    "field5 ": "field5 2"
  }, {
    "id": 3,
    "name": "name 3",
    "description": "نجار ",
    "field3": "القاهره3",
    "field4": "field4 3",
    "field5 ": "field5 3"
  }, {
    "id": 4,
    "name": "name 4",
    "description": "نجار ",
    "field3": "القاهره4",
    "field4": "field4 4",
    "field5 ": "field5 4"
  }, {
    "id": 5,
    "name": "name 5",
    "description": "نجار ",
    "field3": "القاهره5",
    "field4": "field4 5",
    "field5 ": "field5 5"
  }, {
    "id": 6,
    "name": "name 6",
    "description": "نجار ",
    "field3": "القاهره6",
    "field4": "field4 6",
    "field5 ": "field5 6"
  }, {
    "id": 7,
    "name": "name 7",
    "description": "نجار ",
    "field3": "القاهره7",
    "field4": "field4 7",
    "field5 ": "field5 7"
  }, {
    "id": 8,
    "name": "name 8",
    "description": "نجار ",
    "field3": "القاهره8",
    "field4": "field4 8",
    "field5 ": "field5 8"
  }, {
    "id": 9,
    "name": "name 9",
    "description": "نجار ",
    "field3": "القاهره9",
    "field4": "field4 9",
    "field5 ": "field5 9"
  }, {
    "id": 10,
    "name": "name 10",
    "description": "نجار ",
    "field3": "القاهره10",
    "field4": "field4 10",
    "field5 ": "field5 10"
  }, {
    "id": 11,
    "name": "name 11",
    "description": "نجار ",
    "field3": "القاهره11",
    "field4": "field4 11",
    "field5 ": "field5 11"
  }, {
    "id": 12,
    "name": "name 12",
    "description": "نجار ",
    "field3": "القاهره12",
    "field4": "field4 12",
    "field5 ": "field5 12"
  }, {
    "id": 13,
    "name": "name 13",
    "description": "نجار ",
    "field3": "القاهره13",
    "field4": "field4 13",
    "field5 ": "field5 13"
  }, {
    "id": 14,
    "name": "name 14",
    "description": "نجار ",
    "field3": "القاهره14",
    "field4": "field4 14",
    "field5 ": "field5 14"
  }, {
    "id": 15,
    "name": "name 15",
    "description": "نجار ",
    "field3": "القاهره15",
    "field4": "field4 15",
    "field5 ": "field5 15"
  }, {
    "id": 16,
    "name": "name 16",
    "description": "نجار ",
    "field3": "القاهره16",
    "field4": "field4 16",
    "field5 ": "field5 16"
  }, {
    "id": 17,
    "name": "name 17",
    "description": "نجار ",
    "field3": "القاهره17",
    "field4": "field4 17",
    "field5 ": "field5 17"
  }, {
    "id": 18,
    "name": "name 18",
    "description": "نجار ",
    "field3": "القاهره18",
    "field4": "field4 18",
    "field5 ": "field5 18"
  }, {
    "id": 19,
    "name": "name 19",
    "description": "نجار ",
    "field3": "القاهره19",
    "field4": "field4 19",
    "field5 ": "field5 19"
  }, {
    "id": 20,
    "name": "name 5",
    "description": "نجار ",
    "field3": "القاهره5",
    "field4": "field4 5",
    "field5 ": "field5 5"
  }, {
    "id": 21,
    "name": "name 6",
    "description": "نجار ",
    "field3": "القاهره6",
    "field4": "field4 6",
    "field5 ": "field5 6"
  }, {
    "id": 22,
    "name": "name 7",
    "description": "نجار ",
    "field3": "القاهره7",
    "field4": "field4 7",
    "field5 ": "field5 7"
  }, {
    "id": 23,
    "name": "name 8",
    "description": "نجار ",
    "field3": "القاهره8",
    "field4": "field4 8",
    "field5 ": "field5 8"
  }, {
    "id": 24,
    "name": "name 9",
    "description": "نجار ",
    "field3": "القاهره9",
    "field4": "field4 9",
    "field5 ": "field5 9"
  }, {
    "id": 25,
    "name": "name 10",
    "description": "نجار ",
    "field3": "القاهره10",
    "field4": "field4 10",
    "field5 ": "field5 10"
  }, {
    "id": 26,
    "name": "name 11",
    "description": "نجار ",
    "field3": "القاهره11",
    "field4": "field4 11",
    "field5 ": "field5 11"
  }, {
    "id": 27,
    "name": "name 12",
    "description": "نجار ",
    "field3": "القاهره12",
    "field4": "field4 12",
    "field5 ": "field5 12"
  }, {
    "id": 28,
    "name": "name 13",
    "description": "نجار ",
    "field3": "القاهره13",
    "field4": "field4 13",
    "field5 ": "field5 13"
  }, {
    "id": 29,
    "name": "name 14",
    "description": "نجار ",
    "field3": "القاهره14",
    "field4": "field4 14",
    "field5 ": "field5 14"
  }, {
    "id": 30,
    "name": "name 15",
    "description": "نجار ",
    "field3": "القاهره15",
    "field4": "field4 15",
    "field5 ": "field5 15"
  }, {
    "id": 31,
    "name": "name 16",
    "description": "نجار ",
    "field3": "القاهره16",
    "field4": "field4 16",
    "field5 ": "field5 16"
  }, {
    "id": 32,
    "name": "name 17",
    "description": "نجار ",
    "field3": "القاهره17",
    "field4": "field4 17",
    "field5 ": "field5 17"
  }, {
    "id": 33,
    "name": "name 18",
    "description": "نجار ",
    "field3": "القاهره18",
    "field4": "field4 18",
    "field5 ": "field5 18"
  }, {
    "id": 34,
    "name": "name 19",
    "description": "نجار ",
    "field3": "القاهره19",
    "field4": "field4 19",
    "field5 ": "field5 19"
  }, {
    "id": 35,
    "name": "name 5",
    "description": "نجار ",
    "field3": "القاهره5",
    "field4": "field4 5",
    "field5 ": "field5 5"
  }, {
    "id": 36,
    "name": "name 6",
    "description": "نجار ",
    "field3": "القاهره6",
    "field4": "field4 6",
    "field5 ": "field5 6"
  }, {
    "id": 37,
    "name": "name 7",
    "description": "نجار ",
    "field3": "القاهره7",
    "field4": "field4 7",
    "field5 ": "field5 7"
  }, {
    "id": 38,
    "name": "name 8",
    "description": "نجار ",
    "field3": "القاهره8",
    "field4": "field4 8",
    "field5 ": "field5 8"
  }, {
    "id": 39,
    "name": "name 9",
    "description": "نجار ",
    "field3": "القاهره9",
    "field4": "field4 9",
    "field5 ": "field5 9"
  }, {
    "id": 40,
    "name": "name 10",
    "description": "نجار ",
    "field3": "القاهره10",
    "field4": "field4 10",
    "field5 ": "field5 10"
  }, {
    "id": 41,
    "name": "name 11",
    "description": "نجار ",
    "field3": "القاهره11",
    "field4": "field4 11",
    "field5 ": "field5 11"
  }, {
    "id": 42,
    "name": "name 12",
    "description": "نجار ",
    "field3": "القاهره12",
    "field4": "field4 12",
    "field5 ": "field5 12"
  }, {
    "id": 43,
    "name": "name 13",
    "description": "نجار ",
    "field3": "القاهره13",
    "field4": "field4 13",
    "field5 ": "field5 13"
  }, {
    "id": 44,
    "name": "name 14",
    "description": "نجار ",
    "field3": "القاهره14",
    "field4": "field4 14",
    "field5 ": "field5 14"
  }, {
    "id": 45,
    "name": "name 15",
    "description": "نجار ",
    "field3": "القاهره15",
    "field4": "field4 15",
    "field5 ": "field5 15"
  }, {
    "id": 46,
    "name": "name 16",
    "description": "نجار ",
    "field3": "القاهره16",
    "field4": "field4 16",
    "field5 ": "field5 16"
  }, {
    "id": 47,
    "name": "name 17",
    "description": "نجار ",
    "field3": "القاهره17",
    "field4": "field4 17",
    "field5 ": "field5 17"
  }, {
    "id": 48,
    "name": "name 18",
    "description": "نجار ",
    "field3": "القاهره18",
    "field4": "field4 18",
    "field5 ": "field5 18"
  }, {
    "id": 49,
    "name": "name 19",
    "description": "نجار ",
    "field3": "القاهره19",
    "field4": "field4 19",
    "field5 ": "field5 19"
  }, {
    "id": 50,
    "name": "name 5",
    "description": "نجار ",
    "field3": "القاهره5",
    "field4": "field4 5",
    "field5 ": "field5 5"
  }, {
    "id": 51,
    "name": "name 6",
    "description": "نجار ",
    "field3": "القاهره6",
    "field4": "field4 6",
    "field5 ": "field5 6"
  }, {
    "id": 52,
    "name": "name 7",
    "description": "نجار ",
    "field3": "القاهره7",
    "field4": "field4 7",
    "field5 ": "field5 7"
  }, {
    "id": 53,
    "name": "name 8",
    "description": "نجار ",
    "field3": "القاهره8",
    "field4": "field4 8",
    "field5 ": "field5 8"
  }, {
    "id": 54,
    "name": "name 9",
    "description": "نجار ",
    "field3": "القاهره9",
    "field4": "field4 9",
    "field5 ": "field5 9"
  }, {
    "id": 55,
    "name": "name 10",
    "description": "نجار ",
    "field3": "القاهره10",
    "field4": "field4 10",
    "field5 ": "field5 10"
  }, {
    "id": 56,
    "name": "name 11",
    "description": "نجار ",
    "field3": "القاهره11",
    "field4": "field4 11",
    "field5 ": "field5 11"
  }, {
    "id": 57,
    "name": "name 12",
    "description": "نجار ",
    "field3": "القاهره12",
    "field4": "field4 12",
    "field5 ": "field5 12"
  }, {
    "id": 58,
    "name": "name 13",
    "description": "نجار ",
    "field3": "القاهره13",
    "field4": "field4 13",
    "field5 ": "field5 13"
  }, {
    "id": 59,
    "name": "name 14",
    "description": "نجار ",
    "field3": "القاهره14",
    "field4": "field4 14",
    "field5 ": "field5 14"
  }, {
    "id": 60,
    "name": "name 15",
    "description": "نجار ",
    "field3": "القاهره15",
    "field4": "field4 15",
    "field5 ": "field5 15"
  }, {
    "id": 61,
    "name": "name 16",
    "description": "نجار ",
    "field3": "القاهره16",
    "field4": "field4 16",
    "field5 ": "field5 16"
  }, {
    "id": 62,
    "name": "name 17",
    "description": "نجار ",
    "field3": "القاهره17",
    "field4": "field4 17",
    "field5 ": "field5 17"
  }, {
    "id": 63,
    "name": "name 18",
    "description": "نجار ",
    "field3": "القاهره18",
    "field4": "field4 18",
    "field5 ": "field5 18"
  }, {
    "id": 64,
    "name": "name 19",
    "description": "نجار ",
    "field3": "القاهره19",
    "field4": "field4 19",
    "field5 ": "field5 19"
  }, {
    "id": 65,
    "name": "name 20",
    "description": "نجار ",
    "field3": "القاهره20",
    "field4": "field4 20",
    "field5 ": "field5 20"
  }];


  // init
  $scope.sort = {
    sortingOrder: 'id',
    reverse: false
  };

  $scope.gap = 5;

  $scope.filteredItems = [];
  $scope.groupedItems = [];
  $scope.itemsPerPage = 5;
  $scope.pagedItems = [];
  $scope.currentPage = 0;
  var searchMatch = function(haystack, needle) {
    if (!needle) {
      return true;
    }
    return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
  };

  // init the filtered items
  $scope.search = function() {
    $scope.filteredItems = $filter('filter')($scope.items, function(item) {
      for (var attr in item) {
        if (searchMatch(item[attr], $scope.query))
          return true;
      }
      return false;
    });
    // take care of the sorting order
    if ($scope.sort.sortingOrder !== '') {
      $scope.filteredItems = $filter('orderBy')($scope.filteredItems, $scope.sort.sortingOrder, $scope.sort.reverse);
    }
    $scope.currentPage = 0;
    // now group by pages
    $scope.groupToPages();
  };


  // calculate page in place
  $scope.groupToPages = function() {
    $scope.pagedItems = [];

    for (var i = 0; i < $scope.filteredItems.length; i++) {
      if (i % $scope.itemsPerPage === 0) {
        $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [$scope.filteredItems[i]];
      } else {
        $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push($scope.filteredItems[i]);
      }
    }
  };

  $scope.range = function(size, start, end) {
    var ret = [];
    console.log(size, start, end);

    if (size < end) {
      end = size;
      start = size - $scope.gap;
    }
    for (var i = start; i < end; i++) {
      ret.push(i);
    }
    console.log(ret);
    return ret;
  };

  $scope.prevPage = function() {
    if ($scope.currentPage > 0) {
      $scope.currentPage--;
    }
  };

  $scope.nextPage = function() {
    if ($scope.currentPage < $scope.pagedItems.length - 1) {
      $scope.currentPage++;
    }
  };

  $scope.setPage = function() {
    $scope.currentPage = this.n;
  };

  // functions have been describe process the data for display
  $scope.search();



});


app.$inject = ['$scope', '$filter'];

app.directive("customSort", function() {
  return {
    restrict: 'A',
    transclude: true,
    scope: {
      order: '=',
      sort: '='
    },
    template: ' <a ng-click="sort_by(order)" style="color: #555555;">' +
      '    <span ng-transclude></span>' +
      '    <i ng-class="selectedCls(order)"></i>' +
      '</a>',
    link: function(scope) {

        // change sorting order
        scope.sort_by = function(newSortingOrder) {
          var sort = scope.sort;

          if (sort.sortingOrder == newSortingOrder) {
            sort.reverse = !sort.reverse;
          }

          sort.sortingOrder = newSortingOrder;
        };


        scope.selectedCls = function(column) {
          if (column == scope.sort.sortingOrder) {
            return ('icon-chevron-' + ((scope.sort.reverse) ? 'down' : 'up'));
          } else {
            return 'icon-sort'
          }
        };
      } // end link
  }
});
