<?php
	session_start();
	if ($_GET['act'] === 'logout') {
		unset($_SESSION['user_login']);
	}
	if (!empty($_POST['pername'])&& !empty($_POST['surname'])){
		$pername = $_POST['pername'];
		$surname = $_POST['surname'];
		$year = $_POST['old'];

		$_SESSION['user_pername'] = $_POST['pername'];
		$_SESSION['user_surname'] = $_POST['surname'];
		$_SESSION['user_old'] = $_POST['old'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="content">
		<form action="" method="post">
			<h3>Профиль</h3>
			<input type="text" name="pername" value=' <?php if(isset($_SESSION['user_pername'])) echo $_SESSION['user_pername'] ?>'  placeholder="Имя"><br>	
			<input type="text" name="surname" value=' <?php if(isset($_SESSION['user_surname'])) echo $_SESSION['user_surname'] ?>' placeholder="Фамилия"><br>
			<input type="text" name="old" value=' <?php if(isset($_SESSION['user_old'])) echo $_SESSION['user_old'] ?>' placeholder="Возраст"><br>
			<input type="submit" value="Сохранить" name="" >
		</form>
	</div>
</body>
</html>