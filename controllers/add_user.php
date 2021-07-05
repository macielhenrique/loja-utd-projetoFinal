<?php 


include_once dirname(__DIR__)."/models/config.php";
include_once $project_path."/models/Connect.class.php";
include_once $project_path."/models/Manager.class.php";
session_start();
if(isset($_SESSION[md5("user_data")])){ 
	$user=$_SESSION[md5("user_data")];

}
	 //Se for delete
	 if(isset($_POST['filter'])) {

		$delete=$_POST['filter'];
		$_POST['action'] = "delete";
	}



	switch($_POST['action']){

		case 'add':
			# Recebendo os dados do formulário
        	$data = $_POST;

	        # Criptografando a SENHA
	        $data['user_password'] = password_hash($data['user_password'], PASSWORD_DEFAULT);

			$manager = new Manager;
			unset($_POST['action']);
			unset($data['action']);
			$manager->insert_common("tb_users", $data, null);
		break;

		case 'edit':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->update_common("tb_users", $_POST, ['id_user'=>$_POST['id_user']],null);
		break;

		case 'delete':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->delete_common("tb_users",['id_user'=>$delete],null);
		break;

	}

	header("location: $project_index/".$user['profile_page']."?option=manager_users&success=insert_ok");
?>