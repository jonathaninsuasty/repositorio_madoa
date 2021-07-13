<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar componentes del conocimiento</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar componente +</button><br><br>
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
	  	<?php foreach ($componentes as $componente): ?>
		  	<tr>
		      <th scope="row"><?php echo $componente['idcomponente']; ?></th>
		      <td><?php echo $componente['componentedesc']; ?></td>
		      <?php if ($componente['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $componente['idcomponente']; ?>" onchange="activar_desactivar(<?php echo $componente['idcomponente']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $componente['idcomponente']; ?>" onchange="activar_desactivar(<?php echo $componente['idcomponente']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $componente['idcomponente']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idcomponente) {

	var state = $('#switch'+idcomponente).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'componente/actualizarEstadoComponente',
  		data: { idcomponente : idcomponente, state : state }
	}).done(function( msg ) {
    	swal("Buen trabajo!", "El componente cambió de estado.", "success");
  	});
}

function actualizarDesc(idcomponente) {
	swal("Escriba la nueva descripción para el componente con id #" + idcomponente + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'componente/actualizarDescComponente',
		  		data: { idcomponente : idcomponente, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El componente cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción del componente a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'componente/agregarComponente',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El componente se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>