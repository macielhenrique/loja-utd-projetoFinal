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
			$manager = new Manager;
			unset($_POST['action']);
			$manager->insert_common("produto", $_POST, null);
		break;

		case 'edit':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->update_common("produto", $_POST, ['codproduto'=>$_POST['codproduto']],null);
		break;

		case 'delete':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->delete_common("produto",['codproduto'=>$delete],null);
			header("location: $project_index/".$user['profile_page']."?option=manager_produto&success=delete_ok");
		break;

	}
	header("location: $project_index/".$user['profile_page']."?option=manager_produto&success=insert_ok");
	
?> 
