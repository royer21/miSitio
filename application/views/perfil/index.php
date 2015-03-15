<div class="page-header">
	
	<h1>Perfiles <small>Mantenimiento de Registros</small></h1>
</div>
	<?= form_open('perfil/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Nombre...', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('perfil/create','Agregar',array('class'=>'btn'))?>
	<?= form_close();?>


<table class="table table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Creado</th>
			<th>Modificado</th>
			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('perfil/edit/'.$registro->id,$registro->id) ; ?></td>
			<td><?= $registro->name ?></td>
			<td><?= date("d/m/Y - H:i ", strtotime($registro->created)); ?></td>
			<td><?= date("d/m/Y - H:i ", strtotime($registro->updated)); ?></td>
			
		</tr>
		<?php endforeach; ?>
	</tbody>
		


</table>