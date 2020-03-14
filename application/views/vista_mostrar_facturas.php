<?php
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');
echo form_open('controlador_pensiones/mostrar_facturas/' . $ciusuario . '', $attributes); // primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>403 Forbidden</title>
</head>

<body>
  <h1 class="blue">DATOS FACTURAS</h1>
  <h4 class="yellow">Datos de las facturas:</h4>
  <center>
    <?php
    $attributes = array('style' => 'width:242px; height:70px;      color: #FFFFFF; background-color: #009999', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
    echo form_submit($attributes, 'BUSCAR');
    echo form_close();
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_pensiones/direccionar_menu_principal/' . $ciusuario . '', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;      color: #FFFFFF; background-color: #009999', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'SALIR AL MENU PRINCIPAL');
    echo form_close();
    $buscar =  array(
      'name' => 'buscar',
      'placeholder' => 'Escribe cedula de identidad 7 Estudiante',
      'style' => 'width:242px; height:40px'
    );
    echo form_label('BUSCAR POR CI ESTUDIANTE : ', 'buscar');
    echo form_input($buscar);
    ?>

  </center>
  <table class="container">
    <tr class="">
      <td class="price" align="center">CI ESTUDIANTE</td>
      <td class="price" align="center">NITCOLEGIO</td>
      <td class="price" align="center">NUM AUTORIZACION</td>
      <td class="price" align="center">NUM FACTURA</td>
      <td class="price" align="center">CIUSUARIO</td>
      <td class="price" align="center">NIT CLIENTE</td>
      <td class="price" align="center">APELLIDO CLIENTE</td>
      <td class="price" align="center">CANTIDAD</td>
      <td class="price" align="center">FECHA FACTURACION</td>
      <td class="price" align="center">FECHA LIMITE</td>
      <td class="price" align="center">ELIMINAR</td>
    </tr>
    <tr class="">
      <?php
      //echo $ciusuario;
      if ($facturas != FALSE) {
        foreach ($dosificacion->result() as $row1) {
          foreach ($inscripciones->result() as $row0) {
            foreach ($facturas->result() as $row) {
              if ($ciestudiante) {
                if ($row->numdosificacion == $row1->numdosificacion & $row0->numinscripcion == $row->numinscripcion & $ciestudiante == $row0->ciestudiante) {
                  echo '<tr >';
                  //echo '<td>';
                  echo '<td>' . $row0->ciestudiante . '  </td>';
                  echo '<td>' . $row1->nitcolegio . '  </td>';
                  echo '<td>' . $row1->numautorizacion . '  </td>';
                  echo '<td>' . $row->numfactura . '  </td>';
                  echo '<td>' . $row->ciusuario . '  </td>';
                  echo '<td>' . $row->nitcliente . '  </td>';
                  echo '<td>' . $row->apellidocliente . '  </td>';
                  echo '<td>' . $row->cantidadtotal . '  </td>';
                  echo '<td>' . $row->fecha . '  </td>';
                  echo '<td>' . $row->fechalimiteemicion . '  </td>';
                  //echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_modificar_pensiones/'.$row->numinscripcion.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
                  echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/eliminar_facturas/' . $row->codfactura . '/'
                    . $row->numinscripcion . '/'
                    . $ciusuario .
                    '">' . form_submit($attributes, 'ANULAR FACTURA') . '</a></td>';
                  echo form_close();
                  //echo '</td>';  ?ciusuario=
                  echo '</tr>';
                }
              } // fin del si existe ciestudiante
              else {
                if ($row->numdosificacion == $row1->numdosificacion & $row0->numinscripcion == $row->numinscripcion) {
                  echo '<tr >';
                  //echo '<td>';
                  echo '<td>' . $row0->ciestudiante . '  </td>';
                  echo '<td>' . $row1->nitcolegio . '  </td>';
                  echo '<td>' . $row1->numautorizacion . '  </td>';
                  echo '<td>' . $row->numfactura . '  </td>';
                  echo '<td>' . $row->ciusuario . '  </td>';
                  echo '<td>' . $row->nitcliente . '  </td>';
                  echo '<td>' . $row->apellidocliente . '  </td>';
                  echo '<td>' . $row->cantidadtotal . '  </td>';
                  echo '<td>' . $row->fecha . '  </td>';
                  echo '<td>' . $row->fechalimiteemicion . '  </td>';
                  //echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_modificar_pensiones/'.$row->numinscripcion.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
                  echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/eliminar_facturas/' . $row->codfactura . '/'
                    . $row->numinscripcion . '/'
                    . $ciusuario .
                    '">' . form_submit($attributes, 'ANULAR FACTURA') . '</a></td>';
                  echo form_close();
                  //echo '</td>';  ?ciusuario=
                  echo '</tr>';
                }
              } //fin del else
            }
          } // termina inscripciones
        } // termina dosificacion

      } else {
        echo 'NO HAY REGISTROS';
      }
      ?>
    </tr>
  </table>

</body>

</html>