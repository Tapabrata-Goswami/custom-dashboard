$(document).ready(function(){
    $("#login-btn").on("click",function(event){
        event.preventDefault();

        /* // Animation on buttron click start ->

            $(this).children("i").removeClass("login-button-animation");

          // Animation on buttron click end ->*/
        
        let userEmail = $("#user-email").val();
        let userPassword = $("#user-password").val();
        if(userEmail == "" || userPassword == ""){
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
                        $("#login-btn").html("Redirecting <i class='loading-icon fa fa-spinner fa-spin' ></i> ");
                        setTimeout(function(){

                            window.location.assign("/dashboard");
                        },3000);
                       
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