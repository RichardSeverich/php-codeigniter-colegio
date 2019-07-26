<?php  
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_cursos/registrar_cursos',$attributes) // primero  pongo el archivo php luego la funcion
?>
<?php 
	$ciusuario =  array (
		'name' => 'ciusuario',
		'placeholder' => 'Escribe cedula de identidad min 7 digitos',
		  //'type' => 'number',
		'pattern'   => '[0-9]{7}',
		 'required' => 'required'
		// 'type' => 'email'  << por ejemplo para poner otras de html
	);

?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php echo link_tag('docs_formularios/css/richard-style.css');  ?>

</head>

<body>
			<h1 id="ff-proof" class="ribbon">REGISTRO DE CURSOS &nbsp;&nbsp;</h1>
			
			<div class="apple">
			<div class="top"><span></span></div>
			<div class="butt"><span></span></div>
			<div class="bite"></div>
			</div>
			

	 <fieldset id="inputs">		
					

			
				<div>				  
						<?php echo form_label('AÑO GESTION','aniogestion'); ?> 
			   </div>
				  <div>			
						<select name="aniogestion" class="form" id = "inputs"  style = "width:242px; height:40px"  >
							<?php 
							foreach ($gestiones -> result() as $row)
								{
									echo' <option value="'.$row->aniogestion.'">'.$row->aniogestion.'</option>';
								} 
							?>
                       </select>
                  </div>
				  
				  <div>				  
						<?php echo form_label('NIVEL EDUCATIVO','niveleducativo'); ?> 
				  </div>
                  <div>
						<select name="niveleducativo" class="form" id = "inputs"  style = "width:242px; height:40px"  >
							<option value="PRE-ESCOLAR">PRE-ESCOLAR</option>
							<option value="PRIMARIA">PRIMARIA</option>
							<option value="SECUNDARIA">SECUNDARIA</option>
                       </select>
			      </div>
				
				 <div>				  
						<?php echo form_label('NOMBRE CURSO','nombrecurso'); ?> 
				  </div>
                  <div>
						<select name="nombrecurso" class="form" id = "inputs"  style = "width:242px; height:40px"  >		
							<option value="PRIMERO">PRIMERO</option>
							<option value="SEGUNDO">SEGUNDO</option>
							<option value="TERCERO">TERCERO</option>
							<option value="CUARTO">CUARTO</option>
							<option value="QUINTO">QUINTO</option>
							<option value="SEXTO">SEXTO</option>
                       </select>
			      </div>
				  
				  <div>				  
						<?php echo form_label('PARALELO CURSO','paralelocurso'); ?> 
				  </div>
                  <div>
						<select name="paralelocurso" class="form" id = "inputs"  style = "width:242px; height:40px"  >		
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
                       </select>
			      </div>


                  
				  
	</fieldset>			  
				  <div>					
					<fieldset id="actions">
					  
					  <?php         
					        $attributes = array('id' => 'submit','name' => 'btnregistrocursos');
							//$attributes = array('class' => 'btn btn-primary btn-block btn-large','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
							echo form_submit($attributes,'REGISTRAR CURSOS');
							echo form_close();
					  ?>
					  
					  
					  
					  <?php  
							$attributes = array('class' => 'form', 'id' => 'btnsalir');
							echo form_open('controlador_cursos/direccionar_menu_principal',$attributes); // primero  pongo el archivo php luego la funcion
						

							$attributes = array('id' => 'submit','name'=>'volvermenu');   //volver menu
							echo form_submit($attributes,'VOLVER AL MENU PRINCIPAL');
							echo form_close();
					   ?>

					   </fieldset>
				  </div>
	
		

</body>

</html>