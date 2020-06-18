<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<div class="col-sm-4">
					
					<div class="login-form"><!--login form-->
						<h2>Zaloguj się</h2>
						<form action="" method="POST">
							<input name="email" type="email" required placeholder="Email Address" />
							<input name="password" type="password" required placeholder="Hasło"/>
							<input type="submit" name='login' class="btn btn-default" value='Zaloguj'>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>
</body>
</html>

<?php
if(isset($_POST['login']))
{
$user->loginadmin($_POST['email'], $_POST['password']);
}
?>