<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');
echo form_open('controlador_dosificacion/mostrar_dosificacion/'.$ciusuario,$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">BUSCAR DOSIFICACION</h1>
	<h4 class="yellow">Datos de Dosificacion:</h4>

<center> 	
<?php
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
	   echo form_submit($attributes,'BUSCAR');	
	   echo form_close();
		
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_dosificacion/direccionar_menu_principal/'.$ciusuario,$attributes); 
	   
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR AL MENU PRINCIPAL');
	   echo form_close();
    
	
	    $buscar =  array (
		'name' => 'buscar',
		'placeholder' => 'Escribe cedula de identidad 7 digitos',
		'style' => 'width:242px; height:40px'
		
	    );
	   
	    echo form_label('BUSCAR POR NIT:','buscar'); 
	    echo form_input($buscar) ;

?>
</center>


	<table class="container">
		<tr class="">  
			
			<td class="price" align="center" >NIT COLEGIO</td>
			<td  class="price"align="center">NUMERO DE AUTORIZACION</td>
			<td  class="price"align="center">NUMERO INICIO</td>
			<td class="price" align="center">FECHA LIMITE DE EMICION</td>
			<td class="price" align="center">LLAVE DOCIFICACION</td>
			<td class="price" align="center">MODIFICAR</td>
			<td class="price" align="center">ELIMINAR</td>
		</tr>
		
		<tr class="">

			<?php
				if($dosificacion != FALSE)
				{
					foreach ($dosificacion -> result() as $row)
					{
						echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->nitcolegio.'  </td>';
								echo '<td>'.$row->numautorizacion.'  </td>';
								echo '<td>'.$row->numeroinicio.'  </td>';
								echo '<td>'.$row->fechalimiteemicion.'  </td>';
								echo '<td>'.$row->llavedosificacion.'  </td>';
								
								echo '<td><a href="'.base_url().'index.php/controlador_dosificacion/direccionar_modificar/'.$row->numdosificacion.'/'.$ciusuario.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
								
								echo '<td><a href="'.base_url().'index.php/controlador_dosificacion/eliminar_dosificacion/'.$row->numdosificacion.'/'.$ciusuario.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 

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