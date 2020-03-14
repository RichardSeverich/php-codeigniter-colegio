<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_dosificacion extends CI_Controller
{
	function   __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->model('modelo_dosificacion');
		$this->load->model('modelo_pensiones');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
	}

	function registrar_dosificacion($ciusuario)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		//$boton=$_POST['btnregistrousuarios'];
		$nitcolegio = $this->input->post('nitcolegio');
		//$resultadobusqueda = $this ->modelo_dosificacion->buscar_dosificacion($nitcolegio);
		$resultadobusqueda = false;
		if (!$resultadobusqueda) {
			$fechalimite = $this->input->post('fechalimiteemicion');
			$fechalimiteemicion = str_replace("-", "/", $fechalimite);
			$datos = array(
				'nitcolegio' => $this->input->post('nitcolegio'),
				'numautorizacion' => $this->input->post('numautorizacion'),
				'numeroinicio' => $this->input->post('numeroinicio'),
				'fechalimiteemicion' => $fechalimiteemicion,
				'llavedosificacion' => $this->input->post('llavedosificacion')
			);
			$this->modelo_dosificacion->registrar_dosificacion($datos);
			$data['ciusuario'] = $ciusuario;
			$this->load->view('vista_registro_dosificacion', $data);
			echo	'<script language="javascript"> ';
			echo	'alert("SE REGISTRO EXITOSAMENTE");';
			echo	'</script>';
		} else {
			echo	'<script language="javascript"> ';
			echo	'alert("EL NIT DEL COLEGIO YA EXISTE, NO SE REGISTRO");';
			echo	'</script>';

			$data['ciusuario'] = $ciusuario;
			$this->load->view('vista_registro_dosificacion', $data);
		}
	}

	function mostrar_dosificacion($ciusuario)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		//$boton=$_POST['btnbuscar'];
		$datos = array(
			'buscar' => $this->input->post('buscar'),
		);

		$data['dosificacion'] = $this->modelo_dosificacion->obtener_dosificacion_por_nitcoleigo($datos);
		$data['ciusuario'] = $ciusuario;
		$this->load->view('vista_mostrar_dosificacion', $data);
	}

	function direccionar_registro_dosificacion($ciusuario)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$data['ciusuario'] = $ciusuario;
		$this->load->view('vista_registro_dosificacion', $data);
	}

	function direccionar_menu_principal($ciusuario)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$data['ciusuario'] = $ciusuario;
		$this->load->view('vista_menu_principal_cajero', $data);
	}

	function direccionar_modificar($numdosificacion, $ciusuario)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$datos = array(
			'buscar' => $numdosificacion
		);
		$data['dosificacion'] = $this->modelo_dosificacion->obtener_dosificacion($datos);
		$data['ciusuario'] = $ciusuario;
		if ($data) {
			$this->load->view('vista_modificar_dosificacion', $data);
		}
	}

	function modificar_dosificacion($numdosificacion, $ciusuario)
	{
		$fechalimite = $this->input->post('fechalimiteemicion');
		$fechalimiteemicion = str_replace("-", "/", $fechalimite);
		$datos = array(
			'nitcolegio' => $this->input->post('nitcolegio'),
			'numautorizacion' => $this->input->post('numautorizacion'),
			'numeroinicio' => $this->input->post('numeroinicio'),
			'fechalimiteemicion' => $fechalimiteemicion,
			'llavedosificacion' => $this->input->post('llavedosificacion')

		);

		$this->modelo_dosificacion->modificar_dosificacion($numdosificacion, $datos);
		echo	'<script language="javascript"> ';
		echo	'alert("SE MODIFICO EXITOSAMENTE");';
		echo	'</script>';
		$this->mostrar_dosificacion($ciusuario);   /// asi se llama a una funcion del propio controlador
	}

	function eliminar_dosificacion($numdosificacion, $ciusuario)
	{
		$resultadobusqueda = $this->modelo_pensiones->obtener_facturacion_numdosificacion($numdosificacion);
		if ($resultadobusqueda) {
			echo	'<script language="javascript"> ';
			echo	'alert("ERROR NO SE ELIMINO, EXISTEN FACTURAS CON ESTA DOSIFICACION, ELIMINE LAS FACTURAS PARA PODER ELIMINAR");';
			echo	'</script>';
		} else {

			$this->modelo_dosificacion->eliminar_dosificacion($numdosificacion);
			echo	'<script language="javascript"> ';
			echo	'alert("SE ELIMINO EXITOSAMENTE");';
			echo	'</script>';
		}
		$this->mostrar_dosificacion($ciusuario);
	}

	function direccionar_salir_paginaweb()
	{
		$this->load->view('vista_pagina_principal');
	}
}
