<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
echo form_open('controlador_pensiones/mostrar_inscripciones/'.$ciusuario.'',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">MOSTRAR INSCRIPCIONES  PENSIONES</h1>
	<h4 class="yellow">Datos de los cursos:</h4>

<center> 	
<?php

	
	   
	   
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
	   echo form_submit($attributes,'BUSCAR');	
	   echo form_close();
		
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_pensiones/direccionar_menu_principal/'.$ciusuario.'',$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR AL MENU PRINCIPAL');
	   echo form_close();
    
	
	    $buscarci =  array (
		'name' => 'buscarci',
		'placeholder' => 'Escribe CI ESTUDIANTE',
		'style' => 'width:242px; height:40px'
		
	    );
	   
	    echo form_label('BUSCAR CI ESTUDIANTE PONER CI COMPLETO :','buscar'); 
	    echo form_input($buscarci) ;
		
		
	

?>
		  DEL LA GESTION
	      <select name="buscar" class="form" id = "inputs"  style = "width:242px; height:40px"  >   
				
				<option value="">TODAS</option>
				<?php
					$aniogestionAnterior='0';				
					foreach ($cursos2 -> result() as $row0)   
					{
				?>
						<?php			
							if($aniogestionAnterior!=$row0->aniogestion)
							{
						?>	
								<option     value = "<?php echo $row0->aniogestion; ?>" 
								> 						
									<?php echo $row0->aniogestion; ?>				
								</option>
						<?php			
							}
							$aniogestionAnterior=$row0->aniogestion;
						?>	
				<?php			
					
					}
				?>	
				
							
        </select>

</center>
	<table class="container">
		<tr class="">  
			<td class="price" align="center" >CI ESTUDIANTE</td>
			<td  class="price"align="center">ANIOGESTION</td>
			<td  class="price"align="center">CURSO</td>
			<td  class="price"align="center">NIVEL</td>
			<td  class="price"align="center">PARALELO</td>
			<td  class="price"align="center">NUMERO HERMANO</td>
			<td class="price" align="center">PAGAR PENSION</td>
			

		</tr>
		
		<tr class="">

			<?php
			
			$numeropensiones="0";
			$saldodeudor=0;
		    $montopension=0;
			$contador=0;
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
								
								echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
								.$row->numinscripcion.'/'
								.$saldodeudor.'/'
								.$montopension.'/'
								.$numeropensiones.'/'
								.$row->ciestudiante.'/'
								.$contador.'/'
								.$ciusuario.
								'">'.form_submit($attributes,'PAGAR PENSIONES').'</a></td>';   

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