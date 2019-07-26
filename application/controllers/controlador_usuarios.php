<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_usuarios extends CI_Controller {

	function   __construct()
	{
		parent::   __construct();
		 $this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');
		$this ->load->model('modelo_usuarios');
		$this ->load->model('modelo_pensiones');
	
	}
	public function index()
	{
		
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');
	
		//$this->load->view('vista_registro_usuarios2');
		  //$this->load->view('vista_menu_principal2');
		//$this->load->view('vista_inicio');
		
	
		
	}
	function registrar_usuario()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnregistrousuarios'];
		
		$ciusuario = $this -> input -> post('ciusuario');
		
		$resultadobusqueda = $this ->modelo_usuarios->buscar_usuario($ciusuario);
		if(!$resultadobusqueda )
		{
		
			$datos = array (
			'ciusuario' => $this -> input -> post('ciusuario'),
			'contrasena' => $this -> input -> post('contrasena'),
			'tipousuario' => $this -> input -> post('tipousuario'),
			'nombres' => $this -> input -> post('nombres'),
			'apellidos' => $this -> input -> post('apellidos'),
			'fechanacimiento' => $this -> input -> post('fechanacimiento'),
			'direccion' => $this -> input -> post('direccion'),
			'telefono' => $this -> input -> post('telefono'),
			'email' => $this -> input -> post('email')
			);
		
			$this->modelo_usuarios->registrar_usuario($datos);
		
			$this->load->view('vista_registro_usuarios');
	     
			echo	'<script language="javascript"> ';
			echo	'alert("SE REGISTRO EXITOSAMENTE");' ;
			echo	'</script>';
		}
        else
		{
			echo	'<script language="javascript"> ';
			echo	'alert("EL CI USUARIO YA EXISTE, NO SE REGISTRO");' ;
			echo	'</script>';
			$this->load->view('vista_registro_usuarios');
		}		
			 
	}
	
	function mostrar_usuarios()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnbuscar'];
		
		$datos = array (
			'buscar' => $this -> input -> post('buscar'),		
		);
		
		$data['usuarios'] = $this -> modelo_usuarios->obtener_usuarios($datos);
		$this->load->view('vista_mostrar_usuarios',$data);
		
	}
	function direccionar_registro_usuarios()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->view('vista_registro_usuarios');
	}
	
	function direccionar_buscar_usuarios()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->view('vista_mostrar_usuarios');
	}
	
     function direccionar_menu_principal()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->view('vista_menu_principal_administrador');
	}
	
	function direccionar_modificar($ciusuario)
	{
	    $this->load->helper ('url');
		$this->load->helper ('html');
		
		//$cisuario = $this -> uri ->segment(3);
		$data['usuarios']= $this -> modelo_usuarios->buscar_usuario($ciusuario);
		
		if($data)
		{
			$this->load->view('vista_modificar_usuarios',$data);
			
		}
		
		
	}
	function modificar_usuarios($ciusuario)
	{
		$datos = array (

			'contrasena' => $this -> input -> post('contrasena'),
			'tipousuario' => $this -> input -> post('tipousuario'),
			'nombres' => $this -> input -> post('nombres'),
			'apellidos' => $this -> input -> post('apellidos'),
			'fechanacimiento' => $this -> input -> post('fechanacimiento'),
			'direccion' => $this -> input -> post('direccion'),
			'telefono' => $this -> input -> post('telefono'),
			'email' => $this -> input -> post('email')
		);
		
		$this->modelo_usuarios->modificar_usuario($ciusuario,$datos);
		echo	'<script language="javascript"> ';
		echo	'alert("SE MODIFICO EXITOSAMENTE");' ;
		echo	'</script>';
		
		$this->mostrar_usuarios();   /// asi se llama a una funcion del propio controlador
		
		/////
	}
	function eliminar_usuarios($ciusuario)
	{
		
		
	$resultadobusqueda=$this->modelo_pensiones->obtener_facturacion_ciusuario($ciusuario);
	  
	  if($resultadobusqueda)
	  {
		echo	'<script language="javascript"> ';
		echo	'alert("ERROR NO SE ELIMINO, EXISTE FACTURAS CON ESTE USUARIO,ANULA LAS FACTURAS PARA PODER ELIMINAR");' ;
		echo	'</script>';
	  }
	else
	{
		$this->modelo_usuarios->eliminar_usuario($ciusuario);
		echo	'<script language="javascript"> ';
		echo	'alert("SE ELIMINO EXITOSAMENTE");' ;
		echo	'</script>';
	}
		
		
		$this->mostrar_usuarios();
	}
	
	function direccionar_ingresar_sistema_usuarios()
	{
		
		$this->load->view('vista_ingresar_sistema_usuarios');
	}
	function direccionar_salir_paginaweb()
	{
		
		$this->load->view('vista_pagina_principal');
	}
	function ingresar_sistema_usuarios()
	{
		$ciusuario = $this -> input -> post('ciusuario');
		$contrasena = $this -> input -> post('contrasena');
		
		$resultadobusqueda = $this ->modelo_usuarios->buscar_usuario_contrasena($ciusuario,$contrasena);
		
		if($resultadobusqueda)
		{
			  $datos['buscar'] = $ciusuario;
			  $datosusuario=$this->modelo_usuarios->obtener_usuarios($datos);
			  
			  foreach($datosusuario -> result() as $row)
			  {
			  
			  }
			 
			  $tipousuario = $row->tipo;
			
			  if($tipousuario=="Administrador")
			  {
				 $this->load->view('vista_menu_principal_administrador');
			  }
			
			  if($tipousuario=="Secretaria")
			  {
				$this->load->view('vista_menu_principal_secretaria');
			  }
			    if($tipousuario=="Cajero")
			  {
				$data['ciusuario']=$ciusuario;
				$this->load->view('vista_menu_principal_cajero',$data);
			  }
			  //$this->load->view('vista_menu_principal'); este es general carajo
		}
		else
		{
				echo	'<script language="javascript"> ';
				echo	'alert("CI USUARIO O CONTRASENA INCORRECTOS");' ;
				echo	'</script>';
				$this->load->view('vista_ingresar_sistema_usuarios');
		}
	
	}
}