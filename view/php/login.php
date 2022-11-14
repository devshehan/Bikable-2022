<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../../controller/login.js"></script>
    <title>Login</title>
</head>
<body>
    <section class="loginView">
        
        <form action="#" method="post" id="loginInterface" class="loginInterface">
            <div class="loginView__dataSide">
                <!-- Header and subtitle -->
                <div class="loginView__title">Welcome to Bikable</div>
                <div class="loginView__subtitle">please login to use the platform</div>

                <!-- email and password form -->
                <div class="loginView__Detail">
                    <div class="loginDetail--email">
                        <input type="email" placeholder="Email" class="loginDetailbox" name="userEmail" id="loginEmailBox">
                    </div>
                    <div class="loginDetail--password">
                        <input type="password" placeholder="Password" class="loginDetailbox" name="userPassword" id="passwordEmailbox">
                    </div>   
                </div>

                <!-- submit button , link to sign up page and reset process -->
                <div class="submitSignupForget">
                    <div class="activeArea">
                        <div class="submitbutton">
                            <input type="button" value="LOGIN" class="btn"  onclick="getDataFromLogin()" >                  
                        </div>
                        <div class="signupText">
                            Don't have an account? <a href="../php/signup.php" style="color: blue;">Sign up</a> 
                        </div>
                    </div>
                    <div class="forgetText">
                        Can't remember password? <a href="" style="color: black;">Reset password</a> 
                    </div>
                </div>
            </div>
        </form>
        
        <!-- logo image -->
        <div class="loginView__logoSide">
            <img src="../images/logo/IMG_1707.PNG" alt="BikableLogo" class="imglogo">
        </div>
    </section>
</body>
</html>