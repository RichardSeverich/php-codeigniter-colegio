<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_reportes extends CI_Controller
{
	function   __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		// Modelos
		$this->load->model('modelo_usuarios');
		$this->load->model('modelo_gestion');
		$this->load->model('modelo_cursos');
		$this->load->model('modelo_estudiantes');
		$this->load->model('modelo_inscripciones');
		$this->load->model('modelo_dosificacion');
		$this->load->model('modelo_pensiones');
		$this->load->library('LibreriaPDF/fpdf');
	}

	public function index()
	{
	}

	function direccionar_menu_principal_administrador()
	{
		$this->load->view('vista_menu_principal_administrador');
	}

	function direccionar_menu_principal_secretaria()
	{
		$this->load->view('vista_menu_principal_secretaria');
	}

	function direccionar_repotes_diarios()
	{
		echo '<script type="text/javascript" language="javascript"> ';
		echo 'window.open("'   . base_url() .   'index.php/controlador_reportes/reportes_diarios' .
			'","nuevaVentana","width=1200, height=800");';
		echo '</script> ';
		$this->direccionar_reportes_menu_administrador();
	}

	function direccionar_repotes_ingresos()
	{
		echo '<script type="text/javascript" language="javascript"> ';
		echo 'window.open("'   . base_url() .   'index.php/controlador_reportes/reportes_ingresos' .
			'","nuevaVentana","width=1200, height=800");';
		echo '</script> ';
		$this->direccionar_reportes_menu_administrador();
	}

	function  direccionar_reportes_estudiantes_deudores()
	{
		$data['buscar'] = $this->input->post('buscar');
		if (!$data['buscar']) {
			$data = false;
		}
		$datos['cursos'] = $this->modelo_cursos->obtener_cursos($data);
		$this->load->view('vista_reportes_elegir_cursos', $datos);
	}

	function direccionar_reportes_estudiantes_deudores_por_curso($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso)
	{
		echo '<script type="text/javascript" language="javascript"> ';
		echo 'window.open("'   . base_url() .   'index.php/controlador_reportes/reportes_estudiantes_deudores_por_curso/'
			. $numcurso . '/'
			. $aniogestion . '/'
			. $niveleducativo . '/'
			. $nombrecurso . '/'
			. $paralelocurso .
			'","nuevaVentana","width=1200, height=800");';
		echo '</script> ';
		$this->direccionar_reportes_estudiantes_deudores();
	}

	function reportes_estudiantes_deudores_por_curso($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso)
	{
		$datos['numcurso'] = $numcurso;
		$datos['aniogestion'] = $aniogestion;
		$datos['niveleducativo'] = $niveleducativo;
		$datos['nombrecurso'] = $nombrecurso;
		$datos['paralelocurso'] = $paralelocurso;
		$datos['inscripciones'] = $this->modelo_inscripciones->buscar_inscripcion_por_curso($numcurso);
		$data = false;
		$datos['estudiantes'] = $this->modelo_estudiantes->obtener_estudiantes($data);
		$datos['pensiones'] = $this->modelo_pensiones->obtener_pensiones();
		$this->load->view('vista_reportes_estudiantes_deudores_por_curso', $datos);
	}

	function direccionar_reportes_menu_administrador()
	{
		$this->load->view('vista_reportes_menu_administrador');
	}

	function direccionar_reportes_menu_secretaria()
	{
		$this->load->view('vista_reportes_menu_secretaria');
	}

	function reportes_diarios()
	{
		$fecha = date('d/m/Y');
		$datos['fecha'] = $fecha;
		$datos['datosfactura'] = $this->modelo_pensiones->obtener_datosfactura_porfecha($fecha);
		$this->load->view('vista_reportes_diarios', $datos);
	}

	function reportes_ingresos()
	{
		$datos['datosfactura'] = $this->modelo_pensiones->obtener_datosfactura();
		$this->load->view('vista_reportes_ingresos', $datos);
	}
}
