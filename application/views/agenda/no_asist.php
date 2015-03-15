<div class="page-header">
	
	<h1>Control de Asistencia<small> Actividades Oficiales en la MDCN</small></h1>
</div>

	<?= form_open('agenda/search_no_asist', array('class'=>'form-search')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Eventos no Asistidos', 'class'=>'input-medium search-query')); ?>
        <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
    <?= form_close(); ?>

<table class="table table-hover table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Procedencia</th>
			<th>Evento</th>		
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
			<td><?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>'); ?></td>
			
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->lugar ?></td>
			<td><?= $registro->categoria ?></td>
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= $registro->asistencia ?></td>
		
		</tr>

		<?php endforeach; ?>

	</tbody>
		
</table>

	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
				</div>