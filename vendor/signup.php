<?php
	session_start(); //для вывод сообщение о неправильном пароле, на странице ввода пароля 
	require_once 'connect.php';
	

	//$connect;
	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	

	if ($password === $password_confirm) {

		$path = 'uploads/' . time() . $_FILES['avatar']['name'];
		if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
			$_SESSION['message'] = 'Ошибка при загрузке изображения';
			header('Location: ../registr.php');
		}

		$password = md5($password);
		$password_confirm = md5($password_confirm);
		 //md5 зашифровывает запись в бд, т.е. наш пароль

		mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `password_confirm`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$password_confirm', '$path')");

		$_SESSION['message'] = 'Регистрация прошла успешно';
		header('Location: ../index.php');

	} else {
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../registr.php');
	}


?>