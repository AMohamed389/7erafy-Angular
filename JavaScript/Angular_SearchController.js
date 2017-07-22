
// search controller
// this data will be replaced with JSON Object after API implementation 

app.controller("searchController", function ($scope, $http, $filter, service_searchForTech, service_bindJob, service_bindyear, service_bindZone, service_bindCity, service_bindMonth, service_bindDay) {


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

    // search function based on ajax request 
 
    $scope.search = function () {

        
        // get the selected var and pass selection's id.
        var c = $scope.selectedCity.city_id;
        var z = $scope.selectedZone.zone_id;
        var s = $scope.selectedJob.job_id;

        // 
        //   get data through service with $http
        service_searchForTech.findTechnician(c, z, s).then(function (response) {
            //  assign the returned response to $scope var 
            $scope.items = response.data;
            // check data
            console.log($scope.items);
            // 
            // show pagination  (set : ng-show ) 
            $scope.showPagination = "true";
            // arrange search function and results pagination.

            if (response.data.length <= 4) {
                $scope.gap = 1;
                $scope.itemsPerPage = response.data.length;
            }
            else {
                $scope.gap = 5;
                response.data.length = 5;
            }
            // 


            $scope.filteredItems = [];
            $scope.groupedItems = [];
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


                if (size < end) {
                    end = size;
                    start = size - $scope.gap;
                }
                for (var i = start; i < end; i++) {
                    ret.push(i);
                }

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
    };

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
// end of controller.



