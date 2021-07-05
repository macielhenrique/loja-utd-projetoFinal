<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_user.php" method="POST">
	<input type="hidden" name="id_user" value="<?=$user_r['id_user'];?>">

	<div class="row">
		<div class="col-md-8">
		<label> Nome Completo: </label><br>
			<input type="text" name="user_name" placeholder="Digite seu nome" required class="form-control" value="<?=$user_r['user_name'];?>">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="user_email" placeholder="Digite seu email" required class="form-control" value="<?=$user_r['user_email'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Senha: </label><br>
			<input type="password" name="user_password" placeholder="Modifique sua senha (caso queira)" class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> CPF: </label><br>
			<input type="text" name="user_cpf" placeholder="Digite seu CPF" required class="form-control" value="<?=$user_r['user_cpf'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Telefone: </label><br>
			<input type="text" name="user_phone" placeholder="Digite sua senha" required class="form-control" value="<?=$user_r['user_phone'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Celular: </label><br>
			<input type="text" name="user_cellphone" placeholder="Digite seu CPF" required class="form-control" value="<?=$user_r['user_cellphone'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Nascimento: </label><br>
			<input type="date" name="user_birth" placeholder="Digite seu CPF" required class="form-control" value="<?=$user_r['user_birth'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Endereço: </label><br>
			<input type="text" name="user_address" placeholder="Digite seu CPF" required class="form-control" value="<?=$user_r['user_address'];?>">
			<br><br>
		</div>
		<!-- <div class="col-md-4">
			<label> Limite de Crédito: </label><br>
			<input type="text" name="user_limit" placeholder="Digite seu CPF" required class="form-control">
			<br><br>
		</div> -->

		<?php if(isset($_GET['option']) && $_GET['option']=="add_user"){ ?>
		<div class="col-md-4">
			<label> Tipo de Usuário </label><br>	
			<select name="profile_id" class="form-control">
				<option value="<?=$user_r['profile_id'];?>" selected> 
					ATUAL -- <?=$profile_u[0]['profile_name'];?>
				</option>
				<option value="1"> Administrador </option>
				<option value="2">Funcionário </option>
			</select>
		</div>
		<?php }else{ ?>
			<div class="col-md-4">
				<label> Limite de Crédito: </label><br>
				<input type="number" name="user_limit" placeholder="" required class="form-control" value="<?=$user_r['user_limit'];?>">
				<br><br>
			</div>
			<input type="hidden" name="profile_id" value="3">
		<?php } ?>

		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Finalizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
	</form>