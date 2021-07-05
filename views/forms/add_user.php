<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/add_user.php" method="POST">
	<div class="row">
		<div class="col-md-8">
		<label> Nome Completo: </label><br>
			<input type="text" name="user_name" placeholder="Digite seu nome" required class="form-control">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="user_email" placeholder="Digite seu email" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Senha: </label><br>
			<input type="password" name="user_password" placeholder="Digite sua senha" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> CPF: </label><br>
			<input type="text" name="user_cpf" placeholder="Digite seu CPF" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Telefone: </label><br>
			<input type="text" name="user_phone" placeholder="Digite sua senha" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Celular: </label><br>
			<input type="text" name="user_cellphone" placeholder="Digite seu telefone" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Nascimento: </label><br>
			<input type="date" name="user_birth" placeholder="Digite sua data de nascimento" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Endereço: </label><br>
			<input type="text" name="user_address" placeholder="Digite seu Cep" required class="form-control">
			<br><br>
		</div>
	

		
		
		<div class="col-md-4">
			<label> Tipo de Usuário </label><br>	
			<select name="profile_id" class="form-control">
				<option disabled selected> -- Perfil --</option>
				<option value="1"> Administrador </option>
				<option value="2">Funcionário </option>
			</select>
		</div>
	
		<input type="hidden" name="action" value="add">
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

