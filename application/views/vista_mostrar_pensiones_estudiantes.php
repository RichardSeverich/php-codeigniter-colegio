<?php  
//$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
//echo form_open('controlador_pensiones/generarfacturas',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="">INFORMACION DE PENSIONES</h1>
		<?php
		foreach ($estudiante -> result() as $row0)   // de cada curso muestra las inscripciones que corresponde
				{
				 
				}
	    ?>
	<h1 class="blue"> CI :  <?php echo $row0->ciestudiante     ?> </h1>
	<h1 class="blue"> NOMBRES  <?php  echo $row0->nombres      ?> </h1>
	<h1 class="blue">APELLIDOS  <?php  echo $row0->apellidos      ?> </h1>
	
	<h4 class="yellow">Datos de las pensiones:</h4>

<center> 

<?php 
if($pensiones != FALSE)
				{
					foreach ($pensiones -> result() as $row)
					{
						
					}
				}
				
?>			
	


<div>	
	

</div>
	
<div>


</div>
	<!-- DE ESTA FORMA SE ABRE UNA PAGINA DESTE OTRA  DESTE HTML
	<input style="width:242px; height: 70px; color = #FFFFFF; background-color: #009999"  
	type="button" value="GENERAR FACTURA" 
	 onclick="window.open('<?php //echo base_url(); ?>index.php/controlador_pensiones/generar_facturas/<?php //echo $row->montopension ?>/<?php //echo $contador ?>','nuevaVentana','width=300, height=400')" />
	--> 
<?php
		    ///BOTON SALIR

	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_pensiones/direccionar_mostrar_a_estudiante_cursos_cursados/'.$ciestudiante.'',$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;       color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'ATRAS');
	   echo form_close();
?>	

	   
<?php	   
	   
		
		//echo $contador;
	
?>

</center>

	<table class="container">
		
		<tr class="">

			<?php
				 
				 $attributes = array('style'=>'width:220px; height:60px;  color: #FFFFFF; background-color: #009999','id' => 'btnpagar','name' => 'btnpagar');
				 $attributes1 = array('style'=>'width:220px; height:60px;  color: #FFFFFF; background-color: #DC143C','id' => 'btnpagar','name' => 'btnpagar');
			 
				if($pensiones != FALSE)
				{
					foreach ($pensiones -> result() as $row)
					{
						//SALDO DEUDOR
						echo '<tr >';
								echo '<td class="price" align="center">SALDO DEUDOR</td>';
								echo '<td>'.$row->saldodeudor.' Bs</td>';
								
								
						echo '</tr>';
						//DESCUENTO
						echo '<tr >';
								echo '<td class="price" align="center">DESCUENTO</td>';
								echo '<td>'.$row->descuento.' % </td>';
						echo '</tr>';
						//MONTO PENSION
						echo '<tr >';
								echo '<td  class="price"align="center">MONTO PENSION</td>';
								echo '<td>'.$row->montopension.' Bs </td>';
						echo '</tr>';	
						//PENSION 1
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 1</td>';
								echo '<td>'.$row->pension1.'  </td>';
								
								
						echo '</tr>';
						//PENSION 2
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 2</td>';
								echo '<td>'.$row->pension2.'  </td>';
									
								
						echo '</tr>';
						//PENSION 3
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 3</td>';
								echo '<td>'.$row->pension3.'  </td>';
									
								
						echo '</tr>';
						//PENSION 4
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 4</td>';
								echo '<td>'.$row->pension4.'  </td>';
									
								
						echo '</tr>';
						//PENSION 5
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 5</td>';
								echo '<td>'.$row->pension5.'  </td>';
									
								
								
						echo '</tr>';
						//PENSION 6
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 6</td>';
								echo '<td>'.$row->pension6.'  </td>';
								
									
								
						echo '</tr>';
						//PENSION 7
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 7</td>';
								echo '<td>'.$row->pension7.'  </td>';
									
								
						echo '</tr>';
							//PENSION 8
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 8</td>';
								echo '<td>'.$row->pension8.'  </td>';
									
								
						echo '</tr>';	
							//PENSION 9
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 9</td>';
								echo '<td>'.$row->pension9.'  </td>';
									
								
						echo '</tr>';		
							//PENSION 10
						echo '<tr >';
								echo '<td class="price" align="center">PENSION 10</td>';
								echo '<td>'.$row->pension10.'  </td>';
									
								
						echo '</tr>';		
								
							
							echo form_close();
					 
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