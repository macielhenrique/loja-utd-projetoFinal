<?php  

	# Incluindo os arquivos necessários
	include_once 'models/config.php';
	include_once 'controllers/validate.php';
	//include_once 'models/helpers.php';

	# Teste de sessão
	session_start();
	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php"){
		header("location: $project_index?error=access_denied");
	}

	$page_title = "Admin ".$user['user_name'];

	function page_content(){
		validate_options();
	}

	# Incluindo o template
	include_once 'views/template.php';

?>