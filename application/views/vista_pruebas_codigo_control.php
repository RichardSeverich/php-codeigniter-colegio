<?php  
$attributes = array('class' => 'form', 'id' => 'btnmostrarpruebas');
echo form_open('controlador_pruebas/registrar_codigo_control',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>
<head>
	<?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
	<title>403 Forbidden</title>
</head>
<body>
	<h1 class="blue">Pruebas Codigo de Control</h1>
	<h4 class="yellow">Datos del codigo de control:</h4>

<center> 	
<?php


	    $numautorizacion=  array (
		'name' => 'numautorizacion',
		'placeholder' => 'NUM AUTORIZACION',
		'style' => 'width:242px; height:40px'
		
	    );
	    $numfactura =  array (
		'name' => 'numfactura',
		'placeholder' => 'NUM FACTURA',
		'style' => 'width:242px; height:40px'
		
	    );
		 $nitci =  array (
		'name' => 'nitci',
		'placeholder' => 'nit o ci',
		'style' => 'width:242px; height:40px'
		
	    );
	     $fecha =  array (
		'name' => 'fecha',
		'placeholder' => 'fecha',
		'style' => 'width:242px; height:40px'
		
	    );
		 $monto =  array (
		'name' => 'monto',
		'placeholder' => 'monto',
		'style' => 'width:242px; height:40px'
		
	    );
		 $llave =  array (
		'name' => 'llave',
		'placeholder' => 'llave',
		'style' => 'width:242px; height:40px'
		
	    );
		
		echo '<center>';
		
		echo '<div>';
		echo form_label('AUTORIZACION:','numautorizacion'); 
		echo '</div>'; 
		
		echo '<div>';
	    echo form_input($numautorizacion) ;
		echo '</div>'; 
		echo '<br>';
		
		
		
		
		echo '<div>';
		echo form_label('N FACTURA:','numfactura'); 
		echo '</div>';
		echo '<div>';
	    echo form_input($numfactura) ;
		echo '</div>';
		echo '<br>';
		
		
		
		
		echo '<div>';
		echo form_label('NIT O CI  :','nitci'); 
	  	echo '</div>';
		echo '<div>';
		echo form_input($nitci) ;
		echo '</div>';
		echo '<br>';
		
		
		
		echo '<div>';
		echo form_label('FECHA   : ','fecha'); 
		echo '</div>';
	    echo '<div>';
		echo form_input($fecha) ;
		echo '</div>';
		echo '<br>';
		
		
		echo '<div>';
		echo form_label('MONTO   :','monto'); 
		echo '</div>';
		echo '<div>';
		echo form_input($monto) ;
		echo '</div>';
		echo '<br>';
		
		
		echo '<div>';
		echo form_label('LLAVE   :','llave'); 
		echo '</div>';
	    echo '<div>';
		echo form_input($llave) ;
		echo '</div>';
		echo '<br>';
		
		echo '<div>';
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnregistrar','name' => 'btnregistrar');
	   echo form_submit($attributes,'REGISTRAR');	
	   echo '</div>';
	   echo form_close();
	
	   
	   $attributes = array('class' => 'form', 'id' => 'btnsalir');
	   echo form_open('controlador_pruebas/direccionar_menu_principal',$attributes); 
	  
	   echo '<div>';
	   $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999','id' => 'btnsalir','name' => 'btnsalir');
	   echo form_submit($attributes,'SALIR AL MENU PRINCIPAL');
	   echo '</div>';
	   echo form_close();
    
	  echo '</center>';
	
	  
	   

?>
</center>


	<table class="container">
		<tr class="">  
			
			<td class="price" align="center" >NUM AUTORIZACION</td>
			<td  class="price"align="center">NRO. FACTURA</td>
			<td  class="price"align="center">NIT_CI</td>
			<td class="price" align="center">FECHA</td>
			<td class="price" align="center">MONTO</td>
			<td class="price" align="center">LLAVE</td>
			<td class="price" align="center">CODIGO DE CONTROL</td>
		</tr>
		
		<tr class="">

			<?php
				if($pruebacodigodecontrol != FALSE)
				{
					foreach ($pruebacodigodecontrol -> result() as $row)
					{
						echo '<tr >';
						
							  //echo '<td>';
								echo '<td>'.$row->numautorizacion.'</td>';
								echo '<td>'.$row->numfactura.'  </td>';
								echo '<td>'.$row->nitci.'  </td>';
								echo '<td>'.$row->fecha.'  </td>';
								echo '<td>'.$row->monto.'  </td>';
								echo '<td>'.$row->llave.'  </td>';
								echo '<td>'.$row->codigocontrol.'  </td>';

								//echo '<td><a href="'.base_url().'index.php/controlador_usuarios/direccionar_modificar/'.$row->ciusuario.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
								
								echo '<td><a href="'.base_url().'index.php/controlador_pruebas/eliminar_codigocontrol/'.$row->codigocontrol.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 

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