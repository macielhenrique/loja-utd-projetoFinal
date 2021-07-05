<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/Connect.class.php";
	include_once $project_path."/models/Manager.class.php";
	
	# Recebendo os dados do Formulário
	$email = $_POST['email'];
	$password = $_POST['password'];

	# Realizando a busca no Banco de Dados
	$filter['user_email'] = $email;
    $manager=new Manager ;
	$log = $manager->select_common("tb_users", NULL, $filter, " LIMIT 1");
	
	# Testando o login
	if(!$log){
		header("location: $project_index?error=user_not_found");
	}elseif(!password_verify($password, $log[0]['user_password'])){
		header("location: $project_index?error=password_incorrect");
	}else{

		# Como está tudo ok, então faça...
		session_start();

        $profile1= new Manager ;

		$profile = $profile1 -> select_common ("tb_profiles", NULL, array("id_profile"=>$log[0]['profile_id']), NULL);

		# Unificar os array de dados de perfil com o de user
		$log = array_merge($log[0], $profile[0]);

		$_SESSION[md5('user_data')] = $log;

		header("location: $project_index");

	}


?>
