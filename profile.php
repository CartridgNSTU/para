<?php
	require_once 'user.php';
	session_start();
	header('Content-type: text/html; charset=utf-8');
	if (!isset($_SESSION['user_login'])) {
		header('Location: login.php');
	}

	$user = new User();

	if (!empty($_POST)){
		$user->load_from_form();
		$user->save_to_session();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Профиль</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="content">
		<form action="" method="post">
			<h3>Профиль</h3>
			<input type="text" name="pername" value='<?php if(isset($_SESSION['pername'])) echo $_SESSION['pername'] ?>'  placeholder="Имя"><br>	
			<input type="text" name="surname" value='<?php if(isset($_SESSION['surname'])) echo $_SESSION['surname'] ?>' placeholder="Фамилия"><br>
			<input type="text" name="old" value='<?php if(isset($_SESSION['old'])) echo $_SESSION['old'] ?>' placeholder="Возраст"><br>
			<input type="submit" value="Сохранить" name="" >
		</form>
	</div>
</body>
</html>