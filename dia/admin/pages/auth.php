<link rel="stylesheet" href="/css/auth.css">

<div id="auth">
	<form action="pages/action.php" method="post">
	<input type="hidden" name="action" value="auth">
		<div class="row clearfix">
			<div>
				<label for="login"> Login : </label>
				<input type="text" name="login" id="login">
			</div>
				
			<div>
				<label for="password"> Mot de passe : </label>
				<input type="password" name="password" id="password">
			</div>
		</div>

		<input type="submit" value="Connexion" class="btn">
	</form>
</div>