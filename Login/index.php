<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

</head>

<body>
    <?php
    if(isset($_REQUEST['error']))
    {
  // include(<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.</div>)
        //echo '<p>Usuario o Contraseña Incorrectos</p>';
    }

    ?>
    <form action="validar.php" method="post">
    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Log in</h1>
            <div class="social-login">
                <a href="google/index.php">
                </a>
            </div>
            <br>
            <br><br>
            <br><br>
            <br><br>
            <br>
            <form class="inputs-container">
                <input class="input" name="usuario" type="text" placeholder="Username">
                <br>
                <input class="input" name="contraseña" type="password" placeholder="Password">
                <p>Forgot password? <span class="span">Click here</span></p>
                <button class="btn" type="submit" >login</button>
                <p >Don't have an account? <a href="../Register/index.php" class="span">Sign Up</a></p>
            </form>
        </div>
        <img class="image-container" src="img/img-login.svg" alt="">
    </div>
    </form>
</body>

</html>