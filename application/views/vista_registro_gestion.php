<?php
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_gestion/registrar_gestion', $attributes) 
// primero  pongo el archivo php, luego la funcion
?>
<?php

$aniogestion =  array(
  'name' => 'aniogestion',
  'placeholder' => 'Ingrese el anio gestion 4 numeros',
  //'type' => 'number',
  'pattern'   => '[0-9]{4}',
  'required' => 'required'
);

$montopreescolar =  array(
  'name' => 'montopreescolar',
  'placeholder' => 'Ingrese monto de pension pre escolar',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required'

);

$montoprimaria =  array(
  'name' => 'montoprimaria',
  'placeholder' => 'pension primaria de 1-6 digitos',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required'
);

$montosecundaria =  array(
  'name' => 'montosecundaria',
  'placeholder' => 'pension secundaria 1-6 digitos',
  'pattern'   => '[0-9.]{1,6}',
  'required' => 'required'
);

$descuentosegundohermano =  array(
  'name' => 'descuentosegundohermano',
  'placeholder' => '%  1 -3 dignitos',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required'
);

$descuentotercerhermano =  array(
  'name' => 'descuentotercerhermano',
  'placeholder' => '% 1 -3 dignitos',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required'
);

$descuentocuartohermano =  array(
  'name' => 'descuentocuartohermano',
  'placeholder' => '% 1 -3 dignitos',
  'pattern'   => '[0-9.]{1,3}',
  'required' => 'required'
);

?>
<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php echo link_tag('docs_formularios/css/richard-style.css');  ?>
</head>

<body>
  <h1 id="ff-proof" class="ribbon">REGISTRO GESTION &nbsp;&nbsp;</h1>
  <div class="apple">
    <div class="top"><span></span></div>
    <div class="butt"><span></span></div>
    <div class="bite"></div>
  </div>

  <fieldset id="inputs">
    <div>
      <?php echo form_label('AÑO GESTION', 'aniogestion') 
      // como segundo parametro el  nombre del control al que pertenece  
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
      $attributes = array('id' => 'submit', 'name' => 'btnregistrousuarios');
      //$attributes = array('class' => 'btn btn-primary btn-block btn-large','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
      echo form_submit($attributes, 'REGISTRAR GESTION');
      echo form_close();
      ?>
      <?php
      $attributes = array('class' => 'form', 'id' => 'btnregistrousuarios');
      echo form_open('controlador_gestion/direccionar_menu_principal', $attributes); 
      // primero  pongo el archivo php luego la funcion
      $attributes = array('id' => 'submit', 'name' => 'volvermenu');   //volver menu
      echo form_submit($attributes, 'VOLVER AL MENU PRINCIPAL');
      echo form_close();
      ?>
    </fieldset>
  </div>

</body>

</html>