<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar formatos</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar formato +</button><br><br>
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
	  	<?php foreach ($formatos as $formato): ?>
		  	<tr>
		      <th scope="row"><?php echo $formato['idformato']; ?></th>
		      <td><?php echo $formato['descformato']; ?></td>
		      <?php if ($formato['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $formato['idformato']; ?>" onchange="activar_desactivar(<?php echo $formato['idformato']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $formato['idformato']; ?>" onchange="activar_desactivar(<?php echo $formato['idformato']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $formato['idformato']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idformato) {

	var state = $('#switch'+idformato).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'formato/actualizarEstadoFormato',
  		data: { idformato : idformato, state : state }
	}).done(function( msg ) {
    	swal("Buen trabajo!", "El formato cambió de estado.", "success");
  	});
}

function actualizarDesc(idformato) {
	swal("Escriba la nueva descripción para el formato con id #" + idformato + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'formato/actualizarDescFormato',
		  		data: { idformato : idformato, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El formato cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción del formato a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'formato/agregarFormato',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El formato se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>
