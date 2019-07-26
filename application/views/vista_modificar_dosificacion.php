<?php
foreach ($dosificacion -> result() as $row)
   {
   }  
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_dosificacion/modificar_dosificacion/'.$row->numdosificacion.'/'.$ciusuario.'',$attributes) // primero  pongo el archivo php luego la funcion
?>

<?php 
   
	$nitcolegio =  array (
		'name' => 'nitcolegio',
		'placeholder' => 'Escribe el NIT del colegio min 5 digitos',
		'pattern'   => '[0-9]{5,15}',
		'required' => 'required',
		'value' =>  $row->nitcolegio
	);
	
	$numautorizacion =  array (
		'name' => 'numautorizacion',
		'placeholder' => 'Escribe el numero de autorizacion min 5 digitos',
		'pattern'   => '[0-9]{5,15}',
		 'required' => 'required',
		 'value' =>  $row->numautorizacion
	
	);
	
		$numeroinicio =  array (
		'name' => 'numeroinicio',
		'placeholder' => 'Escribe el numero de inicio min 1 digito',
		'pattern'   => '[0-9]{1,10}',
		 'required' => 'required',
		 'value' =>  $row->numeroinicio
	
			);
			
		
		$fechalimiteemicion =  array (
		'type' => 'date',
		'min' => '2015-01-01',
		'max' => '2020-12-31',
		'name' => 'fechalimiteemicion',
		'placeholder' => 'fechalimiteemicion',
			'value' =>  $row->fechalimiteemicion

	);
				
		$llavedosificacion =  array (
			'name' => 'llavedosificacion',
			'placeholder' => 'llave dosificacion',
			'required' => 'required',
			'value' =>  $row->llavedosificacion
	);
	
?>
<!DOCTYPE html>
<head>
	
	<?php echo link_tag('docs_formularios/css/richard-style.css');  ?>

</head>

<body>
			<h1 id="ff-proof" class="ribbon">MODIFICAR DOSIFICACION &nbsp;&nbsp;</h1>
			
			<div class="apple">
			<div class="top"><span></span></div>
			<div class="butt"><span></span></div>
			<div class="bite"></div>
			</div>

	 <fieldset id="inputs">		
					

				 <div>		
						<?php echo form_label('NIT COLEGIO','nitcolegio') // como segundo parametro el  nombre del control al que pertenece  ?> 
						<?php echo form_input($nitcolegio); ?> 
			
                  </div>
				
                  <div>
						 <?php echo form_label('NUMERO DE AUTORIZACION','numautorizacion') ?> 

			      </div>
				  
				  <div>
					     <?php echo form_input($numautorizacion) ?>

			      </div>
				

                  <div>
									<?php echo form_label('NUMERO INICIO','numinicio') ?> 
									<?php echo form_input($numeroinicio) ?>
                  </div>

                  <div>
										<?php echo form_label('fechalimiteemicion','fechalimiteemicion') ?> 
										<?php echo form_input($fechalimiteemicion) ?>
										
									
				  </div>
				  
				      <div>
										<?php echo form_label('LLAVE DOSIFICACION','llavedosificacion') ?> 
										<?php echo form_input($llavedosificacion) ?>
										
									
				  </div>
				  
	</fieldset>			  
				  <div>					
					<fieldset id="actions">

					 <?php         
					        //BOTON MODIFICAR DOSIFICACION
							$attributes = array('id' => 'submit','name' => 'btnmodificardosificacion');
							echo form_submit($attributes,'MODIFICAR DOSIFICACION');
							echo form_close();
					  ?>
					  
					  <?php  
							//BOTON SALIR MENU PRINCIPAL
							$attributes = array('class' => 'form', 'id' => 'btnsalir');
							echo form_open('controlador_dosificacion/direccionar_menu_principal/'.$ciusuario,$attributes); // primero  pongo el archivo php luego la funcion
						

							$attributes = array('id' => 'submit','name'=>'volvermenu');   //volver menu
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
					   ?>

					   </fieldset>
				  </div>
	
		

</body>

</html>