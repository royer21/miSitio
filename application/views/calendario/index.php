<div class="page-header">
	<h1> calendario <small> mantenimiento de registros </small> </h1>
</div>


<?php

	$data = array(
                3  => 'http://ejemplo.com/noticias/articulo/2006/03/',
                7  => 'http://ejemplo.com/noticias/articulo/2006/07/',
                13 => 'http://ejemplo.com/noticias/articulo/2006/13/',
                26 => 'http://ejemplo.com/noticias/articulo/2006/26/'
              );


	echo $this->calendar->generate($this->uri->segment(3),$this->uri->segment(4),$data);

		

?>