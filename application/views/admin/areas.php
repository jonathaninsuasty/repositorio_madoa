<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar áreas del conocimiento</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar área +</button><br><br>
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
	  	<?php foreach ($areas as $area): ?>
		  	<tr>
		      <th scope="row"><?php echo $area['idarea']; ?></th>
		      <td><?php echo $area['descarea']; ?></td>
		      <?php if ($area['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $area['idarea']; ?>" onchange="activar_desactivar(<?php echo $area['idarea']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $area['idarea']; ?>" onchange="activar_desactivar(<?php echo $area['idarea']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $area['idarea']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(idarea) {

	var state = $('#switch'+idarea).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'area/actualizarEstadoArea',
  		data: { idarea : idarea, state : state }
	}).done(function( msg ) {
    	swal("Buen trabajo!", "El área cambió de estado.", "success");
  	});
}

function actualizarDesc(idarea) {
	swal("Escriba la nueva descripción para el área con id #" + idarea + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'area/actualizarDescArea',
		  		data: { idarea : idarea, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El área cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción del area a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'area/agregarArea',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El área se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>
