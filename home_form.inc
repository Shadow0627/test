		<section id="form"><!--form-->
		<div class="container" id="sprobuj">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>Spróbuj Teraz!</h2>
						<form action="new_user.php" method="POST">
							<input name="email" type="email" required placeholder="Email"/>
							<input type="email" name='email-again'required placeholder="Powtórz Email"/>
							<input type="submit" name='register' class="btn btn-default" value='Zapisz'>
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">LUB</h2>
				</div>
				<div class="col-sm-4">
					
					<div class="login-form"><!--login form-->
						<h2>Zaloguj się</h2>
						<form action="login.php" method="POST">
							<input name="email" type="email" required placeholder="Email Address" />
							<input name="password" type="password" required placeholder="Hasło"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Zapamiętaj mnie
							</span>
							<input type="submit" name='login' class="btn btn-default" value='Zaloguj'>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>