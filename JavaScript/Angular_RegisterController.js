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

    $scope.validateCustomerMail = function () {

        $scope.customerData = service_validateCustomerEmail.validateCustomerEmail($scope.customerEmail)
        .then(function(response){
// check response data
return response.data[0];
console.log(response.data[0]);
        });

        
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
