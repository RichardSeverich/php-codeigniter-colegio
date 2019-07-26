<!DOCTYPE html>
  
  <head>
    <title>RICHARD SEVERCIH</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
	<?php echo link_tag('docs_paginaweb/css/bootstrap.min.css');     ?>
	<?php echo link_tag('docs_paginaweb/css/font-awesome.min.css');  ?>
	<?php echo link_tag('docs_paginaweb/css/templatemo_misc.css');   ?>
	<?php echo link_tag('docs_paginaweb/css/templatemo_style.css');  ?>

     <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'> -->
     <!--  
	<script <?php // echo link_tag('docs_paginaweb/js/jquery-1.10.2.min.js');  ?> </script> 
	<script <?php //echo link_tag('docs_paginaweb/js/jquery.lightbox.js');  ?> </script> 
	<script <?php //echo link_tag('docs_paginaweb/js/templatemo_custom.js');  ?>	</script> 
	 -->
    <script src=" <?php echo base_url(); ?>docs_paginaweb/js/jquery-1.10.2.min.js"></script> 
	<script src=" <?php echo base_url(); ?>docs_paginaweb/js/jquery.lightbox.js"></script>
	<script src=" <?php echo base_url(); ?>docs_paginaweb/js/templatemo_custom.js"></script>

   <script>
   
	function showhide()
    {
    	var div = document.getElementById("newpost");
		if (div.style.display !== "none")
		{
			div.style.display = "none";
		}
		else {
			div.style.display = "block";
		}
    }
  	</script>
	

  </head>
  <body>
  	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Galeria de fotos</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Ingresar al Sistema</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Informacion</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contactanos</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row templatemo_gallerygap">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
                    <div class="col-md-3 col-sm-12">
                    	<a rel="nofollow" href=""><img src="<?php echo base_url(); ?>docs_paginaweb/images/templatemo_logo.jpg" alt="Polygon HTML5 Template"></a>
                    </div>
					<div class="col-md-9 main_menu">
						<ul>
							<li><a class="show-1 templatemo_home" href="#">
                            	<span class="fa fa-camera"></span>
                                 GALERIA DE FOTOS</a></li>
							<li><a class="show-2 templatemo_page2" href="#">
                            	<span class="fa fa-users"></span>
                          		 INGRESAR AL SISTEMA</a></li>
							<li><a class="show-3 templatemo_page3" href="#">
                            	<span class="fa fa-cogs"></span>
                            	 INFORMACION</a></li>
							<li><a class="show-5 templatemo_page5" href="#">
                            	<span class="fa fa-envelope"></span>
                                CONTACTANOS</a></li>
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
	</div> <!-- /.site-header -->
    <div id="menu-container">
    <!-- gallery start -->
    <div class="content homepage" id="menu-1">
    <div class="container">
	    <div class="row templatemorow">
    		<div class="hex col-sm-6">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/1.jpg);">
             	 	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/1.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/2.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/2.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top2">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/3.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/3.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/4.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/4.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/5.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/5.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
  	     <div class="hex col-sm-6 hex-offset templatemo-hex-top1 templatemo-hex-top2">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/6.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/6.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
     <div class="hex col-sm-6 templatemo-hex-top1 templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/7.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/7.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="hex col-sm-6 templatemo-hex-top1  templatemo-hex-top3">
      	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/8.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/8.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hex col-sm-6 templatemo-hex-top1  templatemo-hex-top2">
      	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/9.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/9.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    	</div>
	</div>
    <div  id="newpost" style="display:none;" class="container answer_list templatemo_gallerytop">
	    <div class="row templatemorow">
    		<div class="hex col-sm-6">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/10.jpg);">
             	 	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/10.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/11.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/11.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top2">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/12.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/12.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/13.jpg);">
              	<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/13.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hex col-sm-6  templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/14.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/14.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
  	     <div class="hex col-sm-6 hex-offset templatemo-hex-top1 templatemo-hex-top2">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/15.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/15.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
     <div class="hex col-sm-6 templatemo-hex-top1 templatemo-hex-top3">
    	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/16.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/16.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="hex col-sm-6 templatemo-hex-top1  templatemo-hex-top3">
      	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/17.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/17.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hex col-sm-6 templatemo-hex-top1  templatemo-hex-top2">
      	<div>
          <div class="hexagon hexagon2 gallery-item">
            <div class="hexagon-in1">
              <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/gallery/18.jpg);">
              		<div class="overlay">
						<a href="<?php echo base_url(); ?>docs_paginaweb/images/gallery/18.jpg" data-rel="lightbox" class="fa fa-expand"></a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    	</div>
	</div>
    <div class="container">
    	<div class="row">
        	<div class="templatemo_loadmore">
			 <button class="gallery_more" id="button" onClick="showhide()">Load More</button>
            </div>
        </div>
    </div>
    </div>
      <!-- gallery end -->
	  
	  
	  
	  
    <!-- team start -->
    <div class="content team" id="menu-2">
     <div class="templatemo_ourteam">
     		<div class="container templatemo_hexteam">
            	<div class="row">
                	<div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/team/1.jpg);">
								   <div class="overlay templatemo_overlay1">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="overlay templatemo_overlay2">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-twitter"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="overlay templatemo_overlay3">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-linkedin"></span>
                                 	  </div>
                                    </a>
                                </div>

                                <div class="overlay templatemo_overlay4">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-rss"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">USUARIOS</div>
                                </div>
                            </div>
                          </div>
						  
					
  			       </div>
				   
				   	     <div class="col-md-3 col-sm-8 templatemo_servicetxt" >
                    	<h2> <a href="#" >USUARIOS</a></h2>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btningresarsistema'); 
							echo form_open('controlador_usuarios/direccionar_ingresar_sistema_usuarios',$attributes); //abrir el form
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btningresarsistema','name' => 'btningresarsistema');
							echo form_submit($attributes,'INGRESAR AL SISTEMA');
							echo form_close();
						
							?>
                        <p>INGRESAR AL SISTEMA MODO USUARIO</p>
                    </div>
                 
                 <!--     <div class="templatemo_servicecol2"> -->
                    <div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(<?php echo base_url(); ?>docs_paginaweb/images/team/2.jpg);">
                                <div class="overlay templatemo_overlay1">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="overlay templatemo_overlay2">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-twitter"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="overlay templatemo_overlay3">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-linkedin"></span>
                                 	  </div>
                                    </a>
                                </div>

                                <div class="overlay templatemo_overlay4">
                                	<a href="#">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-rss"></span>
                                 	  </div>
                                    </a>
                                </div>
                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">ESTUDIANTES</div>
                                </div>
                            </div>
                          </div>
						  
				
  			       </div>
				   		     <div class="col-md-3 col-sm-8 templatemo_servicetxt">
                    <h2> <a href="#" >ESTUDIANTES</a></h2>
							
							<?php 
							$attributes = array('class' => 'form', 'id' => 'btningresarestudiante'); 
							echo form_open('controlador_estudiantes/direccionar_ingresar_sistema_estudiantes',$attributes); //abrir el form
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btningresarestudiante','name' => 'btningresarestudiante');
							echo form_submit($attributes,'INGRESAR AL SISTEMA');
							echo form_close();
						
							?>
                        <p>INGRESAR AL SISTEMA MODO ESTUDIANTE</p>
                    </div>
				    <!-- </div> -->
                 
                  
               </div>
            </div>
         
          
            
     </div>
     </div>
	 
	 
    <!--team end-->
    <div class="clear"></div>
    <!-- service start -->
    <div class="content services" id="menu-3">
    <div class="container">
    	<div class="row templatemo_servicerow">
        	<div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-bell"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>  
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Horario de clases</h3>
                    <p>Esta seccion fue creada con el objetivo de brindar informacion a los alumnos y padres de familia de las actividades
					y horarios de  clases de la unidad educativa maria auxiliadora.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-briefcase"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>  
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Cursos Brindados</h3>
                    <p>Los cursos brindados son: nivel inicial: pre kinder, kinder--- Basico: primero, segundo, tercero, cuarto, quinto y sexto
					 ---secundaria: primero segundo, tercero, cuarto, quinto, sexto.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-mobile"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>  
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Dispositivos Moviles</h3>
                    <p>Esta Pagina web es multiplataforma por lo que se puede acceder deste los siguientes dispositivos:
							d tablet, laptop o dispositivo movil, a travez de navegadores: ser	google crome,internet explorer y moxila firefox.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-trophy"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>  
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Campeonatos</h3>
                    <p>En esta seccion se publicara todos los campeonatos en los que participa la unidad educativa Maria Auxiliadora, 
					ademas de los estudiantes ganadores con el objetivo de insentivar al deporte.
				    </p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-thumb-tack"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>  
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Ranking de Alumnos</h3>
                    <p>En Esta Seccion de Publica el ranquing de notas de los alumnos de la unidad educativa maria auxiliadora
					con el objetivo de insentivar la competividad entre estudiantes y brindar informacion de los promedios de notas de los alumnos</p>
                    </div>
              </div>
              
        </div>
    </div>
    </div>
    <!-- service end -->
    <!-- contact start -->
    <div class="content contact" id="menu-5">
    <div class="container">
     	<div class="row">
        	<div class="col-md-4 col-sm-12">
            	<div class="templatemo_contactmap">
    			<div id="templatemo_map"></div>
                <img src="images/templatemo_contactiframe.png" alt="contact map">
                </div>
                </div>
            <div class="col-md-3 col-sm-12 leftalign">
            	<div class="templatemo_contacttitle">Informacion de Contacto</div>
                <div class="clear"></div>
                <p>Contactar con el Gerente de la Unidad Educativa Maria Auxiliadora Cristo Rey.</p>
                <div class="templatemo_address">
                	<ul>
                	<li class="left fa fa-map-marker"></li>
                    <li class="right">Codigo Area Local Bolivia 591 <br> Cochabamba: 4 </li>
                    <li class="clear"></li>
                    <li class="left fa fa-phone"></li>
                    <li class="right">Numero: 4375773</li>
                    <li class="clear"></li>
                    <li class="left fa fa-envelope"></li>
                    <li class="right">Maria_Auxiliadora@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
            	<form role="form">
              	<div class="templatemo_form">
                	<input name="fullname" type="text" class="form-control" id="fullname" placeholder="Su Nombre" maxlength="40">
              	</div>
              	<div class="templatemo_form">
                	<input name="email" type="text" class="form-control" id="email" placeholder="Su Email" maxlength="40">
              	</div>
               	<div class="templatemo_form">
                	<input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" maxlength="40">
              	</div>
              	<div class="templatemo_form">
	            	<textarea name="message" rows="10" class="form-control" id="message" placeholder="Escribir Mensaje"></textarea>
              	</div>
              	<div class="templatemo_form"><button type="button" class="btn btn-primary">Enviar Mensaje</button></div>
            </form>
            </div>
        </div>
    	
    </div>
    </div>
    </div>
    <!-- contact end -->
	<!-- footer start -->
    <div class="templatemo_footer">
    	<div class="container">
    	<div class="row">
        	<div class="col-md-9 col-sm-12">Copyright &copy; 2014 <!-- Credit: www.templatemo.com --> | 
            <a rel="nofollow" href="">Richard Severich</a> </div>
            <div class="col-md-3 col-sm-12 templatemo_rfooter">
            	  <a href="#">
                 	<div class="hex_footer">
					<span class="fa fa-facebook"></span>
					</div>
                  </a>
                  <a href="#">
                    <div class="hex_footer">
					 <span class="fa fa-twitter"></span>
					</div>
                    </a>
                  <a href="#">
                 	<div class="hex_footer">
					 <span class="fa fa-linkedin"></span>
					</div>
                 </a>
                <a href="#">
                	<div class="hex_footer">
					 <span class="fa fa-rss"></span>
					</div>
                </a>
            </div>
        </div>
        </div>
    </div>
    <!-- footer end -->    
	
	<script>
	$('.gallery_more').click(function(){
		var $this = $(this);
		$this.toggleClass('gallery_more');
		if($this.hasClass('gallery_more')){
			$this.text('VER MAS');			
		} else {
			$this.text('VER MENOS');
		}
	});
    </script>
<!-- templatemo 400 polygon -->

  </body>
</html>