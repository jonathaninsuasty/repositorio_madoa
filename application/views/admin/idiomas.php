<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Parametrizar idiomas</h3>
  <br>
  	<button class="btn btn-success" style="float: right;" onclick="agregar();">Agregar idioma +</button><br><br>
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
	  	<?php foreach ($idiomas as $idioma): ?>
		  	<tr>
		      <th scope="row"><?php echo $idioma['ididioma']; ?></th>
		      <td><?php echo $idioma['descidioma']; ?></td>
		      <?php if ($idioma['state']==1): ?>
		      	<td style="text-align:center"><input type="checkbox" checked data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $idioma['ididioma']; ?>" onchange="activar_desactivar(<?php echo $idioma['ididioma']; ?>);"></td>
		      <?php else: ?>
		      	<td style="text-align:center"><input type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-size="sm" id="switch<?php echo $idioma['ididioma']; ?>" onchange="activar_desactivar(<?php echo $idioma['ididioma']; ?>);"></td>
		      <?php endif ?>
		      
		      <td style="text-align:center"><button class="btn btn-warning btn-sm" onclick="actualizarDesc(<?php echo $idioma['ididioma']; ?>);">MODIFICAR</button></td>
		    </tr>
	  	<?php endforeach ?>    
	  </tbody>
	</table>
</div>
<script>
function activar_desactivar(ididioma) {

	var state = $('#switch'+ididioma).prop('checked');
	if (state == true) {
		var finalState = 1;
	} else {
		var finalState = 0;
	}

	$.ajax({
  		method: "POST",
  		url: $('#url').val() + 'idioma/actualizarEstadoIdioma',
  		data: { ididioma : ididioma, state : state }
	}).done(function( msg ) {
    	swal("Buen trabajo!", "El idioma cambió de estado.", "success");
  	});
}

function actualizarDesc(ididioma) {
	swal("Escriba la nueva descripción para el idioma con id #" + ididioma + ":", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'idioma/actualizarDescIdioma',
		  		data: { ididioma : ididioma, desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El idioma cambió de descripción.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}

function agregar() {
	swal("Escriba la descripción del idioma a adicionar:", {
  		content: "input",
	}).then((value) => {
  		if (value != null) {
  			$.ajax({
		  		method: "POST",
		  		url: $('#url').val() + 'idioma/agregarIdioma',
		  		data: { desc : value}
			}).done(function( msg ) {
		    	swal({
				    title: "Buen trabajo!",
				    text: "El idioma se ingresó con éxito.",
				    icon: "success"
				}).then(function() {
				    location.reload();
				});
		  	});
  		}
	});
}
</script>
