<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>admin page</title>
</head>

<body>

    <?php
    include "home_btn.php";
    ?>

    <!-- Use php and create this section as a template so the code will not be repeated -->
    <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>Welcome <span><small>dummy text</small></span></h1>
            <p>This is an admin page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>


</body>

</html>