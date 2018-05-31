<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-login.css">
</head>
<body>
	<header>
		<h1>LOGIN HERE</h1>
        <p></p>
		<p></p>
    </header>
	<div class="main-content">
		<form class="form-login" method="post" action="">
			<div class="form-log-in-with-email">
				<div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required="required"/>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="pass" required="required"/>
                        </label>
                    </div>

                    <div class="form-row">
                        <button name="login" onclick="myFunction()">Log in</button>
						<!-- <script>
							function myFunction() {
								alert("You are logged in!!");
							}
						</script> -->
                    </div>

                </div>
				<a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="register-form.php" class="form-create-an-account">Create an account &rarr;</a>
			</div>
			<div class="form-sign-in-with-social">
				<div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>
				<a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>
			</div>
		</form>
		<?php include("login.php");?>
	</div>
</body>
</html>