var apply = {
    basic: function() {
        var a = $("#apply").serializeArray();
        $.ajax({
            url: "../server/orderform.php",
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
                if ("success" == d) {
                    window.location="status.html";
                } 
                 else {
                    alert("Unable to order.Try again after some time");
                    
                }
            }
        });
    }
};