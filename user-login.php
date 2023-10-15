<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ===== FontAwsome ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===== FontAwsome ===== -->
    <!-- ===== Fontfamily ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ===== Fontfamily ===== -->
    <!-- ===== Stylesheet ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ===== Stylesheet ====== -->
</head>

<body>
    <section>
    <div id="alert" class="alert alert-hide">Sorry! Wrong crendentials.</div>
    <div id="success" class="success success-hide">OTP Send successfully.</div>
        <div class="container">
            <div class="form-two-container">
                <div class="form-first-container">
                    <img class="login-page-image" src="./assets/images/login.png" alt="Login Image">
                </div>
                <div class="form-second-container">
                    <h4 class="login-form-heading">Login</h4>
                    <hr>
                    <form id="user-form">
                        <div class="form-container">
                            <input class="form-input" type="email" placeholder="Email" id="user-email" require>
                        </div>
                        <div class="form-container" id="password-input-hide"><input class="form-input" type="password" placeholder="Password" id="user-password"></div>
                        <div class="form-container user-otp" id="otp-input-hide"><input class="form-input" type="number" placeholder="6 digit otp" id="user-otp"></div>
                        <div class="form-container"><button class="login-btn" id="login-btn">Login To Dashboard  <i class="loading-icon fa fa-spinner fa-spin login-button-animation" ></i> </button></div>
                    </form>
                    <div class="user-option">
                        <!-- This Icon no need to Show  -->
                        Login through <a href="#" id="through-otp">OTP <i class="fa-regular fa-paper-plane" style="color: #f35933;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>