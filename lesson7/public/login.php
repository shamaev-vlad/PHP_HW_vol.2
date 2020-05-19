<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<title>Авторизация</title>
	</head>
	<body>
		<a class="on_main center" href="index.php">На главную</a>
		<main>
			<div class="login_block">
				<img class="login_img" src="images/unknown.png" alt="Scanfcode">
				<h1>Введите свои данные</h1>
				<form method="post">
					<div class="form_group">
						<div class="input_group">
							<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
							<input type="text" name="login" class="form-control" placeholder="Ваш логин">
						</div>
					</div>

					<div class="form_group">
						<div class="input_group">
							<span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
							<input type="password" name="pass" class="form-control" placeholder="Ваш пароль">
						</div>
					</div>

					<button class="btn btn-primary btn-block" type="submit">ВОЙТИ НА САЙТ</button>
				</form>
			</div>
		<div class="login-links">
			<p class="text-center">Еще нет аккаунта? <a class="txt-brand" href="registration.php"><font color=#29aafe>Регистрируйся</font></a></p>
		</div>
		</main>
	</body>
</html>
