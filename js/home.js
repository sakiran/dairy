$(document).ready(function() {

    
    $.ajax({
        url: "../server/userinfo.php",
        type: "POST",

        beforeSend: function() {},
        complete: function() {},
        error: function(a, b, c) {
            console.log(c);
        },
        success: function(a, b, d) {
            var e = JSON.parse(a);
            document.getElementById("username").innerHTML = e.username;
            document.getElementById("userid").innerHTML = e.userid;
            document.getElementById("dateofjoining").innerHTML = e.dateofjoining;
            document.getElementById("homeaddress").innerHTML = e.homeaddress;
            document.getElementById("email").innerHTML = e.email; 
            document.getElementById("phonenumber").innerHTML = e.phonenumber;




        }

    });


    $(".glyphicon-log-out").on('click', function() {
    
        $.ajax({
            url: "../server/logout.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
            window.location="index.html";    
                              




            }

        });
    });


    $(".log-out").on('click', function() {
    
        $.ajax({
            url: "../server/logout.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
            window.location="index.html";    
                              




            }

        });
    });


});