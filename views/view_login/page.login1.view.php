<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titreLogin ?></title>
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="/https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/assets/assets_login1/style.css">

    <!--<title>Login & Registration Form</title>-->
</head>

<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Connexion</span>

                <form action="/controllers/controller.login1.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Entrer votre email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Entrer votre mot de passe" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="logCheck">
                            <label for="logCheck" class="text">Se souvenir</label>
                        </div>

                        <a href="#" class="text">Mot de passe oublié ?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Connexion" name="submit">
                    </div>
                </form>

                <!-- <div class="login-signup"> 
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>-->
            </div>

            <!-- Registration Form -->
            <!-- 
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div> -->
        </div>
    </div>

    <script src="/assets/assets_login1/script.js"></script>

</body>

</html>