<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_gestion extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
    $this->load->model('modelo_gestion');
    $this->load->model('modelo_cursos');
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

  function registrar_gestion()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnregistrousuarios'];
    $aniogestion = $this->input->post('aniogestion');
    $resultadobusqueda = $this->modelo_gestion->buscar_gestion($aniogestion);
    if (!$resultadobusqueda) {
      $datos = array(
        'aniogestion' => $this->input->post('aniogestion'),
        'montopreescolar' => $this->input->post('montopreescolar'),
        'montoprimaria' => $this->input->post('montoprimaria'),
        'montosecundaria' => $this->input->post('montosecundaria'),
        'descuentosegundohermano' => $this->input->post('descuentosegundohermano'),
        'descuentotercerhermano' => $this->input->post('descuentotercerhermano'),
        'descuentocuartohermano' => $this->input->post('descuentocuartohermano')

      );
      $this->modelo_gestion->registrar_gestion($datos);
      $this->load->view('vista_registro_gestion');
      echo  '<script language="javascript"> ';
      echo  'alert("SE REGISTRO EXITOSAMENTE");';
      echo  '</script>';
    } else {
      echo  '<script language="javascript"> ';
      echo  'alert("EL ANIO DE GESTION YA EXISTE, NO SE REGISTRO");';
      echo  '</script>';
      $this->load->view('vista_registro_gestion');
    }
  }

  function mostrar_gestiones()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnbuscar'];
    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );
    $data['gestiones'] = $this->modelo_gestion->obtener_gestiones($datos);
    $this->load->view('vista_mostrar_gestiones', $data);
  }

  function direccionar_registro_gestion()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_registro_gestion');
  }

  function direccionar_menu_principal()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_menu_principal_administrador');
  }

  function direccionar_modificar($aniogestion)
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$cisuario = $this -> uri ->segment(3);
    $data['gestiones'] = $this->modelo_gestion->buscar_gestion($aniogestion);
    if ($data) {
      $this->load->view('vista_modificar_gestion', $data);
    }
  }
  function modificar_gestion($aniogestion)
  {
    $datos = array(
      'montopreescolar' => $this->input->post('montopreescolar'),
      'montoprimaria' => $this->input->post('montoprimaria'),
      'montosecundaria' => $this->input->post('montosecundaria'),
      'descuentosegundohermano' => $this->input->post('descuentosegundohermano'),
      'descuentotercerhermano' => $this->input->post('descuentotercerhermano'),
      'descuentocuartohermano' => $this->input->post('descuentocuartohermano')
    );
    $this->modelo_gestion->modificar_gestion($aniogestion, $datos);
    echo  '<script language="javascript"> ';
    echo  'alert("SE MODIFICO EXITOSAMENTE");';
    echo  '</script>';
    $this->mostrar_gestiones();   /// asi se llama a una funcion del propio controlador
  }

  function eliminar_gestion($aniogestion)
  {
    $resultadobusqueda = $this->modelo_cursos->buscar_cursos($aniogestion);
    if ($resultadobusqueda) {
      echo  '<script language="javascript"> ';
      echo  'alert("ERROR NO SE ELIMINO, EXISTEN CURSOS REGISTRADOS EN ESTA GESTION, ELIMINE LOS CURSOS PARA PODER ELIMINDAR ESTA GESTION");';
      echo  '</script>';
    } else {
      $this->modelo_gestion->eliminar_gestion($aniogestion);
      echo  '<script language="javascript"> ';
      echo  'alert("SE ELIMINO EXITOSAMENTE");';
      echo  '</script>';
    }
    $this->mostrar_gestiones();
  }

  function direccionar_salir_paginaweb()
  {
    $this->load->view('vista_pagina_principal');
  }
}
