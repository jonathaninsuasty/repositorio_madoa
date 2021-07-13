<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar grados</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar grado +</button><br><br>
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
	  	<?php foreach ($grados as $grado): ?>
		  	<tr>
		      <th scope="row"><?php echo $grado['idgrado']; ?></th>
		      <td><?php echo $grado['descgrado']; ?></td>
		      <?php if ($grado['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $grado['idgrado']; ?>" onchange="activar_desactivar(<?php echo $grado['idgrado']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $grado['idgrado']; ?>" onchange="activar_desactivar(<?php echo $grado['idgrado']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $grado['idgrado']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idgrado) {

	var state = $('#switch'+idgrado).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'grado/actualizarEstadoGrado',
  		data: { idgrado : idgrado, state : state }
	}).done(function( msg ) {
    	swal("Buen trabajo!", "El grado cambió de estado.", "success");
  	});
}

function actualizarDesc(idgrado) {
	swal("Escriba la nueva descripción para el área con id #" + idgrado + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'grado/actualizarDescGrado',
		  		data: { idgrado : idgrado, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El grado cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción del grado a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'grado/agregarGrado',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El grado se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>
