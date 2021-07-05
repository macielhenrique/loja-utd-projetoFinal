<?php
#incluinfo os dados necessarios
	

	# buscando os dados la na tabela
	$manager = new Manager;

	$dados = $manager->select_common("tb_users",null, ['id_user'=>$_GET['edit_user']], " ORDER BY id_user DESC");	
?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>

		<div class="col-md-8">
			
			<h3> Formulario de Edição </h3>


			<form action="./controllers/add_user.php" method="POST">
				<label> Nome Completo: </label><br>
				<input type="text" name="user_name" value="<?=$dados[0]['user_name'];?>" class="form-control"><br><br>


				<label> Email: </label><br>
				<input type="email" name="user_email" value="<?=$dados[0]['user_email'];?>" class="form-control"><br><br>

				<label> Senha: </label><br>
		        <input type="password" name="user_password" value="<?=$dados[0]['user_password'];?>" class="form-control"><br><br>

				<label> CPF: </label><br>
			    <input type="text" name="user_cpf" value="<?=$dados[0]['user_cpf'];?>" class="form-control"><br><br>

				<label> Telefone: </label><br>
			    <input type="text" name="user_phone" value="<?=$dados[0]['user_phone'];?>" class="form-control"><br><br>

				<label> Celular: </label><br>
			<input type="text" name="user_cellphone" value="<?=$dados[0]['user_cellphone'];?>" class="form-control"><br><br>

			<label> Nascimento: </label><br>
			<input type="date" name="user_birth" value="<?=$dados[0]['user_birth'];?>" class="form-control"><br><br>

			<label> Endereço: </label><br>
			<input type="text" name="user_address" value="<?=$dados[0]['user_address'];?>" class="form-control"><br><br>


				<label> Tipo de Usuario </label>
				<select name="profile_id" class="form-control" value="<?php switch ($d['profile_id']) {
								case "1":
									echo "<td>Admnistrador</td>";
									break;
								case "2":
									echo "<td>Funcionario</td>";
									break;
							};?>">
					<option value="1">Administrador</option>
					<option value="2">Funcionario</option>
				</select><br><br>
					</option>
					<option value="1"> Administrador </option>
					<option value="2"> Funcionario </option>
				</select><br><br>

				

				<input type="hidden" name="action" value="edit">
				<input type="hidden" name="id_user" value="<?=$dados[0]['id_user'];?>">

				<button class="btn btn-primary" type="submit"> Enviar</button>
			</form>
		</div>

	</div>

</div>