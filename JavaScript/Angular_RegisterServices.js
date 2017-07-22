// Angular service to init drop down objects -- years
app.service('service_bindyear', function () {
    this.getYear = function () {
        var YearList = [];
        int: 1940;
        for (var Y = 1940; Y <= 2010; Y++) {
            YearList.push(Y);

        }
        return YearList;
    }
});
// 

// Angular service to init drop down objects -- month
app.service('service_bindMonth', function () {
    this.getMonth = function () {
        var MonthList = [
            { "monthName": "يناير", "monthOrder": "01" },
            { "monthName": "فبراير", "monthOrder": "02" },
            { "monthName": "مارس", "monthOrder": "03" },
            { "monthName": "أبريل", "monthOrder": "04" },
            { "monthName": "مايو", "monthOrder": "05" },
            { "monthName": "يونيو", "monthOrder": "06" },
            { "monthName": "يوليو", "monthOrder": "07" },
            { "monthName": "اغسطس", "monthOrder": "08" },
            { "monthName": "سبتمبر", "monthOrder": "09" },
            { "monthName": "اكتوبر", "monthOrder": "10" },
            { "monthName": "نوفمبر", "monthOrder": "11" },
            { "monthName": "ديسمبر", "monthOrder": "12" }
        ];

        return MonthList;
    }
});
// 

// Angular service to init drop down objects -- day
app.service('service_bindDay', function () {
    this.getDay = function () {
        var DayList = [];
        int: 1;
        for (var Y = 1; Y <= 31; Y++) {
            DayList.push(Y);
        }

        return DayList;
    }
});
// 

// Service to bind Cities
app.factory('service_bindCity', function ($http) {
    return {
        getCity: function () {
            return $http.get("./api.php/bindCity/").then(function (response) {
                return response;
            })
        }
    }
});
// 
// Service to bind zones
app.factory('service_bindZone', function ($http) {
    return {
        getZone: function () {
            return $http.get("./api.php/bindZone/").then(function (response) {
                return response;
            })
        }
    }
});
//
// Service to bind tech jobs
app.factory('service_bindJob', function ($http) {
    return {
        getJob: function () {
            return $http.get("./api.php/bindProfessions/").then(function (response) {
                return response;
            })
        }
    }
});
//
// A Service to validate customer's email
   app.factory("service_validateCustomerEmail", function ($http) {
            return {
                validateCustomermail: function (email) {
                     return $http.get('./webservices.php/get?methodName=validateCstEmail&cstEmail='+email)
                        .then(function (response) {
                            return response;
                        })
                }
            }
        });
// 
// A service to validate technician mail 
app.factory("service_validateTechEmail",function($http){
return {
validateTechmail : function(email){
return $http.get('./webservices.php/get?methodName=validateTechEmail&techEmail='+email)
.then(function(response){
return response;
})
}    
}
});
// 
// search service
app.factory("service_searchForTech",function($http){
return {
findTechnician : function(){
return $http.get('./webservices.php/get?methodName=search&cityId=3&zoneId=111&serviceId=1')
.then(function(response){
return response;
console.log("test");


})
}    
}
});