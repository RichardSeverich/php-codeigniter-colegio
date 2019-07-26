<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');

echo form_open('controlador_inscripciones/mostrar_estudiantes/'.
			$numcurso.'/'.
			$aniogestion.'/'.
			$niveleducativo.'/'.
			$nombrecurso.'/'.
			$paralelocurso
.'',$attributes); 										// primero  pongo el archivo php luego la funcion


?>
<html>
<head>
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<center> 	
	<h1 class="">INSCRIBIR ESTUDIANTES GESTION <?php echo $aniogestion; ?>  </h1>
	<h1 class="blue">NIVEL EDUCATIVO <?php echo $niveleducativo; ?>  </h1>
	<h1 class="blue">CURSO <?php echo $nombrecurso; ?>  </h1>
	<h1 class="blue">PARALELO <?php echo $paralelocurso; ?>  </h1>
	<h3 class="yellow">Datos de los estudiantes:</h3>
	</center> 
<center> 	
<?php
		
	  
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
	   echo form_submit($attributes,'BUSCAR ESTUDIANTES');	
	   echo form_close();
		
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_estudiantes/direccionar_menu_principal',$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR AL MENU PRINCIPAL');
	   echo form_close();
    
	
	    $buscar =  array (
		'name' => 'buscar',
		'placeholder' => 'Escribe cedula de identidad 7 digitos',
		'style' => 'width:242px; height:40px'
		
	    );
	   
	    echo form_label('BUSCAR POR CI:','buscar'); 
	    echo form_input($buscar) ;

?>
</center>


	<table class="container">
		<tr class="">  
			
			<td class="price" align="center" >CI ESTUDIANTES</td>
			<td  class="price"align="center">NOMBRES</td>
			<td  class="price"align="center">APELLIDOS</td>
			<td class="price" align="center">FECHA DE NACIMIENTO</td>
			<td class="price" align="center">DIRECCION</td>
			<td class="price" align="center">TELEFONOS </td>
			<td class="price" align="center">EMAIL</td>
			<td class="price" align="center">CI APODERADO </td>
			<td class="price" align="center">NOMBRES APODERADO </td>
			<td class="price" align="center">APELLIDOS APODERADO</td>
			<td class="price" align="center">INSCRIBIR</td>
		
		</tr>
		
		<tr class="">

			<?php
				if($estudiantes!= FALSE)
				{
					foreach ($estudiantes -> result() as $row)
					{
						echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->ciestudiante.'</td>';
								echo '<td>'.$row->nombres.'</td>';
								echo '<td>'.$row->apellidos.'</td>';
								echo '<td>'.$row->fechanacimiento.'</td>';
								echo '<td>'.$row->direccion.'</td>';
								echo '<td>'.$row->telefono.'</td>';
								echo '<td>'.$row->email.'</td>';  
								echo '<td>'.$row->ciapoderado.'</td>'; 
								echo '<td>'.$row->nombreapoderado.'</td>'; 
								echo '<td>'.$row->apellidoapoderado.'</td>'; 								
					        	
								//$datosinscripcion['ciestudiantes']= $row->$ciestudiante; << asi no funciona xD
								
								echo '<td><a href="'.base_url().'index.php/controlador_inscripciones/registrar_inscripcion/'.
								$row->ciestudiante.'/'.
								$numcurso.'/'.
								$aniogestion.'/'.
								$niveleducativo.'/'.
								$nombrecurso.'/'.
								$paralelocurso
								.'">'.form_submit($attributes,'INSCRIBIR').'</a></td>'; 
							 

							echo form_close();
					 
						//echo '</td>';  ?ciusuario=
						
						echo '</tr>';
					}
					
				}
				else
				{
					echo 'NO HAY REGISTROS';
					
				}
			?>	
			
		</tr>
	</table>
		

</body>
</html>