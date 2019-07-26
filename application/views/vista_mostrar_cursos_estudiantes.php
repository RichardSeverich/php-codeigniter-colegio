<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">CURSOS CURSADOS ELIGE UN CURSO</h1>
	<h4 class="yellow">Datos de los cursos cursados:</h4>

<center> 	
<?php

	  

	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_pensiones/direccionar_salir_paginaweb',$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR');
	   echo form_close();
    


?>
</center>


	<table class="container">
		<tr class="">  
			<td class="price" align="center" >AÑO GESTION</td>
			<td  class="price"align="center">NIVEL EDUCATIVO</td>
			<td  class="price"align="center">NOMBRE CURSO</td>
			<td class="price" align="center">PARALELO CURSO</td>

		</tr>
		
		<tr class="">

			<?php
				if($cursos != FALSE)
				{
					foreach ($cursos -> result() as $row1)
					{
						foreach ($inscripciones -> result() as $row2)
					 {
							
						if($row1->numcurso==$row2->numcurso & $ciestudiante== $row2->ciestudiante)
						{
							echo '<tr >';
						
							  //echo '<td>';
									echo '<td>'.$row1->aniogestion.'  </td>';
									echo '<td>'.$row1->niveleducativo.'  </td>';
									echo '<td>'.$row1->nombrecurso.'  </td>';
									echo '<td>'.$row1->paralelocurso.'  </td>';
					        	
									echo '<td><a href="'.base_url().'index.php/controlador_pensiones/mostrar_pensiones_estudiantes/'.$ciestudiante.'/'.$row2->numinscripcion.'">'.form_submit($attributes,'ELEGIR').'</a></td>';   
								

								echo form_close();
					 
							//echo '</td>';  ?ciusuario=
						
							echo '</tr>';
							
						}  // fin del if
							
						} //fin inscripciones
					} // fin cursos
					
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