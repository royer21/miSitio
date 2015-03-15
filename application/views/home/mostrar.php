	<h2> Registro de Eventos </h2>

	<?php $buscar = 0; ?>
	<?= form_open('filtrar/prueba/'.$buscar, array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Año...', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
	<?= form_close();?>

		<?= anchor('pages/nuevo', 'Agregar', array('class'=>'btn')); ?>

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
