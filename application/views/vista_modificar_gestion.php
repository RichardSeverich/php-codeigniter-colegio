<?php
foreach ($gestiones->result() as $row) {
}
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_gestion/modificar_gestion/' . $row->aniogestion, $attributes)
// primero  pongo el archivo php, luego la funcion
?>
<?php

$aniogestion =  array(
  'name' => 'aniogestion',
  'placeholder' => 'Ingrese el anio gestion 4 numeros',
  //'type' => 'number',
  'pattern'   => '[0-9]{4}',
  'required' => 'required',
  'readonly' => 'readonly',
  'value' =>  $row->aniogestion
);
$montopreescolar =  array(
  'name' => 'montopreescolar',
  'placeholder' => 'Ingrese monto de pension pre escolar',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required',
  'value' =>  $row->montopreescolar
);
$montoprimaria =  array(
  'name' => 'montoprimaria',
  'placeholder' => 'Ingrese monto de pension primaria',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required',
  'value' =>  $row->montoprimaria
);

$montosecundaria =  array(
  'name' => 'montosecundaria',
  'placeholder' => 'Ingrese monto de pension secundaria',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required',
  'value' =>  $row->montosecundaria
);

$descuentosegundohermano =  array(
  'name' => 'descuentosegundohermano',
  'placeholder' => 'ingrese % de descuento del segundo hermano',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required',
  'value' =>  $row->descuentosegundohermano
);

$descuentotercerhermano =  array(
  'name' => 'descuentotercerhermano',
  'placeholder' => 'ingrese % de descuento del tercer hermano',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required',
  'value' =>  $row->descuentotercerhermano

);

$descuentocuartohermano =  array(
  'name' => 'descuentocuartohermano',
  'placeholder' => 'ingrese % de descuento del cuarto hermano',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required',
  'value' =>  $row->descuentotercerhermano
);


?>
<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php echo link_tag('docs_formularios/css/richard-style.css');  ?>
</head>

<body>
  <h1 id="ff-proof" class="ribbon">MODIFICAR GESTION &nbsp;&nbsp;</h1>
  <div class="apple">
    <div class="top"><span></span></div>
    <div class="butt"><span></span></div>
    <div class="bite"></div>
  </div>
  <fieldset id="inputs">
    <div>
      <?php echo form_label('AÑO GESTION', 'aniogestion') // como segundo parametro el  nombre del control al que pertenece  
      ?>
      <?php echo form_input($aniogestion); ?>
    </div>
    <div>
      <?php echo form_label('MONTO PENSION PRE ESCOLAR (BS)', 'montopreescolar') ?>
      <?php echo form_input($montopreescolar) ?>

    </div>
    <div>
      <?php echo form_label('MONTO PENSION PRIMARIA (BS)', 'montoprimaria') ?>
      <?php echo form_input($montoprimaria) ?>
    </div>
    <div>
      <?php echo form_label('MONTO PENSION SECUNDARIA (BS)', 'montosecundaria') ?>
      <?php echo form_input($montosecundaria) ?>
    </div>
    <div>
      <?php //echo form_label('DESCUENTO PRIMER HERMANO (%)','descuentoprimerhermano') 
      ?>
      <?php //echo form_input($descuentoprimerhermano) 
      ?>
      <?php echo form_label('DESCUENTO SEGUNDO HERMANO (%)', 'descuentosegundohermano') ?>
      <?php echo form_input($descuentosegundohermano) ?>
      <?php echo form_label('DESCUENTO TERCER HERMANO (%)', 'descuentotercerhermano') ?>
      <?php echo form_input($descuentotercerhermano) ?>
      <?php echo form_label('DESCUENTO CUARTO HERMANO (%)', 'descuentotercerhermano') ?>
      <?php echo form_input($descuentocuartohermano) ?>
    </div>
  </fieldset>
  <div>
    <fieldset id="actions">
      <?php
      $attributes = array('id' => 'submit', 'name' => 'btnmodificargestion');
      //$attributes = array('class' => 'btn btn-primary btn-block btn-large','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
      echo form_submit($attributes, 'MODIFICAR GESTION');
      echo form_close();
      ?>
      <?php
      $attributes = array('class' => 'form', 'id' => 'btnsalir');
      echo form_open('controlador_gestion/direccionar_menu_principal', $attributes);
      // primero  pongo el archivo php luego la funcion
      $attributes = array('id' => 'submit', 'name' => 'volvermenu');
      //volver menu
      echo form_submit($attributes, 'VOLVER AL MENU PRINCIPAL');
      echo form_close();
      ?>
    </fieldset>
  </div>

</body>

</html>