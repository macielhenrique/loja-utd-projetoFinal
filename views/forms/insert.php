

<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>

		<div class="col-md-8">
			
			<h3> Formulario de cadastro </h3>


			<form action= "controllers/controllerProduto.php" method="POST">
				<label> Produto </label>
				<input type="text" name="descricao" class="form-control"><br><br>


				<label> Peso </label>
				<input type="text" name="peso" class="form-control"><br><br>


				<label> Situação </label>
				<select name="controlado" class="form-control">
					  <option value="1">Controlado</option>
					  <option value="0">Não controlado</option>
				</select>

				 <br>
				  <br>
				


				<label> Quantidade </label>
				<input type="text" name="qtdemin" class="form-control"><br><br>

				<input type="hidden" name="action" value="add">

				<button class="btn btn-primary" type="submit"> Enviar</button>
			</form>
		</div>

	</div>

</div>