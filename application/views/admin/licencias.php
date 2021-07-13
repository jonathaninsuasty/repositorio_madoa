<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar licencias</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar licencia +</button><br><br>
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
	  	<?php foreach ($licencias as $licencia): ?>
		  	<tr>
		      <th scope="row"><?php echo $licencia['idlicencia']; ?></th>
		      <td><?php echo $licencia['desclicencia']; ?></td>
		      <?php if ($licencia['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $licencia['idlicencia']; ?>" onchange="activar_desactivar(<?php echo $licencia['idlicencia']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $licencia['idlicencia']; ?>" onchange="activar_desactivar(<?php echo $licencia['idlicencia']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $licencia['idlicencia']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idlicencia) {

	var state = $('#switch'+idlicencia).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	console.log(idlicencia);
	console.log(state);

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'licencia/actualizarEstadoLicencia',
  		data: { idlicencia : idlicencia, state : state }
	}).done(function( msg ) {
		  console.log(msg);
    	swal("Buen trabajo!", "La licencia cambió de estado.", "success");
  	});
}

function actualizarDesc(idlicencia) {
	swal("Escriba la nueva descripción para la licencia con id #" + idlicencia + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'licencia/actualizarDescLicencia',
		  		data: { idlicencia : idlicencia, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "La licencia cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción de la licencia a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'licencia/agregarLicencia',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "La licencia se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>
