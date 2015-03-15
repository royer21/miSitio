	<h2> Registro de Eventos por fecha  </h2>
	
	<?php $buscar2 = 0; ?>
	<?= form_open('filtrar/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar2', 'id'=>'buscar2', 'placeholder'=>'Buscar por procedencia.', 'class'=>'input-medium search-query')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
	<?php //<?= anchor('menu/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
	<?= form_close(); ?>

		<table class="table">
			<tr>
				<td>Procedencia</td>
				<td>Evento</td>		
				<td>Ambito</td>
				<td>Tipo</td>
				<td>Categoria</td>
				<td>Fecha</td>
				<td>Hora</td>
				<td>Duracion</td>
				<td>Lugar</td>
				<td>Descripcion</td>
			</tr>
			<?php

				
			//	echo $key . '.-' . $variable['evento'] . '<br>';
			//	echo 'fecha' . $variable['fecha'] . '<br>';

				foreach ($enlaces->result() as $row) {
					echo "<tr>";
						echo "<td>".$row->procedencia."<br>";
						echo "<td>".$row->evento."<br>";
						echo "<td>".$row->ambito."<br>";
						echo "<td>".$row->tipo."<br>";
						echo "<td>".$row->categoria."<br>";
						echo "<td>".$row->fecha."<br>";
						echo "<td>".$row->hora."<br>";
						echo "<td>".$row->duracion."<br>";
						echo "<td>".$row->lugar."<br>";
						echo "<td>".$row->descripcion."<br>";
					echo "</tr>";
				}
				
			?>
		</table>	
		
