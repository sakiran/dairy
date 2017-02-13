$(document)
    .ready(function () {



        $.ajax({
            url: "../server/userinfo.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
                var e = JSON.parse(a);
                document.getElementById("username")
                    .innerHTML = e.username;




            }

        });


        $.ajax({
            url: "../server/userordermanagementstatus.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
                var json = jQuery.parseJSON(a);
                var serialnumber;
                serialnumber = 0;


                for (var i in json) {


                    serialnumber = serialnumber + 1;

                    if (json[i].milkneeded == 'on') {

                        milkneeded = 'yes';
                        milktype = json[i].milktype;
                        milkpacket = json[i].milkpacket;
                        milkquantity = json[i].milkquantity;
                        milkdetails = milktype + '  Milk  ' + milkpacket + ' Quantity ' + milkquantity;
                                        
                                    }
                    else

                        {

                        milkneeded = 'no';
                       // milkdetails = 'no';
                                        
                                    }


                    //milkneeded":"on","milktype":"Buffalo","milkpacket":"1","milkquantity":"1"




                    $("#statustable > tbody")
                        .append("<tr><td>" + serialnumber + "</td><td>" + json[i].fromdate + "</td><td>" + json[i].todate + "</td><td>" + json[i].remarks + "</td><td>" + milkneeded + "</td></tr>");//<td>" + milkdetails + "</td><td>" +json[i].orderstatus + "</td></tr>");



                }




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




    });
