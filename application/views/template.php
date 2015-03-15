	<body>
      		<!-- Barra superior fija con opciones principales de menú -->
        <div class="navbar navbar-inverse fondito">
            <div class="navbar fondito">
                <div class="container-fluid "> 
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"> <?= $titulo ?> </a>
               
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?= my_menu_ppal(); ?>
                            <li>
                            <?= form_open('agenda/search', array('class'=>'form-search')); ?>
                                <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
                                <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
                            <?= form_close(); ?>
                            
                            </li>
                        </ul> 
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->
		<div class="container-fluid cuadro">            
          
            <div class="row-fluid ">
          
            	<!-- Menú del sistema -->                                                    
                              
                <div class="span3">
                    
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            
                                <li class="nav-header"> Menu Opciones </li>
                                <?= my_menu_app(); ?>
                                                                                                            
                        </ul>
                    </div>
                   
                </div>

                <!-- Contenido de la aplicación -->

                <div class="span6 contenido">
                  
                	<?= $this->load->view($contenido) ?>

                </div>

                <!-- Calendario  -->
            
                <div class="span3 hidden-tablet">

                
                   <div class="alcalde">
                     <h2>Nuestro Alcalde</h2>
                     <img src="http://www.municiudadnueva.gob.pe/TGH2.png" alt="">
                    <div><h2>Calendario</h2></div>
                                         
                    <div class="jquery-calendar"></div>
                 
                   </div>
                                   
                </div>
            </div>

     
            