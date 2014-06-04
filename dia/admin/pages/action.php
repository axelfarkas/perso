<?php 
session_start();

if(!empty($_POST['action']))
	$action = $_POST['action'];
else
	die('ERROR: No action');

if($action == 'auth'){
	$login = $_POST['login'];
	$password = $_POST['password'];

	if(empty($login) || empty($password))
		die('ERROR: missing login or password');

	$passwords = json_decode(file_get_contents('../.passwords.json'));

	$login = encrypt($login);
	$password = encrypt($password);

	if(isset($passwords->{$login}) && $passwords->{$login} === $password){
		$_SESSION['user'] = (object)array(
			'login' => $login,
			'password' => $password
		);
		header('Location:/admin');
	}else{
		die('ERROR: Aucun compte no correspond aux informations renseignées.');
	}

}

function encrypt($str){
	$key = 'diaTroyes';
	for($i = 0; $i < 26; $i++)
		$str = md5($str.$key);
	return $str;
}


?>