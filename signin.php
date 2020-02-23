<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>TaskHash</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="function/sign_in.php" method="post">
        <img class="mb-4" src="img/font.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <input type="text" name="user_name" class="form-control" placeholder="User Name" required autofocus>

        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <?php
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">';
            if ($_GET['error'] == 'empty') {
                echo $_GET['field'] . " is empty";
            } else if ($_GET['error'] == 'login') {

                echo 'Invalid Username and Password';
            }
            echo ' </div>';
        }
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted"><a href="signup.php">Sign up</a> if you are not already registered</p>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</body>

</html>