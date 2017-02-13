var Login = {
    basic: function() {
        var a = $("#login-form").serializeArray();
        $.ajax({
            url: "../server/login.php",
            type: "POST",
            data: a,
            dataType: "html",
            beforeSend: function() {},
            complete: function() {},
            error: function(a, b, c) {
                console.log(c);
            },
            success: function(a, b, c) {
                var d = a.trim();
                if ("customer" == d) {
                    window.location="home.html";
                } else if  ("admin" == d) {
                    window.location="homeadmin.html";
                } else {
                    window.location="index.html";
                }
            }
        });
    }
};