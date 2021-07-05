<?php  
	# buscando os dados la na tabela
	$manager = new Manager;

	$dados = $manager->select_common("produto",null, null, " ORDER BY codproduto DESC");	
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
        <form action="controllers/controllerProduto.php" method="POST">
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
					<th>Descrição</th>
					<th>Peso</th>
					<th>Controlado</th>
					<th>Quantidade</th>
					<th>Ações</th>
				</tr>
				</thead>

				<tbody>
					<?php foreach($dados as $d): ?>
						<tr>
							<td><?=$d['codproduto'];?></td>
							<td><?=$d['descricao'];?></td>
							<td><?=$d['peso'];?></td>
							
							<?php if($d['controlado'] == 1){
								echo "<td>Controlado</td>";
								}else{
								echo "<td>Não controlado</td>";
								}
							 ?>	

							<td><?=$d['qtdemin'];?></td>
							<td>
								<a href="?edit_produto=<?=$d['codproduto'];?>" class="btn btn-xs btn-warning"> <i class="fa fa-pencil"></i> </a>


								<?php echo '<a href="#myModal" class="btn btn-danger btn-xs" data-toggle="modal" id="tooltip" title="Excluir" onclick="delete_reg(\'',$d['codproduto'],'\');">'; 
									echo '<span class="fa fa-trash"></span>';
									echo '</a> '; ?>
								


							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<a href="?option=add_produto" class="btn btn-primary"> <i class="fa fa-plus-square"></i> Adicionar Produto </a>
				</tfoot>
			</table>
		</div>	
	</div>
</div>