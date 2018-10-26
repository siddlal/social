

$(document).ready(function (){
    $('#submit').click(function (){
       var data = $('#register_form').serialize();
       var url = "/registration/register_submit";
       $.ajax(url, {
           data: data,
           success: registration_success,
           type: "POST"
           
       });
       return false;
    });
    var registration_success = function (data) {
         alert('SUCCESS!!');
         window.location= "/welcome/home";
    };

});