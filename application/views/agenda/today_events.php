<div class="page-header">
	
	<h1>Eventos Hoy<small> Actividades Oficiales en la Municipalidad Distrital De Ciudad Nueva</small></h1>
</div>


<table class="table table-hover table-condensed table-bordered" >
	<thead>
		<tr>
		<!--<th>ID</th>-->
			<th>Procedencia</th> 
			<th>Evento</th>		
			<th>Descripcion</th>
			<th>Lugar</th>
		<!--<th>Categoria</th>-->
			<th>Fecha</th>
			<th>Hora</th>
			<th>Duración</th>
			<th>id </th>
		<!--<th>Ambito</th>
			<th>Tipo</ 
			<th>Creado</th>
			<th>Modificado</th>-->
			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
		
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->descripcion ?></td>
			<td><?= $registro->lugar ?></td>
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= $registro->duracion?></td>
			<th><?= $registro->usuario_id ?> </th>
		<!--<td><?= $registro->ambito ?></td>
			<td><?= $registro->tipo ?></td>	-->
			<?php date("d/m/Y - H:i ", strtotime($registro->created)); ?>
			<?php date("d/m/Y - H:i ", strtotime($registro->updated)); ?>
	
			
			
		</tr>
		<?php endforeach; ?>
		
	</tbody>
		


</table>

	