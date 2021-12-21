<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/login_style.css">
</head>

<body>
    <div class="login-dark">
        <form action="/Account/login_auth" method="post">
            <?= csrf_field() ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
            </div>
            <div class="form-group "><input class="form-control " type="password" name="password" placeholder="Password" required>
            </div>
            <?php if (session()->getFlashdata('msg')) : ?>
                <?= session()->getFlashdata('msg'); ?>
            <?php endif; ?>
            <div class="form-group "><button class="btn btn-primary btn-block " type="submit ">Log In</button></div>
            <a href="/Account/register" class="forgot ">Don't have an account?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js "></script>
</body>

</html>