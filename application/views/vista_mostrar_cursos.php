<?php
$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
echo form_open('controlador_cursos/mostrar_cursos', $attributes); 
// primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>403 Forbidden</title>
</head>

<body>
  <h1 class="blue">BUSCAR CURSOS</h1>
  <h4 class="yellow">Datos de los cursos:</h4>
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
      'placeholder' => 'Escribe AÑO',
      'style' => 'width:242px; height:40px'
    );
    echo form_label('BUSCAR POR AÑO GESTION :', 'buscar');
    echo form_input($buscar);
    ?>
  </center>
  <table class="container">
    <tr class="">
      <td class="price" align="center">AÑO GESTION</td>
      <td class="price" align="center">NIVEL EDUCATIVO</td>
      <td class="price" align="center">NOMBRE CURSO</td>
      <td class="price" align="center">PARALELO CURSO</td>
      <td class="price" align="center">MODIFICAR</td>
      <td class="price" align="center">ELIMINAR</td>
    </tr>

    <tr class="">
      <?php
      if ($cursos != FALSE) {
        foreach ($cursos->result() as $row) {
          echo '<tr >';
          //echo '<td>';
          echo '<td>' . $row->aniogestion . '  </td>';
          echo '<td>' . $row->niveleducativo . '  </td>';
          echo '<td>' . $row->nombrecurso . '  </td>';
          echo '<td>' . $row->paralelocurso . '  </td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_cursos/direccionar_modificar/' . $row->numcurso . '">' . form_submit($attributes, 'MODIFICAR') . '</a></td>';
          echo '<td><a href="' . base_url() . 'index.php/controlador_cursos/eliminar_cursos/' . $row->numcurso . '">' . form_submit($attributes, 'ELIMINAR') . '</a></td>';
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