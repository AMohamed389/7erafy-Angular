app.controller("registerController", function ($scope, service_validateTechEmail, service_validateCustomerEmail, service_bindJob, service_bindyear, service_bindZone, service_bindCity, service_bindMonth, service_bindDay) {
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
            $scope.state = response.data;
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
            $scope.state = response.data;
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

});

// end of registeration 

// 


// search controller
// this data will be replaced with JSON Object after API implementation 

app.controller("searchController", function ($scope, $http, $filter, service_searchForTech) {


    service_searchForTech.findTechnician().then(function (response) {

        $scope.items = response.data;
        
        //this to control the search pagination
        // as it drops negative page numbers
        // if the returned values -5 items.
        if (response.data.length <= 3) {
            $scope.gap = 1;
        }
        else {
            $scope.gap = 5;
        }
        // 


        $scope.filteredItems = [];
        $scope.groupedItems = [];
        $scope.itemsPerPage = 5;
        $scope.pagedItems = [];
        $scope.currentPage = 0;
        // 





        // init
        $scope.sort = {
            sortingOrder: 'id',
            reverse: false
        };
        // 



        var searchMatch = function (haystack, needle) {
            if (!needle) {
                return true;
            }
            return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
        };

        // init the filtered items
        $scope.search = function () {
            $scope.filteredItems = $filter('filter')($scope.items, function (item) {
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
        $scope.groupToPages = function () {
            $scope.pagedItems = [];

            for (var i = 0; i < $scope.filteredItems.length; i++) {
                if (i % $scope.itemsPerPage === 0) {
                    $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [$scope.filteredItems[i]];
                } else {
                    $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push($scope.filteredItems[i]);
                }
            }
        };

        $scope.range = function (size, start, end) {
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

        $scope.prevPage = function () {
            if ($scope.currentPage > 0) {
                $scope.currentPage--;
            }
        };

        $scope.nextPage = function () {
            if ($scope.currentPage < $scope.pagedItems.length - 1) {
                $scope.currentPage++;
            }
        };

        $scope.setPage = function () {
            $scope.currentPage = this.n;
        };

        // functions have been describe process the data for display
        $scope.search();



    });


    app.$inject = ['$scope', '$filter'];

    app.directive("customSort", function () {
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
            link: function (scope) {

                // change sorting order
                scope.sort_by = function (newSortingOrder) {
                    var sort = scope.sort;

                    if (sort.sortingOrder == newSortingOrder) {
                        sort.reverse = !sort.reverse;
                    }

                    sort.sortingOrder = newSortingOrder;
                };


                scope.selectedCls = function (column) {
                    if (column == scope.sort.sortingOrder) {
                        return ('icon-chevron-' + ((scope.sort.reverse) ? 'down' : 'up'));
                    } else {
                        return 'icon-sort'
                    }
                };
            } // end link
        }
    });
});

