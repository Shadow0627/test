		<section id="form"><!--form-->
		<div class="container" id="sprobuj">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>Spróbuj Teraz!</h2>
						<form action="new_user.html" method="POST">
							<input name="email" type="email" placeholder="Email"/>
							<input type="email" placeholder="Powtórz Email"/>
							<button type="submit" class="btn btn-default">Zapisz</button>
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">LUB</h2>
				</div>
				<div class="col-sm-4">
					
					<div class="login-form"><!--login form-->
						<h2>Zaloguj się</h2>
						<form action="login.html" method="POST">
							<input name="email" type="email" placeholder="Email Address" />
							<input name="password" type="password" placeholder="Hasło"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Zapamiętaj mnie
							</span>
							<button type="submit" class="btn btn-default">Zaloguj</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>