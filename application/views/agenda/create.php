<?= form_open('agenda/insert', array('class'=>'form-horizontal')); ?>
	<legend> <h1>Crear Actividad Oficial</h1>  </legend>

	<?= my_validation_errors(validation_errors()); ?>

		<?php $ambito=array('Local'=>'Local','Regional'=>'Regional','Nacional'=>'Nacional','Internacional'=>'Internacional'); 
			  $tipo=array('Academico'=>'Academico','Institucional'=>'Institucional','Cultural'=>'Cultural','Empresarial'=>'Empresarial','Recreativo'=>'Recreativo','Deportivo'=>'Deportivo');
			  $categoria=array('Firmas'=>'Firma de Convenio',
			  				   'Audiencia'=>'Audiencia',
			  				   'Sesion de Consejo Ordinaria'=>'Sesion de Consejo Ordinaria',
			  				   'Sesion de Consejo Extraordinaria'=>'Sesion de Consejo Extraordinaria',
			  				   'invitacion Capacitacion'=>'invitacion Capacitacion',
			  				   'invitacion Talleres'=>'invitacion Talleres',
			  				   'invitacion Aniversarios'=>'Invitacion Aniversario',
			  				   'Eventos Otros'=>'Eventos Otros',

			  				   ); 
			  $asistencia=array('si'=>'si','no'=>'no'); ?>
		
		<div class="control-group">
		<?= form_label('Oficio', 'oficio', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'oficio','id'=>'oficio','placeholder'=>'oficio....', 'value'=>set_value('oficio'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Procedencia', 'procedencia', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'procedencia','id'=>'procedencia','placeholder'=>'Procedencia....', 'value'=>set_value('procedencia'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Evento', 'evento', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'evento','id'=>'evento','placeholder'=>'Evento....', 'value'=>set_value('evento'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Ambito', 'ambito', array('class'=>'control-label')); ?>
		<?= form_dropdown('ambito',$ambito,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Tipo', 'tipo', array('class'=>'control-label')); ?>
		<?= form_dropdown('tipo',$tipo,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Categoria', 'categoria', array('class'=>'control-label')); ?>
		<?= form_dropdown('categoria',$categoria,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">

		<?= form_label('Fecha', 'fecha', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'fecha','id'=>'datetimepicker1')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Hora de Inicio', 'hora', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'hora','id'=>'datetimepicker2')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Hora de Fin', 'duracion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'duracion','id'=>'datetimepicker3')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Lugar', 'lugar', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'lugar','id'=>'lugar','placeholder'=>'Lugar....', 'value'=>set_value('lugar'))); ?>
		</div>

		<div class="control-group ">
		<?= form_label('Descripción ', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_textarea(array('class'=>'descripcion','type'=>'text','name'=>'descripcion','id'=>'descripcion','placeholder'=>'Descripción....', 'value'=>set_value('descripcion'))); ?>
		</div>
				
		<div class="control-group">
		<?= form_label('Asistencia ', 'asistencia', array('class'=>'control-label')); ?>
		<?= form_checkbox(array('name'=>'asistencia','id'=>'checkbox','value'=>'0','class'=>'control-label') ); ?>
		</div>

		<div class="control-group">
		<?= form_label('Derivado A :', 'derivado', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'derivado','id'=>'campo', 'value'=>'alcalde')); ?>
		</div>
		
		<div class="control-group hidden">
		<?= form_label('Id de usuario', 'usuario_id', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'usuario_id','id'=>'usuario_id', 'value'=>$this->session->userdata('usuario_id'))); ?>
		</div>

		<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn')); ?>
		</div>

<?= form_close(); ?>
