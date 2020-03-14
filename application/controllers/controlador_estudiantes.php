<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_estudiantes extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');

    $this->load->model('modelo_estudiantes');
    $this->load->model('modelo_inscripciones');
  }
  public function index()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
    //$this->load->view('vista_registro_usuarios2');
    //$this->load->view('vista_menu_principal2');
    //$this->load->view('vista_inicio');
  }
 
  function registrar_estudiantes()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnregistrousuarios'];
    $ciestudiante = $this->input->post('ciestudiante');
    $resultadobusqueda = $this->modelo_estudiantes->buscar_estudiante($ciestudiante);
    if (!$resultadobusqueda) {

      $datos = array(
        'ciestudiante' => $this->input->post('ciestudiante'),
        'nombres' => $this->input->post('nombres'),
        'apellidos' => $this->input->post('apellidos'),
        'fechanacimiento' => $this->input->post('fechanacimiento'),
        'direccion' => $this->input->post('direccion'),
        'telefono' => $this->input->post('telefono'),
        'email' => $this->input->post('email'),
        'ciapoderado' => $this->input->post('ciapoderado'),
        'nombresapoderado' => $this->input->post('nombresapoderado'),
        'apellidosapoderado' => $this->input->post('apellidosapoderado')
      );

      $this->modelo_estudiantes->registrar_estudiante($datos);
      $this->load->view('vista_registro_estudiantes');

      echo  '<script language="javascript"> ';
      echo  'alert("SE REGISTRO EXITOSAMENTE");';
      echo  '</script>';
    } else {
      echo  '<script language="javascript"> ';
      echo  'alert("EL CI ESTUDIANTE YA EXISTE, NO SE REGISTRO");';
      echo  '</script>';
      $this->load->view('vista_registro_estudiantes');
    }
  }

  function mostrar_estudiantes()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnbuscar'];

    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );

    $data['estudiantes'] = $this->modelo_estudiantes->obtener_estudiantes($datos);
    $this->load->view('vista_mostrar_estudiantes', $data);
  }
  function direccionar_registro_estudiantes()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_registro_estudiantes');
  }

  function direccionar_buscar_usuarios()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_mostrar_usuarios');
  }

  function direccionar_menu_principal()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_menu_principal_secretaria');
  }

  function direccionar_modificar($ciestudiante)
  {
    $this->load->helper('url');
    $this->load->helper('html');

    //$cisuario = $this -> uri ->segment(3);
    $data['estudiantes'] = $this->modelo_estudiantes->buscar_estudiante($ciestudiante);

    if ($data) {
      $this->load->view('vista_modificar_estudiantes', $data);
    }
  }
  function modificar_estudiantes($ciestudiante)
  {
    $datos = array(

      'nombres' => $this->input->post('nombres'),
      'apellidos' => $this->input->post('apellidos'),
      'fechanacimiento' => $this->input->post('fechanacimiento'),
      'direccion' => $this->input->post('direccion'),
      'telefono' => $this->input->post('telefono'),
      'email' => $this->input->post('email'),
      'ciapoderado' => $this->input->post('ciapoderado'),
      'nombresapoderado' => $this->input->post('nombresapoderado'),
      'apellidosapoderado' => $this->input->post('apellidosapoderado')
    );

    $this->modelo_estudiantes->modificar_estudiantes($ciestudiante, $datos);

    echo  '<script language="javascript"> ';
    echo  'alert("SE MODIFICO EXITOSAMENTE");';
    echo  '</script>';

    $this->mostrar_estudiantes();   /// asi se llama a una funcion del propio controlador

    /////
  }
  function eliminar_estudiantes($ciestudiante)
  {

    $resultadobusqueda = $this->modelo_inscripciones->buscar_inscripcion_por_ciestudiante($ciestudiante);

    if ($resultadobusqueda) {
      echo  '<script language="javascript"> ';
      echo  'alert("ERROR NO SE ELIMINO, EL ESTUDIANTE ESTA INSCRITO, ELIMINA LA INSCRIPCION PARA ELIMIAR ESTE REGISTRO");';
      echo  '</script>';
    } else {
      $this->modelo_estudiantes->eliminar_estudiante($ciestudiante);
      echo  '<script language="javascript"> ';
      echo  'alert("SE ELIMINO EXITOSAMENTE");';
      echo  '</script>';
    }
    $this->mostrar_estudiantes();
  }

  function direccionar_salir_paginaweb()
  {

    $this->load->view('vista_pagina_principal');
  }
  function direccionar_ingresar_sistema_estudiantes()
  {

    $this->load->view('vista_ingresar_sistema_estudiantes');
  }
}
