<!DOCTYPE html>

<?php echo link_tag('docs_menu_principal/css/bootstrap.min.css');    ?>
<?php echo link_tag('docs_menu_principal/css/font-awesome.min.css'); ?>
<?php echo link_tag('docs_menu_principal/css/templatemo_main.css');  ?>

<div class="image-section">
  <div class="image-container">
    <img src="<?php echo base_url(); ?>docs_menu_principal/images/zoom-bg-8.jpg" id="testimonials-img" class="main-img active" alt="Testimonials">
  </div>
</div>

<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 templatemo-content-wrapper">
    <div class="templatemo-content">
      <section id="testimonials-section" class="">
        <div class="row">
          <div class="black-bg col-sm-12 col-md-12 col-lg-12">
            <h2 class="text-center">MENU PRUEBAS</h2>
            <div class="col-sm-12 col-md-12">
            </div>
          </div>
        </div>
        <div class="row margin-top-20">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  pull-right">
          </div>
        </div>

        <center>
          <?php
          $attributes = array('class' => 'form', 'id' => 'btnpruebas');
          echo form_open('controlador_pruebas/direccionar_pruebas_codigocontrol', $attributes); //abrir el form
          $attributes = array('style' => 'width:300px; height:70px', 'class' => 'btn btn-primary', 'id' => 'btnpruebas', 'name' => 'btnpruebas');
          echo form_submit($attributes, 'PRUEBA CODIGO CONTROL');
          echo form_close();
          echo '&&&';
          ?>
          <?php
          //$attributes = array('class' => 'form', 'id' => 'btnpruebasqr'); 
          //echo form_open('controlador_pruebas/direccionar_pruebas_codigoqr',$attributes); //abrir el form
          //$attributes = array('style'=>'width:300px; height:70px','class'=>'btn btn-primary','id' => 'btnpruebasqr','name' => 'btnpruebasqr');
          //echo form_submit($attributes,'PRUEBA CODIGO QR');
          //echo form_close();
          //echo '&&&';
          ?>

          <?php
          $attributes = array('class' => 'form', 'id' => 'btnsalir');   //abrir el form
          echo form_open('controlador_pruebas/direccionar_menu_principal', $attributes);
          $attributes = array('style' => 'width:300px; height:70px', 'class' => 'btn btn-primary', 'id' => 'btnsalir', 'name' => 'btnsalir');
          echo form_submit($attributes, 'VOLVER AL MENU PRINCIPAL');
          echo form_close();
          echo '&&&';
          ?>
        </center>
    </div>
  </div>
</div>

</section>