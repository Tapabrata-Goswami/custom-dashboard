$(document).ready(function(){
    $("#login-btn").on("click",function(event){
        event.preventDefault();
        $(this).children("i").removeClass("login-button-animation");
        let userEmail = $("#user-email").val();
        let userPassword = $("#user-password").val();
        if(userEmail == ""){
            $("#alert").fadeIn().text("Please, fillup all fields.");
            setTimeout(function(){
                $("#alert").fadeOut();
            },2000)
        }else{
            $.ajax({
                url :"main.php",
                type :"POST",
                data : {
                    UserEmail : userEmail,
                    UserPassword : userPassword 
                },
                success : function(data){
                    if(data == true){
                        window.location.assign("/dashboard")
                    }else{
                        $("#alert").fadeIn().text("Sorry! Wrong crendentials.");
                        setTimeout(function(){
                            $("#alert").fadeOut();
                        },2000)
                    }
                }
            })
        }

    });
});