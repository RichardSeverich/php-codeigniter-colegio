
<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
      
        <title>Unidad Educativa M.A. Cristo Rey</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
		<?php echo link_tag('docs_menu_principal/css/bootstrap.min.css');    ?>
		<?php echo link_tag('docs_menu_principal/css/font-awesome.min.css'); ?>
		<?php echo link_tag('docs_menu_principal/css/templatemo_main.css');  ?>

    </head>
    <body>
        <div id="main-wrapper">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center templatemo-logo margin-top-20">
                <h1 class="templatemo-site-title">
                    <a href="#">MENU PRINCIPAL ADMINISTRADOR</a>
                </h1>
                <h3 class="templatemo-site-title">
             
				 <a rel="nofollow" href="#"><span class="blue">Sistema Multi</span><span class="green">plataforna</span></a>
	 
					   
                </h3>
			
            </div>
			
            <div class="image-section">
                <div class="image-container">
             
					<img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-1.jpg" id="menu-img" class="main-img inactive" alt="">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-2.jpg" id="products-img" class="inactive" alt="Product">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-3.jpg" id="services-img"  class="inactive" alt="Services">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-4.jpg" id="about-img" class="inactive" alt="About">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-5.jpg" id="contact-img" class="inactive" alt="Contact">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-6.jpg" id="company-intro-img" class="main-img inactive" alt="Company Intro">
                    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-7.jpg" id="testimonials-img" class="main-img inactive" alt="Testimonials">
				
                </div>
            </div>

            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <!-- /.menu-section -->   
						<section id="menu-section" class="active">
                            <div class="row">
        
							     <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                    <a href="#about" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-users"></i>
                                            <h2>Ges.Usuarios</h2>
                                        </div>
                                    </a>
                                </div>
								<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                    <a href="#products" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-cubes"></i>
                                            <h2>Ges.Cursos</h2>
                                        </div>
                                    </a>
                                </div>
								
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-20">
                                    <a href="#company-intro" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <h2>Ges. Gestion Educativa</h2>
                                        </div>
                                    </a>
                                </div>
							   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-20">
                                    <a href="<?php echo base_url().'index.php/controlador_reportes/direccionar_reportes_menu_administrador' ?>" class="">
                                        <div class="black-bg btn-menu">
                                            <h2>Reportes</h2>
                                        </div>
                                    </a>
                                </div>
								
							    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-20">
                                    <a href="<?php echo base_url().'index.php/controlador_pruebas/direccionar_pruebas_menu' ?>" class="">
                                        <div class="black-bg btn-menu">
                                            <h2>Pruebas</h2>
                                        </div>
                                    </a>
                                </div>
								
								
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-20">
                                    <a href="<?php echo base_url(); ?>" class="">
                                        <div class="black-bg btn-menu">
                                            <h2>Salir</h2>
                                        </div>
                                    </a>
								</div>
								
							
                              
                            </div>
                        </section> 
                       

						<!-- /.GESTION SECTION -->
						
						<!-- /.Gest. Usuarios --> 
                        <section id="about-section" class="inactive">
                            <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="text-center">GESTIONAR USUARIOS</h2>
                                    <div class="col-sm-6 col-md-6">
                                        <p>
										<a href="#"></a></p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">						   
                                </div>
                            </div>
							<center>
							<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistrousuarios'); 
							echo form_open('controlador_usuarios/direccionar_registro_usuarios',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
							echo form_submit($attributes,'REGISTRAR USUARIOS');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscarusuarios');   //abrir el form
							echo form_open('controlador_usuarios/mostrar_usuarios',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscarusuarios','name' => 'btnbuscarusuarios');
							echo form_submit($attributes,'BUSCAR USUARIOS');
							echo form_close();
							echo '&&&';
							?>
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_usuarios/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
                        </section><!-- /.about-section -->    
					
						<!-- /.Gest. Estudiantes --> 
							<!-- /.contact-section -->  
                          <section id="contact-section" class="inactive">
                            <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    
                                    <h2 class="text-center">GESTIONAR ESTUDIANTES</h2>
                                    <div class="col-sm-12 col-md-12">
                                        <p></p>
                                        <p><a href="#"></a> 
									</p>
                                    </div>

                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                                  
                                </div>
                            </div>
							
							<center>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistroestudiantes'); 
							echo form_open('controlador_estudiantes/direccionar_registro_estudiantes',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistroestudiantes','name' => 'btnregistroestudiantes');
							echo form_submit($attributes,'REGISTRAR ESTUDIANTES');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscarestudiantes');   //abrir el form
							echo form_open('controlador_estudiantes/mostrar_estudiantes',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscarestudiantes','name' => 'btnbuscarestudiantes');
							echo form_submit($attributes,'BUSCAR ESTUDIANTES');
							echo form_close();
							echo '&&&';
							?>
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_usuarios/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
							
                        </section>
						

						<!-- /.cursos-section -->  
					   <section id="products-section" class="inactive">
                        <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    
                                    <h2 class="text-center">GESTIONAR CURSOS</h2>
                                    <div class="col-sm-12 col-md-12">
                                        <p></p>
                                        <p></p>
                                    </div>

                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                           
                                </div>
                            </div>
							 
									<center>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistrocursos'); 
							echo form_open('controlador_cursos/direccionar_registro_cursos',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistrocursos','name' => 'btnregistrocursos');
							echo form_submit($attributes,'REGISTRAR CURSOS');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscarcursos');   //abrir el form
							echo form_open('controlador_cursos/mostrar_cursos',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscarcursos','name' => 'btnbuscarcursos');
							echo form_submit($attributes,'BUSCAR CURSOS');
							echo form_close();
							echo '&&&';
							?>
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_cursos/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
							 
							 
                        </section>  
						
						<!-- /.PENCIONES-section -->    
                        <section id="services-section" class="inactive">
                            <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    
                                    <h2 class="text-center">GESTIONAR INSCRIPCIONES</h2>
                                    <div class="col-sm-12 col-md-12">
                                        <p></p>
                                 
                                    </div>

                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                                   
                                </div>
                            </div>
							 
										<center>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistroinscripcion'); 
							echo form_open('controlador_inscripciones/direccionar_registro_inscripciones_elegir_cursos',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistroinscripcion','name' => 'btnregistroinscripcion');
							echo form_submit($attributes,'REGISTRAR INSCRIPCIONES');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscarinscripciones');   //abrir el form
							echo form_open('controlador_inscripciones/mostrar_inscripciones',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscarinscripciones','name' => 'btnbuscarinscripciones');
							echo form_submit($attributes,'BUSCAR INSCRIPCIONES');
							echo form_close();
							echo '&&&';
							?>
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_inscripciones/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
                        </section>
						

						<!-- /.company-intor-section -->  
                        <section id="company-intro-section" class="inactive">
                            <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="text-center">GESTIONAR AÑO EDUCATIVO</h2>
                                    <div class="col-sm-12 col-md-12">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                                 
                                </div>
                            </div>
							 
											<center>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistrogestion'); 
							echo form_open('controlador_gestion/direccionar_registro_gestion',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistrogestion','name' => 'btnregistrogestion');
							echo form_submit($attributes,'REGISTRAR GESTION');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscargestiones');   //abrir el form
							echo form_open('controlador_gestion/mostrar_gestiones',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscargestiones','name' => 'btnbuscargestiones');
							echo form_submit($attributes,'BUSCAR GESTIONES');
							echo form_close();
							echo '&&&';
							?>
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_gestion/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
                        </section>  
                        <!-- /.company-intor-section -->
						<section id="testimonials-section" class="inactive">
                            <div class="row">
                                <div class="black-bg col-sm-12 col-md-12 col-lg-12">
                                    
                                    <h2 class="text-center">GESTIONAR DATOS DOSIFICACION</h2>
                                    <div class="col-sm-12 col-md-12">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
                                   
                                </div>
                            </div>
						
								<center>
								<?php 
							$attributes = array('class' => 'form', 'id' => 'btnregistrardosificacion'); 
							echo form_open('controlador_dosificacion/direccionar_registro_dosificacion',$attributes); //abrir el form
						
							 
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnregistroinscripcion','name' => 'btnregistroinscripcion');
							echo form_submit($attributes,'REGISTRAR DOSIFICACION');
							echo form_close();
							echo '&&&';
							?>
							
							<?php
							$attributes = array('class' => 'form', 'id' => 'btnbuscardatosdosificacion');   //abrir el form
							echo form_open('controlador_dosificacion/mostrar_dosificacion',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnbuscarinscripciones','name' => 'btnbuscarinscripciones');
							echo form_submit($attributes,'BUSCAR DOSIFICACION');
							echo form_close();
							echo '&&&';
							?>

							
							<?php
							
							$attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
							echo form_open('controlador_dosificacion/direccionar_menu_principal',$attributes);
							
							$attributes = array('style'=>'width:242px; height:70px','class'=>'btn btn-primary','id' => 'btnsalir','name'=>'btnsalir');
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
							echo '&&&';
							?>	
							</center> 
								
                        </section>



                        
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
            </div><!-- /.row --> 

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                    <p class="footer-text">Copyright &copy; 2014 Richard Severich <!-- Credit: www.templatemo.com --></p>
                </div><!-- /.footer --> 
            </div>

		</div><!-- /#main-wrapper -->
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->
        
        <script src="<?php echo base_url(); ?>docs_menu_principal/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>docs_menu_principal/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>docs_menu_principal/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>docs_menu_principal/js/templatemo_script.js"></script>

    </body> 
</html>