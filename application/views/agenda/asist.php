<div>
	<h1>Eventos Asistidos </h1><small>Estuvo presente nuestro alcalde</small>
	<?= form_open('agenda/search_asist', array('class'=>'form-search')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar Eventos Asistidos', 'class'=>'input-medium search-query')); ?>
        <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
    <?= form_close(); ?>
	<div>
		<table class="table table-hover table-condensed table-bordered" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Procedencia</th>
					<th>Evento</th>		
					<th>Lugar</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Asistio</th>
								
				</tr>
			</thead>	

			<tbody>
				<?php foreach ($query as $registro): ?>
				<tr>
					<td><?= anchor('agenda/edit/'.$registro->id,$registro->id) ; ?></td>
					
					<td><?= $registro->procedencia ?></td>
					<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
					<td><?= $registro->lugar ?></td>
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
	</div>

</div>