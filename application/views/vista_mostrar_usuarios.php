<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');
echo form_open('controlador_usuarios/mostrar_usuarios',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">BUSCAR USUARIOS</h1>
	<h4 class="yellow">Datos de los Usuarios:</h4>

<center> 	
<?php

	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
	   echo form_submit($attributes,'BUSCAR');	
	   echo form_close();
		
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_usuarios/direccionar_menu_principal',$attributes); 
	   
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
			
			<td class="price" align="center" >CI USUARIO</td>
			<td  class="price"align="center">CONTRASENA</td>
			<td  class="price"align="center">TIPO USUARIO</td>
			<td class="price" align="center">NOMBRES</td>
			<td class="price" align="center">APELLIDOS</td>
			<td class="price" align="center">FECHA DE NACIMIENTO</td>
			<td class="price" align="center">DIRECCION</td>
			<td class="price" align="center">TELEFONO</td>
			<td class="price" align="center">EMAIL</td>
			<td class="price" align="center">MODIFICAR</td>
			<td class="price" align="center">ELIMINAR</td>
		</tr>
		
		<tr class="">

			<?php
				if($usuarios != FALSE)
				{
					foreach ($usuarios -> result() as $row)
					{
						echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->ciusuario.'  </td>';
								echo '<td>'.$row->contrasena.'  </td>';
								echo '<td>'.$row->tipo.'  </td>';
								echo '<td>'.$row->nombres.'  </td>';
								echo '<td>'.$row->apellidos.'  </td>';
								echo '<td>'.$row->fechanacimiento.'  </td>';
								echo '<td>'.$row->direccion.'  </td>';
								echo '<td>'.$row->telefono.'  </td>';
								echo '<td>'.$row->email.'</td>';      
					        	
								echo '<td><a href="'.base_url().'index.php/controlador_usuarios/direccionar_modificar/'.$row->ciusuario.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
								
								echo '<td><a href="'.base_url().'index.php/controlador_usuarios/eliminar_usuarios/'.$row->ciusuario.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 

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