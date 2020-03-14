<?php
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');
echo form_open('controlador_pensiones/mostrar_pensiones/' . $ciusuario . '', $attributes); 
// primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>403 Forbidden</title>
</head>

<body>
  <h1 class="blue">BUSCAR PENSIONES</h1>
  <h4 class="yellow">Datos de las pensiones:</h4>
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
      'placeholder' => 'Escribe cedula de identidad 7 digitos',
      'style' => 'width:242px; height:40px'
    );
    echo form_label('BUSCAR POR CI : ', 'buscar');
    echo form_input($buscar);
    ?>
  </center>
  <table class="container">
    <tr class="">
      <td class="price" align="center">CI ESTUDIANTE</td>
      <td class="price" align="center">PENSION 1</td>
      <td class="price" align="center">PENSION 2</td>
      <td class="price" align="center">PENSION 3</td>
      <td class="price" align="center">PENSION 4</td>
      <td class="price" align="center">PENSION 5</td>
      <td class="price" align="center">PENSION 6</td>
      <td class="price" align="center">PENSION 7</td>
      <td class="price" align="center">PENSION 8</td>
      <td class="price" align="center">PENSION 9</td>
      <td class="price" align="center">PENSION 10</td>
      <td class="price" align="center">SALDO DEUDOR</td>
      <td class="price" align="center">DESCUENTO</td>
      <td class="price" align="center">MONTO PENSION</td>
    </tr>
    <tr class="">
      <?php
      if ($pensiones != FALSE) {
        foreach ($inscripciones->result() as $row1) {
          foreach ($pensiones->result() as $row) {
            if ($row->numinscripcion == $row1->numinscripcion) {
              echo '<tr >';
              //echo '<td>';
              echo '<td>' . $row1->ciestudiante . '  </td>';
              echo '<td>' . $row->pension1 . '  </td>';
              echo '<td>' . $row->pension2 . '  </td>';
              echo '<td>' . $row->pension3 . '  </td>';
              echo '<td>' . $row->pension4 . '  </td>';
              echo '<td>' . $row->pension5 . '  </td>';
              echo '<td>' . $row->pension6 . '  </td>';
              echo '<td>' . $row->pension7 . '  </td>';
              echo '<td>' . $row->pension8 . '  </td>';
              echo '<td>' . $row->pension9 . '  </td>';
              echo '<td>' . $row->pension10 . '  </td>';
              echo '<td>' . $row->saldodeudor . ' Bs</td>';
              echo '<td>' . $row->descuento . ' %</td>';
              echo '<td>' . $row->montopension . ' Bs</td>';
              //echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_modificar_pensiones/'.$row->numinscripcion.'">'.form_submit($attributes,'MODIFICAR').'</a></td>';   
              //echo '<td><a href="'.base_url().'index.php/controlador_pensiones/eliminar_pensiones/'.$row->numinscripcion.'">'.form_submit($attributes,'ELIMINAR').'</a></td>'; 
              echo form_close();
              //echo '</td>';  ?ciusuario=
              echo '</tr>';
            }
          }
          // termina estudiantes
        } // aqui termina inscripciones

      } else {
        echo 'NO HAY REGISTROS';
      }
      ?>

    </tr>
  </table>

</body>

</html>