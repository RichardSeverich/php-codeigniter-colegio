<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_cursos extends CI_Controller {

	function   __construct()
	{
		parent::   __construct();
		 $this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');
		
		$this ->load->model('modelo_cursos');
		$this ->load->model('modelo_gestion');
		$this ->load->model('modelo_inscripciones');
		
	}
	public function index()
	{
		
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');

	}
	function registrar_cursos()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnregistrousuarios'];
		
		
		$aniogestion = $this -> input -> post('aniogestion');
		$niveleducativo = $this -> input -> post('niveleducativo');
		$nombrecurso = $this -> input -> post('nombrecurso');
		$paralelocurso = $this -> input -> post('paralelocurso');
		
		if($niveleducativo=="PRE-ESCOLAR")
		{
			$nombrecurso='KINDER';
		 }
		
		$resultadobusqueda = $this ->modelo_cursos->buscar_CursosAnioNivelNombreParalelo($aniogestion,$niveleducativo,$nombrecurso,$paralelocurso);
		
		if(!$resultadobusqueda )
		{
			$datos = array (
			'aniogestion' => $this -> input -> post('aniogestion'),
			'niveleducativo' => $this -> input -> post('niveleducativo'),
			'nombrecurso' => $this -> input -> post('nombrecurso'),
			'paralelocurso' => $this -> input -> post('paralelocurso')
			);

		if($niveleducativo=="PRE-ESCOLAR")
		{
			$datos['nombrecurso']='KINDER';
		}
		
			$this->modelo_cursos->registrar_cursos($datos);
			$this-> direccionar_registro_cursos();
	     
			echo	'<script language="javascript"> ';
			echo	'alert("SE REGISTRO EXITOSAMENTE");' ;
			echo	'</script>';
		}
        else
		{
			echo	'<script language="javascript"> ';
			echo	'alert("EL REGISTRO YA EXISTE, NO SE REGISTRO");' ;
			echo	'</script>';
			$this-> direccionar_registro_cursos();
		}		
			 
	}
	
	function mostrar_cursos()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnbuscar'];
		
		$datos = array (
			'buscar' => $this -> input -> post('buscar'),		
		);
		
		$data['cursos'] = $this -> modelo_cursos->obtener_cursos($datos);
		$this->load->view('vista_mostrar_cursos',$data);
		
	}
	
	function direccionar_registro_cursos()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$datos= FALSE;
		$data['gestiones'] = $this -> modelo_gestion->obtener_gestiones($datos);
		$this->load->view('vista_registro_cursos',$data);
	}
	

	
     function direccionar_menu_principal()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->view('vista_menu_principal_administrador');
	}
	
	function direccionar_modificar($numcurso)
	{
	    $this->load->helper ('url');
		$this->load->helper ('html');
		$datos= FALSE;
		$data['gestiones'] = $this -> modelo_gestion->obtener_gestiones($datos);
		//$cisuario = $this -> uri ->segment(3);
		$data['cursos']= $this -> modelo_cursos->obtener_cursos_por_numcurso($numcurso);
		
		if($data)
		{
			$this->load->view('vista_modificar_cursos',$data);
			
		}
		
		
	}
	function modificar_cursos($numcurso)
	{
		$datos = array (

			'aniogestion' => $this -> input -> post('aniogestion'),
			'niveleducativo' => $this -> input -> post('niveleducativo'),
			'nombrecurso' => $this -> input -> post('nombrecurso'),
			'paralelocurso' => $this -> input -> post('paralelocurso')
		);
		
		$aniogestion = $this -> input -> post('aniogestion');
		$niveleducativo = $this -> input -> post('niveleducativo');
		$nombrecurso = $this -> input -> post('nombrecurso');
		$paralelocurso = $this -> input -> post('paralelocurso');
		
		if($niveleducativo=="PRE-ESCOLAR")
		{
			$nombrecurso='KINDER';
		 }
		 
		
		$resultadobusqueda = $this ->modelo_cursos->buscar_CursosAnioNivelNombreParalelo($aniogestion,$niveleducativo,$nombrecurso,$paralelocurso);
		

		if(!$resultadobusqueda )
		{
			
			if($niveleducativo=="PRE-ESCOLAR")
			{
				$datos['nombrecurso']='KINDER';
			}
			
			$this->modelo_cursos->modificar_cursos($numcurso,$datos);
			echo	'<script language="javascript"> ';
			echo	'alert("SE MODIFICO EXITOSAMENTE");' ;
			echo	'</script>';
			$this->mostrar_cursos();   /// asi se llama a una funcion del propio controlador
		}
		else
		{
			echo	'<script language="javascript"> ';
			echo	'alert("YA EXISTE UN CURSO CON DATOS IGUALES, NO SE PUEDE MODIFICAR");' ;
			echo	'</script>';
			$this->direccionar_modificar($numcurso);
		}
		   
		
	
	}
	function eliminar_cursos($numcurso)
	{

		$resultadobusqueda=$this->modelo_inscripciones->buscar_inscripcion_por_curso($numcurso);
	 
	  if($resultadobusqueda)
	  {
		echo	'<script language="javascript"> ';
		echo	'alert("ERROR NO SE ELIMINO, EXISTEN ESTUDIANTES INSCRITOS EN ESTE CURSO, ELIMINE LAS INSCRIPCIONES PARA PODER ELIMINDAR ESTE CURSO");' ;
		echo	'</script>';
	  }
	  else
	  {
		
		$this->modelo_cursos->eliminar_cursos($numcurso);
		echo	'<script language="javascript"> ';
		echo	'alert("SE ELIMINO EXITOSAMENTE");' ;
		echo	'</script>';
		}
		
		$this->mostrar_cursos();
	}
	

}