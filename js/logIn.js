$(document).ready(function () {
    $("#btn-form").click(function () {
        var username=$("#in-username").val();
        var password=$("#in-password").val();
        $.ajax({
            type: "POST",
            url: "../scripts/logIn.php",
            data: {"username": username,"password": password},
            success: function(response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if(jsonData['id'].localeCompare("200")==0){
                    sessionStorage.setItem("logged","true");
                    window.location.replace("../index.php");
                }else{
                    console.log("not ok");
                    sessionStorage.setItem("logged","false");
                    $("#err-alert").text(jsonData['message']);
                    $("#err-alert").show();
                }
            },
        });
    })
});
