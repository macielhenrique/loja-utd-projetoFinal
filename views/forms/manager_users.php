<?php  
	# buscando os dados la na tabela
	$manager = new Manager;

	$dados = $manager->select_common("tb_users",null, null, " ORDER BY id_user DESC");	
?>


<script type="text/javascript">
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});

	//função para guardar o id no filtro
	function delete_reg(filter){
		$('#value').val(filter);
	}
</script>


<!-- modal para excluir -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir????</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Esta operação não pode ser desfeita. Tem Certeza?</h4>
        <form action="controllers/add_user.php" method="POST">
      			<input type="hidden" name="filter" id="value">
      			<button type="" class="btn btn-danger">
      				<span class="glyphicon glyphicon-ok-sign"></span>
      				Sim, Excluir.	
      			</button>

      			<button type="button" class="btn btn-default" data-dismiss="modal" aria-lavel="Close">
      				<span class="glyphicon glyphicon-remove-sign"></span>
      				Não, Cancelar.
      			</button>

      	</form>
      </div>      
    </div>
  </div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>

		<div class="col-md-10">
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>Código</th> 
					<th>Nome</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>Endereço</th>
					<th>Perfil</th>
					<th>Ações</th>
				</tr>
				</thead>

				<tbody>
					<?php foreach($dados as $d): ?>
						<tr>
							<td><?=$d['id_user'];?></td>
							<td><?=$d['user_name'];?></td>
							<td><?=$d['user_phone'];?></td>
							<td><?=$d['user_cellphone'];?></td>
                            <td><?=$d['user_address'];?></td>
							<?php if($d['profile_id'] == 1){
								echo "<td>admin</td>";
								}else{
								echo "<td>funcionario</td>";
								}
							 ?>	

							
							<td>
								<a href="?edit_user=<?=$d['id_user'];?>" class="btn btn-xs btn-warning"> <i class="fa fa-pencil"></i> </a>

								<?php echo '<a href="#myModal" class="btn btn-danger btn-xs" data-toggle="modal" id="tooltip" title="Excluir" onclick="delete_reg(\'',$d['id_user'],'\');">'; 
									echo '<span class="fa fa-trash"></span>';
									echo '</a> '; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<a href="?option=add_user" class="btn btn-primary"> <i class="fa fa-plus-square"></i> Adicionar Usuário </a>
				</tfoot>
			</table>
		</div>	
	</div>
</div>