<?php  
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_estudiantes/registrar_estudiantes',$attributes) // primero  pongo el archivo php luego la funcion
?>
<?php 
	$ciestudiante =  array (
		'name' => 'ciestudiante',
		'placeholder' => 'Escribe cedula de identidad min 7 digitos',
		  //'type' => 'number',
		'pattern'   => '[0-9]{7}',
		 'required' => 'required'
		// 'type' => 'email'  << por ejemplo para poner otras de html
	);

	$nombres =  array (
		'name' => 'nombres',
		'placeholder' => 'Escribe nombres min 3 caracteres',
		'type' => 'text',
		'pattern'   => '[A-za-z ]{3,40}',
		 'required' => 'required'
		 
	);
	
	
	$apellidos =  array (
		'name' => 'apellidos',
		'placeholder' => 'Escribe apellidos min 3 caracteres',
		'type' => 'text',
	    'pattern'   => '[A-za-z ]{3,40}',
		 'required' => 'required'
	
	);
	$fechanacimiento =  array (
		'type' => 'date',
		'max' => '2011-01-01',
		'min' => '1997-01-01',
		'name' => 'fechanacimiento',
		'placeholder' => 'fecha de nacimiento de 1997 a 2011'

	);
	
	$direccion =  array (
		
		'name' => 'direccion',
		'placeholder' => 'Escribe direccion min 5 caracteres',
		'type' => 'text',
		'pattern'   => '[0-9A-za-z.- ]{5,50}',
		 'required' => 'required'
	
	);
	
	$telefono =  array (
		
		'name' => 'telefono',
		'placeholder' => 'Escribe telefono o celular min 7 caracteres',
		//'type' => 'number',
	    'pattern'   => '[0-9]{7,20}',
		'required' => 'required'
		
	);
	
	$email =  array (
		'name' => 'email',
		'placeholder' => 'Escribe Correo electronico min 4 caracteres',
		'type'=> 'email',
		'pattern'=>'.{4,40}',
		'required' => 'required'
		
	);
	
		$ciapoderado =  array (
		'name' => 'ciapoderado',
		'placeholder' => 'Escribe cedula de identidad min 7 digitos',
		  //'type' => 'number',
		'pattern'   => '[0-9]{7}',
		 'required' => 'required'
		// 'type' => 'email'  << por ejemplo para poner otras de html
	);
	
		$nombresapoderado =  array (
		'name' => 'nombresapoderado',
		'placeholder' => 'Escribe nombres min 3 caracteres',
		'type' => 'text',
		'pattern'   => '[A-za-z ]{3,20}',
		 'required' => 'required'
		
	);
	
		$apellidosapoderado =  array (
		'name' => 'apellidosapoderado',
		'placeholder' => 'Escribe apellidos min 3 caracteres',
		'type' => 'text',
	    'pattern'   => '[A-za-z ]{3,20}',
		 'required' => 'required'
	
	);
	

?>
<!DOCTYPE html>
<head>
	
	<?php echo link_tag('docs_formularios/css/richard-style.css');  ?>

</head>

<body>
			<h1 id="ff-proof" class="ribbon">REGISTRO ESTUDIANTES &nbsp;&nbsp;</h1>
			
			<div class="apple">
			<div class="top"><span></span></div>
			<div class="butt"><span></span></div>
			<div class="bite"></div>
			</div>
			

	 <fieldset id="inputs">		
					

				  <div>		
						<?php echo form_label('CEDULA DE IDENTIDAD','ciestudiante') // como segundo parametro el  nombre del control al que pertenece  ?> 
						<?php echo form_input($ciestudiante); ?> 
			
                  </div>
			

                  <div>
						 <?php echo form_label('NOMBRES','nombres') ?> 
					     <?php echo form_input($nombres) ?>
			
						<?php echo form_label('APELLIDOS','apellidos') ?> 
						<?php echo form_input($apellidos) ?>
			      </div>
				

                  <div>
									<?php echo form_label('FECHA DE NACIMIENTO','fechanacimiento') ?> 
									<?php echo form_input($fechanacimiento) ?>
                  </div>

                  <div>
										<?php echo form_label('DIRECCION','direccion') ?> 
										<?php echo form_input($direccion) ?>
										
										<?php echo form_label('TELEFONOS','telefono') ?>
										<?php echo form_input($telefono) ?>
				</div>
			 				 					
				<div>					
										<?php echo form_label('CORREO','email') ?>

				 </div>
				 <div>					
										
										<?php echo form_input($email) ?>
				 </div>
				     <div>
										<?php echo form_label('CEDULA DE IDENTIDAD','ciapoderado') ?>
										<?php echo form_input($ciapoderado) ?>
					 </div>
					 <div>
										
										<?php echo form_label('NOMBRES APODERADO','nombresapoderado') ?>
										<?php echo form_input($nombresapoderado) ?>
										
										<?php echo form_label('APELLIDOS APODERADO','apellidosapoderado') ?>
										<?php echo form_input($apellidosapoderado) ?>
										
                    </div>
				  
	</fieldset>			  
				  <div>					
					<fieldset id="actions">
					  
					  <?php         
					        $attributes = array('id' => 'submit','name' => 'btnregistroestudiantes');
							//$attributes = array('class' => 'btn btn-primary btn-block btn-large','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
							echo form_submit($attributes,'REGISTRAR ESTUDIANTES');
							echo form_close();
					  ?>
					  
					  
					  
					  <?php  
							$attributes = array('class' => 'form', 'id' => 'btnsalir');
							echo form_open('controlador_estudiantes/direccionar_menu_principal',$attributes); // primero  pongo el archivo php luego la funcion
						

							$attributes = array('id' => 'submit','name'=>'volvermenu');   //volver menu
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
					   ?>

					   </fieldset>
				  </div>
	
		

</body>

</html>