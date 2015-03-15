<div class="fechaactual ">
     <h2><script>
     var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
     var f=new Date();
     document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] );
     </script> 
     </h2>
</div>
<br>
<div >

	<?= form_open('agenda/today_events', array('class'=>'form-search')); ?>
		<?= form_label('Eventos Hoy', 'year', array('class'=>'control-label')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
	
</div>

<div>
	<?php foreach ($query as $registro): ?>
		
		<div class="calendario display">
			<?= $dia = substr($registro->fecha, 8, 2); ?>
			<em>
			<span class="hidden">
			<?= $mes=substr($registro->fecha, 5, 2); 
			echo "</span>";
				switch ($mes) {  
					case '1':echo "Enero";break;
					case '2':echo "Febrero";break;
					case '3':echo "Marzo";break;
					case '4':echo "Abril";break;
					case '5':echo "Mayo";break;
					case '6':echo "Junio";break;
					case '7':echo "Julio";break;
					case '8':echo "Agosto";break;
					case '9':echo "Septiembre";break;
					case '10':echo "Octubre";break;
					case '11':echo "Noviembre";break;
					case '12':echo "Diciembre";break;
					default:break;
				}
			?>
			
		
			</em>
		</div>


		<div class="espaciado">
				<div class="evento mayuscula">
					<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?>
					<?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?>
				</div>	
				<p>
					<i class="icon-time"></i>
					<strong>Hora </strong>
					<?= $registro->hora ?>
				</p>
				<p>
					<i class="icon-map-marker"></i>
					<strong>Lugar </strong>
					<?= $registro->lugar ?>
				</p>
				<p>
					<i class="icon-hand-right"></i>
					<strong>Derivado A : </strong>
					<?= $registro->derivado ?>
				</p>
			

		</div>
		<br>
			

	<?php endforeach; ?>
</div>

<div>	
	<?php echo $this->pagination->create_links();?>
</div>