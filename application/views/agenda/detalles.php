<div class="page-header">
	
	<h1> Actividades Oficiales  </h1>
</div>	
<div>
	<div class="evento">	

		<h4>		<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?> Evento : <?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></h4>
		<span class="hora">	
			<h4><?= $registro->hora ?>  </h4>	
		</span>
		<span class="fecha">				
				<?= $registro->fecha ?> 		
		</span>
		<br></br>
		<dl class="dl-horizontal">

			
			<dt>
				<i class="icon-map-marker"></i>
				<strong>Lugar: </strong> </dt>
			<dd><?= $registro->lugar  ?></dd>

			<dt>
				<i class="icon-hand-right"></i>
				<strong>Derivado: </strong> </dt>
			<dd><?= $registro->derivado ?></dd>
			
			<dt><strong>Procedencia: </strong> </dt>
			<dd><?= $registro->procedencia   ?></dd>
	
			<dt><strong>Categoria: </strong> </dt>
			<dd><?= $registro->categoria ?></dd>		

			
			<dt>
				<i class="icon-book"></i>
				<strong>Descripcion: </strong> </dt>
			<dd><?= $registro->descripcion?></dd>		
		</dl>
		
	</div>
		
</div>




