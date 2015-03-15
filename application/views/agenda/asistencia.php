	<?php
		 $opciones= array(
			'01'	=>	'Enero',
			'02'	=>	'Febrero',
			'03'	=>	'Marzo',
			'04'	=>	'Abril',
			'05'	=>	'Mayo',
			'06'	=>	'Junio',
			'07'	=>	'Julio',
			'08'	=>	'Agosto',
			'09'	=>	'Septiembre',
			'10'	=>	'Octubre',
			'11'	=>	'Noviembre',
			'12'	=>	'Diciembre'
		);
			$year = array(
			'2015'=>'2015',
			'2016'=>'2016'
		);
		 ?>
<div class="page-header">
	
	<h1>Control de Asistencia<small> Actividades Oficiales en la MDCN</small></h1>
</div>

	<?= form_open('agenda/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
	<?= form_close(); ?>

	<?= form_open('agenda/search_month_year', array('class'=>'form-search')); ?>
		<?= form_label('Mes', 'mes', array('class'=>'control-label')); ?>
		<?= form_dropdown('mes',$opciones,array('class'=>'label'));?>
		
		<?= form_label('A&ntilde;o', 'year', array('class'=>'control-label')); ?>
		<?= form_dropdown('year',$year);?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>

 	<?= form_close(); ?>

 	<?= form_open('agenda/search_categoria', array('class'=>'form-search')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Categoria ', 'class'=>'input-medium search-query')); ?>
        <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
    <?= form_close(); ?>


 	<?= form_open('agenda/search_oficio', array('class'=>'form-search')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Oficio ', 'class'=>'input-medium search-query')); ?>
        <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
    <?= form_close(); ?>

	<?php foreach ($query as $registro): ?>
		
			<span class="hora">	
				<h4> <?= $registro->hora ?>  </h4>	
				
			</span>

			<span class="fecha">	

				<div>
					<?= $registro->fecha ?> 
								
				</div>
								
			</span>

			<div>
				<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?>
			</div>


			<div class="evento">
				
				<h4>Evento : <?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></h4>
				
				<div>
					<p>
						<i class="icon-map-marker"></i>
						<strong>Lugar </strong>
						<?= $registro->lugar ?>
					</p>
					<p>
						<strong>Descripcion</strong>
						<?= $registro->descripcion ?>
					  
					</p>

				</div>
				
			</div>
			

	<?php endforeach; ?>

	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
	</div>