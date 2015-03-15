<div class="page-header">
	
	<h1>Control de Asistencia<small> Actividades Oficiales en la UNJBG</small></h1>
</div>

	<?= form_open('agenda/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/create','Agregar',array('class'=>'btn'))?>
	<?= form_close(); ?>

	<?= form_open('agenda/update', array('class'=>'form-horizontal')); ?>

<table class="table table-hover table-condensed table-bordered" >
	<thead>
		<tr>
			<th>Editar</th>
			<th>Procedencia</th>
			<th>Evento</th>		
			<th>Descripcion</th>
			<th>Lugar</th>
			<th>Categoria</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Asistio</th>
						
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('agenda/asistencia/'.$registro->id,'<i class="icon-edit"></i>') ; ?></td>
			
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->descripcion ?></td>
			<td><?= $registro->lugar ?></td>
			<td><?= $registro->categoria ?></td>
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= form_input(array('type'=>'text','name'=>'asistencia','id'=>'asistencia', 'value'=>$registro->asistencia)); ?></td>
			
		
			
			
		</tr>

		<?php endforeach; ?>


	</tbody>
		

			


</table>


 	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/asistencia', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('agenda/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>

	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
				</div>