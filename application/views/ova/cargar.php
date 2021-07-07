<input type="hidden" id="url" value="<?php echo base_url(); ?>">
<div class="container-fluid">
  <h3 class="mt-4">Cargar Objeto Virtual de Aprendizaje</h3>
  * Todos los campos son obligatorios<br>
  <hr><strong>METADATOS CONCEPTUALES</strong><hr>
  <div class=" row">
  	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Titulo</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Violencia en Colombia">
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Estándar</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el estándar">
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tema</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el tema">
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Area del conocimiento</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($areas as $area) {
				echo "<option value='".$area['idarea']."'>".$area['descarea']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
  </div>

  <div class=" row">
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Competencia</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Componente</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nivel académico</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($niveles as $nivel) {
				echo "<option value='".$nivel['idnivel']."'>".$nivel['descnivel']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Grado</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($grados as $grado) {
				echo "<option value='".$grado['idgrado']."'>".$grado['descgrado']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
  </div>

  <div class=" row">
	<div class="col-md-2">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Rango de edad</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($rangos as $rango) {
				echo "<option value='".$rango['idrango']."'>".$rango['edadmin']." - ".$rango['edadmax']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
	<div class="col-md-2">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Fecha de creación</label>
	    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese la fecha">
	  </div>
	</div>
	<div class="col-md-6">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Palabras clave</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Palabras separadas por coma Ej: sociales, guerra, colombia">
	  </div>
	</div>
	<div class="col-md-2">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Versión</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese la versión">
	  </div>
	</div>
  </div>

  <hr><strong>METADATOS TÉCNICOS</strong><hr>
  <div class=" row">
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tipo</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($tipos as $tipo) {
				echo "<option value='".$tipo['idtipo']."'>".$tipo['desctipo']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Subtipo</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($subtipos as $subtipo) {
				echo "<option value='".$subtipo['idsubtipo']."'>".$subtipo['descsubtipo']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tecnologías</label>
	    <select class="form-control" multiple>
			<?php
			foreach ($tecnologias as $tecnologia) {
				echo "<option value='".$tecnologia['idtecnologia']."'>".$tecnologia['desctecnologia']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Formato</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($formatos as $formato) {
				echo "<option value='".$formato['idformato']."'>".$formato['descformato']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
  </div>

  <div class=" row">
	<div class="col-md-4">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Requisitos</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese los requisitos">
	  </div>
	</div>
	<div class="col-md-6">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Instrucciones</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese las instrucciones">	  
		</div>
	</div>
	<div class="col-md-2">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Cargar artefacto .zip</label>
	    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=".zip">	  
		</div>
	</div>
  </div>

  <hr><strong>METADATOS DE AUTOR</strong><hr>
   <div class=" row">
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Autores</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
	    </select>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Fuentes</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fuentes en APA">	
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Licencia</label>
	    <select class="form-control">
	    	<option>Seleccione...</option>
			<?php
			foreach ($licencias as $licencia) {
				echo "<option value='".$licencia['idlicencia']."'>".$licencia['desclicencia']."</option>";
			}
			?>
	    </select>
	  </div>
	</div>
  </div>
  <br><hr>
  <button class="btn btn-lg btn-primary" style="width: 300px;"><strong>CARGAR OVA</strong></button><br><br>

</div>
