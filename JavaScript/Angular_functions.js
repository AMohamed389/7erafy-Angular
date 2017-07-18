// this file contains all funcitons could be used by angular controllers 

// Register Cutomer AJAX Req
var ajax_regCustomer = function(fname,lastname,mobile,email,password,birth,gender,zone,city) {
            //TODO :1.add JSON response incase of already registered --maged

            $.ajax({
              url: "./webservices.php",
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
       console.log(data);
    },
      error: function(error){
        console.log(error);
      }
          });


  }
