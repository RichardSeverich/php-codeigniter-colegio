<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_pruebas extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
    $this->load->model('modelo_pruebas');
    $this->load->library('LibreriaCodigoControl/CodigoControlV7');
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

  function direccionar_menu_principal()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_menu_principal_administrador');
  }

  function registrar_codigo_control()
  {
    $numero_autorizacion = $this->input->post('numautorizacion');
    $numero_factura  = $this->input->post('numfactura');
    $nit_cliente = $this->input->post('nitci');
    $fecha_compra = $this->input->post('fecha');
    $monto_compra =  $this->input->post('monto');
    $clave  = $this->input->post('llave');
    $codigodecontrol = CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
    $datos = array(
      'numautorizacion' => $this->input->post('numautorizacion'),
      'numfactura' => $this->input->post('numfactura'),
      'nitci' => $this->input->post('nitci'),
      'fecha' => $this->input->post('fecha'),
      'monto' => $this->input->post('monto'),
      'llave' => $this->input->post('llave'),
      'codigocontrol' => $codigodecontrol

    );
    $this->modelo_pruebas->registrar_codigocontrol($datos);
    echo  '<script language="javascript"> ';
    echo  'alert("SE REGISTRO EXITOSAMENTE");';
    echo  '</script>';

    $this->direccionar_pruebas_codigocontrol();
  }

  function direccionar_pruebas_menu()
  {
    $this->load->view('vista_pruebas_menu');
  }

  function direccionar_pruebas_codigocontrol()
  {
    $datos = false;
    $data['pruebacodigodecontrol'] = $this->modelo_pruebas->obtener_codigocontrol($datos);
    $this->load->view('vista_pruebas_codigo_control', $data);
  }

  function eliminar_codigocontrol($codigocontrol)
  {
    $this->modelo_pruebas->eliminar_codigocontrol($codigocontrol);
    echo  '<script language="javascript"> ';
    echo  'alert("SE ELIMINO EXITOSAMENTE");';
    echo  '</script>';
    $this->direccionar_pruebas_codigocontrol();
  }
}
