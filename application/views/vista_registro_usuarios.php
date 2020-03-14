<?php
$attributes = array('class' => 'form', 'id' => 'login');
echo form_open('controlador_usuarios/registrar_usuario', $attributes) 
// primero  pongo el archivo php luego la funcion
?>
<?php
$ciusuario =  array(
  'name' => 'ciusuario',
  'placeholder' => 'Escribe cedula de identidad min 7 digitos',
  //'type' => 'number',
  'pattern'   => '[0-9]{7}',
  'required' => 'required'
  // 'type' => 'email'  << por ejemplo para poner otras de html
);

$contrasena =  array(
  'name' => 'contrasena',
  'placeholder' => 'Escribe contrasena min 5 caracteres max 10',
  'type' => 'password',
  'pattern' => '.{5,10}',
  'required' => 'required'
);

$nombres =  array(
  'name' => 'nombres',
  'placeholder' => 'Escribe nombres min 3 caracteres',
  'type' => 'text',
  'pattern'   => '[A-za-z ]{3,40}',
  'required' => 'required'
);

$apellidos =  array(
  'name' => 'apellidos',
  'placeholder' => 'Escribe apellidos min 3 caracteres',
  'type' => 'text',
  'pattern'   => '[A-za-z ]{3,40}',
  'required' => 'required'
);

$fechanacimiento =  array(
  'type' => 'date',
  'max' => '1997-01-01',
  'min' => '1970-01-01',
  'name' => 'fechanacimiento',
  'placeholder' => 'fecha de nacimiento de 1970 a 1997'
);

$direccion =  array(
  'name' => 'direccion',
  'placeholder' => 'Escribe direccion min 5 caracteres',
  'type' => 'text',
  'pattern'   => '[0-9A-za-z.- ]{5,50}',
  'required' => 'required'
);

$telefono =  array(
  'name' => 'telefono',
  'placeholder' => 'Escribe telefono o celular min 7 caracteres',
  //'type' => 'number',
  'pattern'   => '[0-9]{7,20}',
  'required' => 'required'
);

$email =  array(
  'name' => 'email',
  'placeholder' => 'Escribe Correo electronico min 4 caracteres',
  'type' => 'email',
  'pattern' => '.{4,50}',
  'required' => 'required'
);

?>
<!DOCTYPE html>

<head>
  <?php echo link_tag('docs_formularios/css/richard-style.css');  ?>
</head>

<body>
  <h1 id="ff-proof" class="ribbon">REGISTRO USUARIOS &nbsp;&nbsp;</h1>
  <div class="apple">
    <div class="top"><span></span></div>
    <div class="butt"><span></span></div>
    <div class="bite"></div>
  </div>

  <fieldset id="inputs">
    <div>
      <?php echo form_label('CEDULA DE IDENTIDAD', 'ciusuario') 
      // como segundo parametro el  nombre del control al que pertenece  
      ?>
      <?php echo form_input($ciusuario); ?>
      <?php echo form_label('CONTRASENA', 'contrasena') ?>
      <?php echo form_input($contrasena) ?>
    </div>
    <div>
      <?php echo form_label('TIPO USUARIO', 'tipousuario') ?>
    </div>
    <div>
      <select name="tipousuario" class="form" id="inputs" style="width:242px; height:40px">
        <option value="Administrador">Administrador</option>
        <option value="Secretaria">Secretaria</option>
        <option value="Cajero">Cajero</option>
      </select>
    </div>
    <div>
      <?php echo form_label('NOMBRES', 'nombres') ?>
      <?php echo form_input($nombres) ?>
      <?php echo form_label('APELLIDOS', 'apellidos') ?>
      <?php echo form_input($apellidos) ?>
    </div>
    <div>
      <?php echo form_label('FECHA DE NACIMIENTO', 'fechanacimiento') ?>
      <?php echo form_input($fechanacimiento) ?>
    </div>
    <div>
      <?php echo form_label('DIRECCION', 'direccion') ?>
      <?php echo form_input($direccion) ?>

      <?php echo form_label('TELEFONOS', 'telefono') ?>
      <?php echo form_input($telefono) ?>
    </div>
    <div>
      <?php echo form_label('CORREO', 'email') ?>
    </div>
    <div>
      <?php echo form_input($email) ?>
    </div>

  </fieldset>
  <div>
    <fieldset id="actions">
      <?php
      $attributes = array('id' => 'submit', 'name' => 'btnregistrousuarios');
      //$attributes = array('class' => 'btn btn-primary btn-block btn-large','id' => 'btnregistrousuarios','name' => 'btnregistrousuarios');
      echo form_submit($attributes, 'REGISTRAR USUARIOS');
      echo form_close();
      ?>
      <?php
      $attributes = array('class' => 'form', 'id' => 'btnregistrousuarios');
      echo form_open('controlador_usuarios/direccionar_menu_principal', $attributes); 
      // primero  pongo el archivo php luego la funcion
      $attributes = array('id' => 'submit', 'name' => 'volvermenu');   //volver menu
      echo form_submit($attributes, 'VOLVER AL MENU PRINCIPAL');
      echo form_close();
      ?>

    </fieldset>
  </div>

</body>

</html>