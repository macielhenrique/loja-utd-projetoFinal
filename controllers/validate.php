<?php  
	
	# Incluindo os arquivos necessários
	include_once $GLOBALS['project_path']."/models/Connect.class.php";
	include_once $GLOBALS['project_path']."/models/Manager.class.php";

	function validate_options(){
		if(isset($_GET['edit_produto'])){
			$filter = $_GET['edit_produto'];
			include_once $GLOBALS['project_path']."/views/forms/edit.php";
		}
			if(isset($_GET['edit_user'])){
				$filter = $_GET['edit_user'];
				include_once $GLOBALS['project_path']."/views/forms/edit_user1.php";
			}

		if(isset($_GET['delete_produto'])){
			include_once $GLOBALS['project_path']."/controllers/controllerProduto.php";
		}

		if(!isset($_GET['option'])){
			return false;
		}		

		switch($_GET['option']){

		

			case "update_client":

				$filter['id_user'] = base64_decode($_GET['filter']);
				$user_r = select("tb_users",null,$filter, null);

				$user_r = $user_r[0];

				//$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_user.php";

			break;

			case "add_produto":
				include_once $GLOBALS['project_path']."/views/forms/insert.php";
			break;

			case "manager_produto":
				include_once $GLOBALS['project_path']."/views/forms/produto.php";
			break;

			case "manager_users":
				include_once $GLOBALS['project_path']."/views/forms/manager_users.php";
			break;

		




			case "base":
				# Busca	
				$table_content = select("tb_profiles",null,null,null);
				
				# Titulos
				$table_titles['id_profile'] = "ID";	
				$table_titles['profile_name'] = "NOME DO PERFIL";	
				$table_titles['profile_page'] = "PÁGINA";	
				$table_titles['profile_desc'] = "DESCRIÇÃO";	

				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=#";

				# Filtro
				$filter = "id_profile";
				$table_color = "#834FD0";
				$table_icon = "plus";
				$table_header = " Lista de Usuários <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.html";
			break;


			case "add_user":
				include_once $GLOBALS['project_path']."/views/forms/add_user.php";
			break;

			case "manager_users1":
				# Busca	
				$table_content = select("tb_users",null,null,null);
				
				# Titulos
				$table_titles['id_user'] = "ID";	
				$table_titles['user_name'] = "NOME";	
				$table_titles['user_phone'] = "TELEFONE";	
				$table_titles['user_email'] = "EMAIL";	

				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_user";

				# Filtro
				$filter = "id_user";
				$table_color = "#00853B";
				$table_icon = "plus";
				$table_header = " Lista de Usuários <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.html";
			break;

			case "update_user":

				$filter['id_user'] = base64_decode($_GET['filter']);
				$user_r = select("tb_users",null,$filter, null);

				$user_r = $user_r[0];

				$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_user.php";

			break;


			case "add_client":
				include_once $GLOBALS['project_path']."/views/forms/add_user.php";
			break;

			case "manager_clients":
				# Busca	
				$table_content = select("tb_users",null,array("profile_id"=>3),null);
				
				# Titulos
				$table_titles['id_user'] = "ID";	
				$table_titles['user_name'] = "NOME";	
				$table_titles['user_phone'] = "TELEFONE";	
				$table_titles['user_email'] = "EMAIL";	
				$table_titles['user_limit'] = "LIMITE";	

				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_user";

				# Filtro
				$filter = "id_user";
				$table_color = "#00853B";
				$table_icon = "plus";
				$table_header = " Lista de Clientes <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.html";
			break;

			case "update_client":

				$filter['id_user'] = base64_decode($_GET['filter']);
				$user_r = select("tb_users",null,$filter, null);

				$user_r = $user_r[0];

				//$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_user.html";

			break;

			default:
				echo "<h2> ERRO 404: NOT FOUND !</h2>";
			break;

		}

	}
?>