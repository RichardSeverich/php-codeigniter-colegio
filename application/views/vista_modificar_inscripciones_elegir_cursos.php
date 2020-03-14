<?php
//$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
//echo form_open('controlador_inscripciones/mostrar_cursos',$attributes); // primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>403 Forbidden</title>
</head>

<body>
  <h1 class="blue">MODIFICAR INSCRIPCION SELECCIONAR UN CURSO DE LA GESTION:
    <?php echo $aniogestion ?> </h1>
  <h4 class="yellow">Datos de los cursos:</h4>

  <center>
    <?php
    // $attributes = array('style'=>'width:242px; height:70px;      color: #FFFFFF; background-color: #009999' ,'id' => 'btnbuscar','name' => 'btnbuscar');
    // echo form_submit($attributes,'BUSCAR CURSO');  
    // echo form_close();
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_inscripciones/mostrar_inscripciones', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;      color: #FFFFFF; background-color: #009999', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'ATRAS');
    echo form_close();
    //  $buscar =  array (
    //'name' => 'buscar',
    //'placeholder' => 'Escribe AÑO',
    //'style' => 'width:242px; height:40px'
    //  );
    //echo form_label('BUSCAR POR AÑO GESTION :','buscar'); 
    //echo form_input($buscar) ;
    ?>
  </center>

  <table class="container">
    <tr class="">
      <td class="price" align="center">AÑO GESTION</td>
      <td class="price" align="center">NIVEL EDUCATIVO</td>
      <td class="price" align="center">NOMBRE CURSO</td>
      <td class="price" align="center">PARALELO CURSO</td>
      <td class="price" align="center">ELEGIR</td>
    </tr>
    <tr class="">
      <?php
      //echo $numinscripcion;
      if ($cursos != FALSE) {
        foreach ($cursos->result() as $row) {
          echo '<tr >';
          //echo '<td>';
          echo '<td>' . $row->aniogestion . ' </td>';
          echo '<td>' . $row->niveleducativo . ' </td>';
          echo '<td>' . $row->nombrecurso . '  </td>';
          echo '<td>' . $row->paralelocurso . '  </td>';
          //$datosinscripcion['numcurso']= $row->numcurso;
          //$datosinscripcion['aniogestion']=$row->aniogestion;  // asi no da no se porque
          echo '<td><a href="' . base_url() . 'index.php/controlador_inscripciones/modificar_inscripciones/'
            . $numinscripcion . '/'
            . $row->numcurso . '/'
            . $row->aniogestion . '/'
            . $row->niveleducativo
            . '">' . form_submit($attributes, 'ELEGIR') . '</a></td>';

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