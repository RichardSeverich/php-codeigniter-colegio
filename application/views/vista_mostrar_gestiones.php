<?php
$attributes = array('class' => 'form', 'id' => 'btnmostrarusuarios');
echo form_open('controlador_gestion/mostrar_gestiones', $attributes); 
// primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>MOSTRAR GESTIONES EDUCATIVAS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <h1 class="blue">BUSCAR GESTION</h1>
  <h4 class="yellow">Datos de las Gestiones:</h4>

  <center>
    <?php
    $attributes = array('style' => 'width:242px; height:70px;      color: #FFFFFF; background-color: #009999', 'id' => 'btnbuscar', 'name' => 'btnbuscar');
    echo form_submit($attributes, 'BUSCAR');
    echo form_close();
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_usuarios/direccionar_menu_principal', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;      color: #FFFFFF; background-color: #009999', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'SALIR AL MENU PRINCIPAL');
    echo form_close();
    $buscar =  array(
      'name' => 'buscar',
      'placeholder' => 'Escribe anio 4 digitos',
      'pattern'   => '[0-9]{4}',
      'style' => 'width:242px; height:40px'
    );
    echo form_label('BUSCAR POR ANIO GESTION   :', 'buscar');
    echo form_input($buscar);
    ?>
  </center>
  <table class="container">
    <tr class="">
      <td class="price" align="center">AÑO DE LA GESTION</td>
      <td class="price" align="center">PENSION PRE-ESCOLAR BS</td>
      <td class="price" align="center">PENSION PRIMARIA BS</td>
      <td class="price" align="center">PENSION SECUNDARIA BS</td>
      <td class="price" align="center">DESCUENTO SEGUNDO HERMANO %</td>
      <td class="price" align="center">DESCUENTO TERCER HERMANO %</td>
      <td class="price" align="center">DESCUENTO CUARTO HERMANO %</td>
      <td class="price" align="center">MODIFICAR</td>
      <td class="price" align="center">ELIMINAR</td>
    </tr>

    <tr class="">
      <?php
      if ($gestiones != FALSE) {
        foreach ($gestiones->result() as $row) {
          echo '<tr >';
          //echo '<td>';
          echo '<td>' . $row->aniogestion . ' </td>';
          echo '<td>' . $row->montopreescolar . ' bs</td>';
          echo '<td>' . $row->montoprimaria . ' bs</td>';
          echo '<td>' . $row->montosecundaria . ' bs</td>';
          echo '<td>' . $row->descuentosegundohermano . ' %</td>';
          echo '<td>' . $row->descuentotercerhermano . ' %</td>';
          echo '<td>' . $row->descuentocuartohermano . ' %</td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_gestion/direccionar_modificar/' . $row->aniogestion . '">' . form_submit($attributes, 'MODIFICAR') . '</a></td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_gestion/eliminar_gestion/' . $row->aniogestion . '">' . form_submit($attributes, 'ELIMINAR') . '</a></td>';
          echo form_close();
          //echo '</td>';  ?ciusuario=
          echo '</tr>';
        }
      } else {
        echo 'NO HAY REGISTROS';
      }
      ?>
    </tr>
  </table>

</body>

</html>