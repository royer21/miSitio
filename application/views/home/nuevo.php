<?= form_open('pages/guardar', array('class'=>'form-horizontal')); ?>
	<legend> Crear Nuevo Evento </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('Procedencia  :', 'procedencia', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'procedencia', 'id'=>'procedencia', 'placeholder'=>'Procedencia...', 'value'=>set_value('procedencia'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Evento :', 'evento', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'evento', 'id'=>'evento', 'placeholder'=>'Evento...', 'value'=>set_value('evento'))); ?>
	</div>

	
	<div class="control-group">
		<?= form_label('Ambito  :', 'ambito', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'ambito', 'id'=>'ambito', 'placeholder'=>'Ambito...', 'value'=>set_value('ambito'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Tipo  : ', 'tipo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'tipo', 'id'=>'tipo', 'placeholder'=>'Tipo...', 'value'=>set_value('tipo'))); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('Categoria : ', 'categoria', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'categoria', 'id'=>'categoria', 'placeholder'=>'Categoria...', 'value'=>set_value('categoria'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Fecha : ', 'Fecha', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'date', 'name'=>'Fecha', 'id'=>'fecha', 'placeholder'=>'Fecha...', 'value'=>set_value('Fecha'))); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('Hora  :', 'hora', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'time', 'name'=>'hora', 'id'=>'hora', 'placeholder'=>'hora...', 'value'=>set_value('hora'))); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('Duracion  :', 'duracion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'duracion', 'id'=>'duracion', 'placeholder'=>'Duracion...', 'value'=>set_value('duracion'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Lugar  :', 'lugar', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'lugar', 'id'=>'lugar', 'placeholder'=>'lugar...', 'value'=>set_value('lugar'))); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('Descripcion  :', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'descripcion', 'id'=>'descripcion', 'placeholder'=>'Descripcion...', 'value'=>set_value('descripcion'))); ?>
	</div>
	
	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Guardar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn')); ?>
	</div>

	


<?= form_close(); ?>
