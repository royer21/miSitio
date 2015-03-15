<div class="page-header">
	
	<h1>Eventos Proximos <small> Actividades Oficiales en la MDCN</small></h1>
</div>

<?php foreach ($query as $registro): ?>


	<span class="edicion">
				<?php if ($this->session->userdata('usuario') == TRUE ) 
		         { ?>
					<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?>
				<?php  }
		               else{
		        	?>
		        	       
				<?php      }
		        ?>  
				
	</span >

	<span class="hora">	
		<h4> <?= $registro->hora ?>  </h4>	
		
	</span>
	<span class="fecha">	
			
			<?= $registro->fecha ;
		?> 				
		
	</span>

	<div class="evento">
		<h4>Evento : <?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></h4>
		
		<div>
			<p>
				<strong>Lugar</strong>
				<?= $registro->lugar ?>
			
			  
			</p>
			<p>
				<strong>Descripcion</strong>
				<?= $registro->descripcion ?>
			</p>
		</div>
		
	</div>


<?php endforeach; ?>