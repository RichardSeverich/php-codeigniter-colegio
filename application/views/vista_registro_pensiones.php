<?php
//$attributes = array('class' => 'form', 'id' => 'btnmostrarcursos');
//echo form_open('controlador_pensiones/generarfacturas',$attributes); 
// primero  pongo el archivo php luego la funcion
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php echo link_tag('docs_tablas/css/tabla_style.css'); ?>
  <title>403 Forbidden</title>
</head>

<body>
  <h1 class="">COBRO DE PENSIONES</h1>
  <?php
  foreach ($estudiante->result() as $row0)   // de cada curso muestra las inscripciones que corresponde
  {
  }
  ?>
  <h1 class="blue"> CI : <?php echo $row0->ciestudiante     ?> </h1>
  <h1 class="blue"> NOMBRES <?php echo $row0->nombres      ?> </h1>
  <h1 class="blue">APELLIDOS <?php echo $row0->apellidos      ?> </h1>
  <h4 class="yellow">Datos de las pensiones:</h4>
  <center>
    <?php
    if ($pensiones != FALSE) {
      foreach ($pensiones->result() as $row) {
      }
    }

    ?>
    <?php
    ///BOTON SALIR
    $attributes = array('class' => 'form', 'id' => 'btnfacturar');
    echo form_open(
      'controlador_pensiones/direccionar_generar_facturas/' . $row->montopension . '/'
        . $contador . '/'
        . $row->numinscripcion . '/'
        . $row0->ciestudiante . '/'
        . $ciusuario . '',
      $attributes
    );

    $numinscripcionSalir = $row->numinscripcion;
    // numero de inscripcion para mandar al boton/funcion de salir menu principla

    if ($datosfactura != FALSE) {
      foreach ($datosfactura->result() as $rowfactura) {
      }
      $nit = $rowfactura->nitcliente;
      $apellido = $rowfactura->apellidocliente;
    } else {
      $nit = 0;
      $apellido = 'sin nombre';
    }
    $nitcliente =  array(
      'name' => 'nitcliente',
      'placeholder' => 'Nit cliente',
      'style' => 'width:242px; height:40px',
      'value' => $nit
    );

    $apellidocliente =  array(
      'name' => 'apellidocliente',
      'placeholder' => 'Apellido Cliente',
      'style' => 'width:242px; height:40px',
      'value' => $apellido
    );

    ?>
    <div>
      <?php
      echo form_label('NIT CLIENTE :', 'nitcliente');
      echo form_input($nitcliente);
      echo form_label('APELLIDO CLIENTE :', 'apellidocliente');
      echo form_input($apellidocliente);
      ?>
    </div>
    <br>
    <div>
      <?php
      $attributes = array('style' => 'width:242px; height:70px;       color: #FFFFFF; background-color: #009999', 'id' => 'btngenerarfactura', 'name' => 'btngenerarfactura');
      echo form_submit($attributes, 'GENERAR FACTURA -');
      echo form_close();
      ?>

    </div>
    <!-- DE ESTA FORMA SE ABRE UNA PAGINA DESTE OTRA  DESTE HTML
    <input style="width:242px; height: 70px; color = #FFFFFF; background-color: #009999"  
    type="button" value="GENERAR FACTURA" 
     onclick="window.open('<?php //echo base_url(); 
    ?>index.php/controlador_pensiones/generar_facturas/<?php //echo $row->montopension 
    ?>/<?php //echo $contador
    ?>','nuevaVentana','width=300, height=400')" />
    -->
    <?php
    ///BOTON SALIR
    $attributes = array('class' => 'form', 'id' => 'btnsalir');
    echo form_open('controlador_pensiones/direccionar_menu_principal_pensiones/' . $ciusuario . '/' . $contador . '/' . $numinscripcionSalir . '', $attributes);
    $attributes = array('style' => 'width:242px; height:70px;       color: #FFFFFF; background-color: #009999', 'id' => 'btnsalir', 'name' => 'btnsalir');
    echo form_submit($attributes, 'SALIR AL MENU PRINCIPAL');
    echo form_close();
    ?>
    <?php
    //echo $contador;
    ?>

  </center>

  <table class="container">
    <tr class="">
      <?php
      $attributes = array('style' => 'width:220px; height:60px;  color: #FFFFFF; background-color: #009999', 'id' => 'btnpagar', 'name' => 'btnpagar');
      $attributes1 = array('style' => 'width:220px; height:60px;  color: #FFFFFF; background-color: #DC143C', 'id' => 'btnpagar', 'name' => 'btnpagar');
      if ($pensiones != FALSE) {
        foreach ($pensiones->result() as $row) {
          //SALDO DEUDOR
          echo '<tr >';
          echo '<td class="price" align="center">SALDO DEUDOR</td>';
          echo '<td>' . $row->saldodeudor . ' Bs</td>';
          echo '</tr>';
          //DESCUENTO
          echo '<tr >';
          echo '<td class="price" align="center">DESCUENTO</td>';
          echo '<td>' . $row->descuento . ' % </td>';
          echo '</tr>';
          //MONTO PENSION
          echo '<tr >';
          echo '<td  class="price"align="center">MONTO PENSION</td>';
          echo '<td>' . $row->montopension . ' Bs </td>';
          echo '</tr>';
          //PENSION 1
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 1</td>';
          echo '<td>' . $row->pension1 . '  </td>';
          if ($row->pension1 == "debe") {
            $numeropensiones = 'pension1-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //   $numeropensiones='pension1-cancelar';
            //   echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            // .$contador.
            // '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 2
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 2</td>';
          echo '<td>' . $row->pension2 . '  </td>';
          if ($row->pension2 == "debe") {
            $numeropensiones = 'pension2-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //$numeropensiones='pension2-cancelar';
            //echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //.$row->numinscripcion.'/'
            //.$row->saldodeudor.'/'
            //.$row->montopension.'/'
            //.$numeropensiones.'/'
            //.$row0->ciestudiante.'/'
            //.$contador.
            //'">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 3
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 3</td>';
          echo '<td>' . $row->pension3 . '  </td>';
          if ($row->pension3 == "debe") {
            $numeropensiones = 'pension3-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension3-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 4
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 4</td>';
          echo '<td>' . $row->pension4 . '  </td>';
          if ($row->pension4 == "debe") {
            $numeropensiones = 'pension4-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension4-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 5
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 5</td>';
          echo '<td>' . $row->pension5 . '  </td>';

          if ($row->pension5 == "debe") {
            $numeropensiones = 'pension5-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension5-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 6
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 6</td>';
          echo '<td>' . $row->pension6 . '  </td>';
          if ($row->pension6 == "debe") {
            $numeropensiones = 'pension6-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension6-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 7
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 7</td>';
          echo '<td>' . $row->pension7 . '  </td>';
          if ($row->pension7 == "debe") {
            $numeropensiones = 'pension7-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension7-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 8
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 8</td>';
          echo '<td>' . $row->pension8 . '  </td>';
          if ($row->pension8 == "debe") {
            $numeropensiones = 'pension8-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension8-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 9
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 9</td>';
          echo '<td>' . $row->pension9 . '  </td>';
          if ($row->pension9 == "debe") {
            $numeropensiones = 'pension9-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension9-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          //PENSION 10
          echo '<tr >';
          echo '<td class="price" align="center">PENSION 10</td>';
          echo '<td>' . $row->pension10 . '  </td>';
          if ($row->pension10 == "debe") {
            $numeropensiones = 'pension10-pagar';
            echo '<td><a href="' . base_url() . 'index.php/controlador_pensiones/direccionar_pensiones/'
              . $row->numinscripcion . '/'
              . $row->saldodeudor . '/'
              . $row->montopension . '/'
              . $numeropensiones . '/'
              . $row0->ciestudiante . '/'
              . $contador . '/'
              . $ciusuario .
              '">' . form_submit($attributes1, 'PAGAR PENSION') . '</a></td>';
          } else {
            //  $numeropensiones='pension10-cancelar';
            //  echo '<td><a href="'.base_url().'index.php/controlador_pensiones/direccionar_pensiones/'
            //  .$row->numinscripcion.'/'
            //  .$row->saldodeudor.'/'
            //  .$row->montopension.'/'
            //  .$numeropensiones.'/'
            //  .$row0->ciestudiante.'/'
            //  .$contador.
            //  '">'.form_submit($attributes,'CANCELAR PAGO').'</a></td>';
          }
          echo '</tr>';
          echo form_close();
        }
      } else {
        echo 'NO HAY REGISTROS';
      }
      ?>
    </tr>
  </table>


</body>

</html>