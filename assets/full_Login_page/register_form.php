<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AMLA Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="form_css/form.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../../css/animate.css" />
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../../css/icomoon.css" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../../css/bootstrap.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../css/magnific-popup.css" />

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css" />

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../../css/flexslider.css" />

    <!-- Pricing -->
    <link rel="stylesheet" href="../../css/pricing.css" />

    <!-- Theme style  -->
    <link rel="stylesheet" href="../../css/style.css" />

    <!-- Modernizr JS -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include "../php/header.php"; ?>
    <div class="form_box">

        <form action="process_sign_up.php" method="post" id="register">
            <div class="form-content">

                <h4>American Montessori Leadership Academy</h4>
                <h3>register now</h3>
                <div class="name">
                    <input type="text" name="firstname" required autofocus id="firstname" placeholder="enter firstname">
                    <input type="text" name="lastname" required id="lastname" placeholder="enter lastname">
                </div>

                <input type="email" name="email" id="email" required placeholder="enter email">

                <input type="password" name="password" id="password" required placeholder="enter password">
                <input type="password" name="cpassword" id="cpassword" required placeholder="confirm password">

                <select name="user_type" id="user_type">
                    <option value="user">Teacher</option>
                    <option value="admin">Student</option>
                </select>

                <div class="gender_radio" id="gender_radio">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">female</label><br>
                </div>

                <input type="submit" name="submit" class="form_btn" value="register now">
                <p>already have an account? <a href="login_form.php">login now</a></p>

            </div>

        </form>

    </div>

</body>

</html>