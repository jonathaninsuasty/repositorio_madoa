<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar competencias del conocimiento</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar competencia +</button><br><br>
  	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col" style="text-align:center"># ID</th>
	      <th scope="col" style="text-align:center">Descripción</th>
	      <th scope="col" style="text-align:center">Estado</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($competencias as $competencia): ?>
		  	<tr>
		      <th scope="row"><?php echo $competencia['idcompetencia']; ?></th>
		      <td><?php echo $competencia['competenciadesc']; ?></td>
		      <?php if ($competencia['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $competencia['idcompetencia']; ?>" onchange="activar_desactivar(<?php echo $competencia['idcompetencia']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $competencia['idcompetencia']; ?>" onchange="activar_desactivar(<?php echo $competencia['idcompetencia']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $competencia['idcompetencia']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idcompetencia) {

	var state = $('#switch'+idcompetencia).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}


	console.log(idcompetencia);

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'competencia/actualizarEstadoCompetencia',
  		data: { idcompetencia : idcompetencia, state : state }
	}).done(function( msg ) {
			//console.log(msg);
    	swal("Buen trabajo!", "La competencia cambió de estado.", "success");
  	});
}

function actualizarDesc(idcompetencia) {
	swal("Escriba la nueva descripción para el competencia con id #" + idcompetencia + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'competencia/actualizarDescCompetencia',
		  		data: { idcompetencia : idcompetencia, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "La competencia cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción de la competencia a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'competencia/agregarCompetencia',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "La competencia se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>