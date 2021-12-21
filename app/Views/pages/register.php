<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/register_style.css">
</head>

<body>

    <div class="bg">
        <div id="login-box">
            <div class="left">
                <h1>Sign up</h1>
                <form action="/Account/create_account" method="POST">
                    <?= csrf_field() ?>
                    <input type="text" name="name" placeholder="Name" required autofocus value="<?= old('name'); ?>" />
                    <input type="text" name="username" placeholder="Username" required value="<?= old('username'); ?>" />
                    <?= $validation->getError('username'); ?>
                    <input type="email" name="email" placeholder="E-mail" required value="<?= old('email'); ?>" />
                    <?= $validation->getError('email'); ?>
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="password" name="password2" placeholder="Retype password" required />
                    <?= $validation->getError('password'); ?>
                    <input type="submit" name="reg_user" value="Sign me up" />
                    <a href="/Account/index" class="forgot ">Already have an account?</a>

                </form>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js "></script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js "></script>
</body>

</html>

</html>