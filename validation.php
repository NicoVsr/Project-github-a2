<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	$username = htmlspecialchars($_POST["username"]);
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);

	$request = $db->prepare("SELECT id FROM users WHERE username LIKE :username OR email LIKE :email");

	$request->execute(
		array(
			"username" => $username,
			"email" => $email
		)
	);

	$members = $request->fetchAll();

	if (sizeof($members) == 0){

		$request = $db->prepare
		("INSERT INTO users (username, password, email, created_at)
      VALUES (:pseudo, :password, :email, NOW())");
		$request->execute(
			array(
				"pseudo" => $username,
				"password" => $password,
				"email" => $email
			)
		);
		header('Location: index.php');
		exit();


	}
}else{
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}