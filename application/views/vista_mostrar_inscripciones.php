<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
echo form_open('controlador_inscripciones/mostrar_inscripciones',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">BUSCAR INSCRIPCIONES</h1>
	<h4 class="yellow">Datos de las Inscripciones:</h4>

<center> 	
<?php


	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
	   echo form_submit($attributes,'BUSCAR');	
	   echo form_close();
		
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_inscripciones/direccionar_menu_principal',$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR AL MENU PRINCIPAL');
	   echo form_close();
    
	
	    $buscar =  array (
		'name' => 'buscar',
		'placeholder' => 'Escribe AÑO',
		'style' => 'width:242px; height:40px'
		
	    );
	   
	    echo form_label('BUSCAR POR AÑO GESTION :','buscar'); 
	    echo form_input($buscar) ;

?>
</center>


	<table class="container">
		<tr class="">  
			<td class="price" align="center" >CI ESTUDIANTE</td>
			<td  class="price"align="center">ANIOGESTION</td>
			<td  class="price"align="center">CURSO</td>
			<td  class="price"align="center">NIVEL</td>
			<td  class="price"align="center">PARALELO</td>
			<td  class="price"align="center">NUMERO HERMANO</td>
			<td class="price" align="center">MODIFICAR</td>
			<td class="price" align="center">ELIMINAR</td>

		</tr>
		
		<tr class="">

			<?php
				
			if($inscripciones != FALSE)
			{
				foreach ($cursos -> result() as $row2)   // de cada curso muestra las inscripciones que corresponde
				{
					
					foreach ($inscripciones -> result() as $row)
					{
						if($row2->numcurso==$row->numcurso)
						{
								echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->ciestudiante.'  </td>';
								echo '<td>'.$row->aniogestion.'  </td>';
								echo '<td>'.$row2->nombrecurso.'  </td>';
								echo '<td>'.$row2->niveleducativo.'  </td>';
								echo '<td>'.$row2->paralelocurso.'  </td>';
								echo '<td>'.$row->numhermano.'  </td>';
								
								echo '<td><a href="'.base_url().'index.php/controlador_inscripciones/direccionar_modificar_inscripciones_elegir_cursos/'.$row->numinscripcion.'/'.$row->aniogestion.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
								
								echo '<td><a href="'.base_url().'index.php/controlador_inscripciones/eliminar_inscripciones/'.$row->numinscripcion.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 

							echo form_close();
					 
						    //echo '</td>';  ?ciusuario=
						
						    echo '</tr>';
						}
				   }
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