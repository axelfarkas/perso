<?php // 26 md5 - key: diaTroyes
session_start();

$user = !empty($_SESSION['user']) ? $_SESSION['user'] : null;

$passwords = json_decode(file_get_contents('.passwords.json'));

$layout = inc('../layout.php');

if(!empty($user)){

	$passwords = json_decode(file_get_contents('.passwords.json'));

	if(isset($passwords->{$_SESSION['user']->login}) && $passwords->{$_SESSION['user']->login} === $_SESSION['user']->password){
		$content = inc('pages/admin.php');
	}else{
		unset($_SESSION['user']);
		$content = inc('pages/auth.php'); 
	}

}else{
	$content = inc('pages/auth.php'); 
}


echo str_replace('{{content}}', $content, $layout);

function inc($path){
	ob_start();
	include $path;
	return ob_get_clean();
}
?>