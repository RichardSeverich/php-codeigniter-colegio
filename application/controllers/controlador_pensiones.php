<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_pensiones extends CI_Controller {

	function   __construct()
	{
		parent::   __construct();
		 $this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');

		$this ->load->model('modelo_inscripciones');
		$this ->load->model('modelo_cursos');
		$this ->load->model('modelo_pensiones');
		$this ->load->model('modelo_estudiantes');
		$this ->load->model('modelo_dosificacion');
		
		$this->load->library('LibreriaPDF/fpdf');
		$this->load->library('LibreriaCodigoControl/CodigoControlV7');
		$this->load->library('LibreriaQR/ciqrcode');
		
	}
	
	public function index()
	{
		
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->helper('form');
		
	
	}
	
	/// registrar pension no estoi usando.
	function registrar_pension()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnregistrousuarios'];
		
		$aniogestion = $this -> input -> post('aniogestion');
		
		$resultadobusqueda = $this ->modelo_gestion->buscar_gestion($aniogestion);
		if(!$resultadobusqueda )
		{
		
			$datos = array (
			'aniogestion' => $this -> input -> post('aniogestion'),
			'montopreescolar' => $this -> input -> post('montopreescolar'),
			'montoprimaria' => $this -> input -> post('montoprimaria'),
			'montosecundaria' => $this -> input -> post('montosecundaria'),
			'descuentosegundohermano' => $this -> input -> post('descuentosegundohermano'),
			'descuentotercerhermano' => $this -> input -> post('descuentotercerhermano'),
			'descuentocuartohermano' => $this -> input -> post('descuentocuartohermano')
		
			);
		
			$this->modelo_gestion->registrar_gestion($datos);
		
			$this->load->view('vista_registro_gestion');
	     
			echo	'<script language="javascript"> ';
			echo	'alert("SE REGISTRO EXITOSAMENTE");' ;
			echo	'</script>';
		}
        else
		{
			echo	'<script language="javascript"> ';
			echo	'alert("EL CI USUARIO YA EXISTE, NO SE REGISTRO");' ;
			echo	'</script>';
			$this->load->view('vista_registro_gestion');
		}		
			 
	}
	
	function mostrar_inscripciones($ciusuario)
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnbuscar'];
		
		
		$buscarci = $this -> input -> post('buscarci')	;  // ci del estudiante inscrito para buscar
		$buscar =  $this -> input -> post('buscar') ;	//anio gestion de la inscripcion
		
		//echo $buscarci;
		//echo $buscar;
		
		if($buscarci!='')
		{
			if($buscar!='')
			{
				$datos = array (
				'buscar' => ""			
				);
	
				$data['cursos'] = $this -> modelo_cursos->obtener_cursos($datos);
				$data['inscripciones'] = $this -> modelo_inscripciones->buscar_incripcion_por_ciestudiante_aniogestion($buscarci,$buscar);
				
			}
			else
			{
				$datos = array (
				'buscar' => ""			
				);

				$data['cursos'] = $this -> modelo_cursos->obtener_cursos($datos);
				$data['inscripciones'] = $this -> modelo_inscripciones-> buscar_inscripcion_por_ciestudiante($buscarci);
				
			}
			
		}
		else
		{
		
		$datos = array (
			'buscar' => $this -> input -> post('buscar')			
		);

		$data['cursos'] = $this -> modelo_cursos->obtener_cursos($datos);
		
		$data['inscripciones'] = $this -> modelo_inscripciones->obtener_inscripciones($datos);
		
		}
		
    /////
		
		$datos = array (
			'buscar' => ""			
		);
		$data['cursos2'] = $this -> modelo_cursos->obtener_cursos($datos);
	/////
		$data['ciusuario']=$ciusuario;	
		$this->load->view('vista_registro_pensiones_inscripciones',$data);
		
	}
	
	function mostrar_pensiones($ciusuario)/////
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnbuscar'];
		
		$datos = false;
		$ciestudiante =$this -> input -> post('buscar');
		$data['pensiones'] = $this -> modelo_pensiones->obtener_pensiones();
		if($ciestudiante=='')
		{
			  $data['inscripciones'] = $this -> modelo_inscripciones->obtener_inscripciones($datos);
			
		}
		else
		{
		  
		$data['inscripciones'] =  $this -> modelo_inscripciones->buscar_inscripcion_por_ciestudiante_con_like($ciestudiante);
		}
		
		$data['ciusuario']=$ciusuario;	
		
		$this->load->view('vista_mostrar_pensiones',$data);
		
	}
	
	function direccionar_mostrar_a_estudiante_cursos_cursados($ciestudiante)
	{
		
		$this->load->helper ('url');
		$this->load->helper ('html');
		if($ciestudiante=='0')
		{
			$ciestudiante = $this -> input -> post('ciestudiante');
		}
		
		$resultadobusqueda = $this ->modelo_inscripciones->buscar_inscripcion_por_ciestudiante($ciestudiante);
		
		if($resultadobusqueda)
		{
			$data['inscripciones']=$this -> modelo_inscripciones->buscar_inscripcion_por_ciestudiante($ciestudiante);
			$data['ciestudiante']=$ciestudiante;
			$datos= false;
			$data['cursos']=$this -> modelo_cursos->obtener_cursos($datos);
		
			$data['pensiones'] = $this -> modelo_pensiones->obtener_pensiones();

			$this->load->view('vista_mostrar_cursos_estudiantes',$data);
		}
		else
		{
				echo	'<script language="javascript"> ';
				echo	'alert("CI ESTUDIANTE INCORRECTO");' ;
				echo	'</script>';
				$this->load->view('vista_ingresar_sistema_estudiantes');
		}
		
		
		
	}
	
	function mostrar_pensiones_estudiantes($ciestudiante,$numinscripcion)/////////////////////////
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$data['ciestudiante']=$ciestudiante;
		$data['pensiones']=$this -> modelo_pensiones->buscar_pension($numinscripcion);
		$data['estudiante']=$this -> modelo_estudiantes->buscar_estudiante($ciestudiante);
		$this->load->view('vista_mostrar_pensiones_estudiantes',$data);
	}

		
	function mostrar_facturas($ciusuario)///// 
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		//$boton=$_POST['btnbuscar'];
		
		$datos = false;
		
		$data['ciestudiante'] =$this -> input -> post('buscar');
		$data['dosificacion'] = $this -> modelo_dosificacion->obtener_dosificacion($datos);
		$data['inscripciones'] = $this -> modelo_inscripciones->obtener_inscripciones($datos);
		
		
		$data['facturas'] = $this -> modelo_pensiones->obtener_datosfactura();
		
		$data['ciusuario']=$ciusuario;	
	
		
		$this->load->view('vista_mostrar_facturas',$data);
		
	}
	function direccionar_pensiones($numinscripcion,$saldodeudor,$montopension,$numeropensiones,$ciestudiante,$contador,$ciusuario)
	{
		$NumeroPension['0']='0';
		if($numeropensiones)
		{		
			if($numeropensiones=="pension1-pagar")
			{
			   $numerodepension="pension1";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   $contador++;
			   $NumeroPension[$numerodepension]='1';
			}
			if($numeropensiones=="pension2-pagar")
			{
			   $numerodepension="pension2";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   $contador++;
			    $NumeroPension[$numerodepension]='2';
			}
			if($numeropensiones=="pension3-pagar")
			{
			   $numerodepension="pension3";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				 $NumeroPension[$numerodepension]='3';
			}
			if($numeropensiones=="pension4-pagar")
			{
				$numerodepension="pension4";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				 $NumeroPension[$numerodepension]='4';
			}
			if($numeropensiones=="pension5-pagar")
			{
				$numerodepension="pension5";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				 $NumeroPension[$numerodepension]='5';
			}
			if($numeropensiones=="pension6-pagar")
			{
				 $numerodepension="pension6";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				$NumeroPension[$numerodepension]='6';
			}
			if($numeropensiones=="pension7-pagar")
			{
				$numerodepension="pension7";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				$NumeroPension[$numerodepension]='7';
			}
			if($numeropensiones=="pension8-pagar")
			{
				$numerodepension="pension8";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				$NumeroPension[$numerodepension]='8';
			}
			if($numeropensiones=="pension9-pagar")
			{
			   $numerodepension="pension9";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				$NumeroPension[$numerodepension]='9';
			}
			if($numeropensiones=="pension10-pagar")
			{
				$numerodepension="pension10";
			   $saldodeudor= $saldodeudor-$montopension;
			   $this->modelo_pensiones->registrar_pensiones($numinscripcion,$saldodeudor,$numerodepension);
			   	$contador++;
				$NumeroPension[$numerodepension]='10';
			}
			
			///////////// CANCELAR EL PAGO
			if($numeropensiones=="pension1-cancelar")
			{
			   $numerodepension="pension1";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);	
				$contador--;
			}
			if($numeropensiones=="pension2-cancelar")
			{
			   $numerodepension="pension2";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension3-cancelar")
			{
			   $numerodepension="pension3";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension4-cancelar")
			{
			   $numerodepension="pension4";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension5-cancelar")
			{
			   $numerodepension="pension5";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension6-cancelar")
			{
				$numerodepension="pension6";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension7-cancelar")
			{
				$numerodepension="pension7";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension8-cancelar")
			{
			    $numerodepension="pension8";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
			if($numeropensiones=="pension9-cancelar")
			{
			  $numerodepension="pension9";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
		   if($numeropensiones=="pension10-cancelar")
			{
			   $numerodepension="pension10";
			   $saldodeudor= $saldodeudor+$montopension;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);
			   $contador--;
			}
		}
		
	
		$data['contador']=$contador;
		$data['pensiones']= $this->modelo_pensiones->buscar_pension($numinscripcion);
		$data['estudiante']= $this->modelo_estudiantes->buscar_estudiante($ciestudiante);
		$data['datosfactura']= $this->modelo_pensiones->obtener_datosfaturas_numinscripcion($numinscripcion);
		$data['ciusuario']=$ciusuario;
		$data['NumeroPensiones']=$NumeroPension;
		$this->load->view('vista_registro_pensiones',$data);
		
	}
	
	function direccionar_registro_gestion()
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$this->load->view('vista_registro_gestion');
	}
	
	function direccionar_menu_principal($ciusuario)
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$data['ciusuario']=$ciusuario;
		
		
		$this->load->view('vista_menu_principal_cajero',$data);
	}
	
     function direccionar_menu_principal_pensiones($ciusuario,$contador,$numinscripcion)
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$data['ciusuario']=$ciusuario;
		//// new new/
		
		$datospensiones= $this->modelo_pensiones->buscar_pension($numinscripcion);
		
		foreach ($datospensiones-> result() as $row1)
		{
						
		}
	
		
		$pension[1]=$row1->pension1;
		$pension[2]=$row1->pension2;
		$pension[3]=$row1->pension3;
		$pension[4]=$row1->pension4;
		$pension[5]=$row1->pension5;
		$pension[6]=$row1->pension6;
		$pension[7]=$row1->pension7;
		$pension[8]=$row1->pension8;
		$pension[9]=$row1->pension9;
		$pension[10]=$row1->pension10;
		$saldodeudor=$row1->saldodeudor;
		$montopension=$row1->montopension;
		$saldodeudor=$saldodeudor+$contador*$montopension;
											
		$num = 10;
		$i=0;
		while($i<$contador)
		{
		
			if($pension[$num]=="pagado")
			{
			   $numerodepension="pension".$num;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);	
				$i=$i+1;
			}
			$num=$num-1;
			
		} //fin for
		////
		
		$this->load->view('vista_menu_principal_cajero',$data);
	}
	
	  function direccionar_menu_gestionar_cobro_pensiones($ciusuario)
	{
		$this->load->helper ('url');
		$this->load->helper ('html');
		$data['ciusuario'] = $ciusuario;
		$this->load->view('vista_gestionar_cobro_pensiones',$data);
	}
	public function direccionar_generar_facturas($montopension,$contador,$numinscripcion,$ciestudiante,$ciusuario)
	{

	 if($contador==0)
	 {
			echo	'<script language="javascript"> ';
			echo	'alert("NO PAGO NINGUNA PENSION, NO SE PUEDE FACTURAR");' ;
			echo	'</script>';
	 }
	 else
	 {
		$nitcliente = $this -> input -> post('nitcliente');
		$apellidocliente = $this -> input -> post('apellidocliente');
		
		echo '<script type="text/javascript" language="javascript"> ';
		
		echo 'window.open("'   .base_url().   'index.php/controlador_pensiones/generar_facturas/'
		.$montopension.'/'   
		.$contador.'/'
		.$nitcliente.'/' 
		.$apellidocliente.'/'
		.$numinscripcion.'/'
		.$ciusuario.'/'
		.$ciestudiante.
		'","nuevaVentana","width=300, height=400");';
		
		echo '</script> ';
	    
		//echo '<script type="text/javascript" language="javascript"> 
		//	window.open("http://www.something.com"); 
	    //</script>';
		}
		
	    $data['contador']=0;
		$data['pensiones']= $this->modelo_pensiones->buscar_pension($numinscripcion);
		$data['estudiante']= $this->modelo_estudiantes->buscar_estudiante($ciestudiante);
		$data['datosfactura']= $this->modelo_pensiones->obtener_datosfaturas_numinscripcion($numinscripcion);
		
		//echo $nitcliente;
		//echo $apellidocliente;
		$data['ciusuario']=$ciusuario;
		
		$this->load->view('vista_registro_pensiones',$data);
		
	}
	
	public function generar_qr($cadenaqr)
	{
		//hacemos configuraciones	   
		
		$params['data'] = $cadenaqr;
        $params['level'] = 'H';
        $params['size'] = 2; 
		 //decimos el directorio a guardar el codigo qr, en este 
        //caso una carpeta en la raíz llamada qr_code
		$params['savename'] = FCPATH.'docs_facturacion/codigoqr.png';
		  //generamos el código qr
	     $this->ciqrcode->generate($params);    
	}
 	public function generar_facturas($montopension,$contador,$nitcliente,$apellidocliente,$numinscripcion,$ciusuario, $ciestudiante)
	{
				
		//require( base_url().'docs_pdf/fpdf/fpdf.php');

		//require( base_url().'application\libraries\CodigoControl\codigo_control.class.php');

		//$var="NIT CLIENTE";

	   // require( base_url().'application\libraries\LibreriaQR\qrlib.php');

	   //error_reporting(E_ALL ^ E_NOTICE);
	 
	 $estudiante= $this->modelo_estudiantes->buscar_estudiante($ciestudiante);
	   foreach ( $estudiante-> result() as $rowestudiante)
				{	
				  $nombres_estudiante=$rowestudiante->nombres;
				  $apellidos_estudiante=$rowestudiante->apellidos;
				  
				}
	   ////////
		
	 $datos['buscar']=false;
	   
	 $datosdosificacion = $this->modelo_dosificacion->obtener_dosificacion($datos);
		
	 if($datosdosificacion != FALSE) // SI EXISTEN DATOS DE DOSIFICACION
	 {
			foreach ($datosdosificacion -> result() as $row)
			{
						
			}
			
			$NumDosificacionDatosDosificacion=$row->numdosificacion;
			$nitcolegio=$row->nitcolegio;
			$numeroinicio=$row->numeroinicio;
			//$numerofinal=$row->numerofinal;
				
			$datosfactura = $this->modelo_pensiones->obtener_datosfactura();
			
			$band0=0;
			if($datosfactura!= false) // SI EXISTEN DATOS DE FACTURA
			{
				foreach ($datosfactura-> result() as $row1)
				{	
				}

					$NumDosificacionFacturaAnterior=$row1->numdosificacion;
				
					if($NumDosificacionFacturaAnterior==$NumDosificacionDatosDosificacion) // Si sigue siendo la misma dosificacion
					{

							$numeroinicio=$row1->numfactura;
							$numeroinicio++;
							$band0=1;
								//echo 'band = 1 1';
							
					}
					else // si no sigue siendo la misma dosificacion
					{
							$band0=1;
							
					}
					
					
					
			}
			else // SI NO EXISTEN DATOS DE FACTURA
			{
					//echo 'band = 1 2';
			$band0=1;
			}
				
				
			if($band0==1)
			{
				$fechacompra=date("dmy");
				$numero_autorizacion=$row->numautorizacion; // NUMERO AUTORIZACION
				$numero_factura=$numeroinicio;        //NUMERO FACTURA
				$nit_cliente =$nitcliente;    //NIT/CI
				$fecha_compra =$fechacompra;      //FECHA
				$monto_compra =$montopension*$contador;			 //MONTO
				$clave = $row->llavedosificacion;   //LLAVE
				//PARA CAMBIAR LA FECHA
				//$FechaLimiteEmicion =date("d/m/Y", strtotime(date("m/d/Y")." +6 month"));  //asi se suma 6 meses
				$FechaLimiteEmicion=$row->fechalimiteemicion;
				
				////
				// AQUI EMPIEZA EL PDF
				$pdf=new FPDF('P','mm','Letter');
				$pdf->AddPage();
				$pdf->SetFont('Arial','',10);
				//$pdf->Cell(100,5,'Nit cliente: '.$var,0,1,'C');
				$pdf->Cell(100,5,'UNIDAD EDUCATIVA MARIA AUXILIADORA',0,1,'C');  //ANCHO DE LA CELDA/ ALTO DE LA CELDA/ TEXTO/ BORDES 0 O 1 MARCO/ LN NO SE PA QUE/ C CENTRADO
				$pdf->Cell(100,5,'CRISTO REY',0,1,'C');
				$pdf->Cell(100,5,'Avenida Hernando de Soto esq. Diego de Almagro',0,1,'C');
				$pdf->Cell(100,5,'Telefono:  4375773 ',0,1,'C');
				$pdf->Cell(100,5,'Cochabamba-Bolivia',0,1,'C');
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(100,5,'FACTURA ORIGINAL',0,1,'C');
				$pdf->Cell(100,5,'------------------------------------------------',0,1,'C');
				$pdf->SetFont('Arial','',10);
				$pdf->Cell(100,5,'NIT: '.$nitcolegio,0,1,'C');
				$pdf->Cell(100,5,'FACTURA N:  '.$numero_factura,0,1,'C');
				$pdf->Cell(100,5,'AUTORIZACION N: '.$numero_autorizacion,0,1,'C');
				$pdf->Cell(100,5,'------------------------------------------------------',0,1,'C');
				$pdf->Cell(100,5,'Actividad Economica: Educacion',0,1,'C');
				$pdf->Cell(100,5,'Fecha:  '.date('d/m/Y'),0,1,'C');
		
				$pdf->Cell(100,5,'Cliente:   '.$apellidocliente,0,1,'C');
				$pdf->Cell(100,5,'NI/CI:   '.$nit_cliente,0,1,'C');
				$pdf->Cell(100,5,'------------------------------------------------------',0,1,'C');
		
				$pdf->Cell(100,5,'ESTUDIANTE:',0,1,'C');
				$pdf->Cell(100,5,'MOMBRES: '.$nombres_estudiante,0,1,'C');
				$pdf->Cell(100,5,'APELLIDOS: '.$apellidos_estudiante,0,1,'C');
				
				$pdf->Cell(100,5,'------------------------------------------------------',0,1,'C');
				$pdf->Cell(100,5,'    PENSION         MONTO',0,1,'C');
		
				///// aky poner para repetir
				$total=0;
		
				for($i=1; $i<=$contador;$i++)
				{
					$pdf->Cell(100,5,'pension '.$i.'      '.$montopension,0,1,'C');
					$total=$total+$montopension;
				}
				$pdf->Cell(100,10,'TOTAL:  '.$total,0,1,'C');
				$pdf->Cell(100,5,'------------------------------------------------------',0,1,'C');
		
				$codigodecontrol= CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
				$pdf->Cell(100,5,'Codigo de Control: '.$codigodecontrol,0,1,'C');
				$pdf->Cell(100,5,'FECHA LIMITE DE EMISION '.$FechaLimiteEmicion,0,1,'C');
		
		
				// AQUI EMPEZAMOS EL CODIGO QR
				$razonsocial='Unidad educativa Maria Auxiliadora Cristo Rey';
				$fechaemicion=date('d/m/Y');
				$cadenaqr=$nitcolegio.$razonsocial.$numero_factura.$numero_autorizacion.$fechaemicion.$total.$codigodecontrol.$FechaLimiteEmicion.$nit_cliente.$apellidocliente;
				$this->generar_qr($cadenaqr);
		
				//llamamos a la imagen png generada qr
				$pdf->Image(''.base_url().'docs_facturacion/codigoqr.png',45);   //direccion,x, y, tamano se pone
				//Guardar los datos de las facturas
				
				$pdf->Cell(100,5,'" LA ALTERACION, FALSIFICACION O COMERCIALIZACION',0,1,'C');
				$pdf->Cell(100,5,'ILEGAL DE ESTE DOCUMENTO TIENE CARCEL "',0,1,'C');
				
				$datos['numfactura']=$numero_factura;
				$datos['numdosificacion']=$NumDosificacionDatosDosificacion;
				$datos['ciusuario']=$ciusuario;
				$datos['numinscripcion']=$numinscripcion;
				$datos['nitcliente']=$nit_cliente;
				$datos['apellidocliente']=$apellidocliente;
				$datos['cantidadtotal']=$monto_compra;   // o total tambien puede ser
				$datos['fecha']=date('d/m/Y');
				$datos['fechalimiteemicion']=$FechaLimiteEmicion;
				$this->modelo_pensiones->registrar_datosfactura($datos);
				$contador=0;
				$pdf->Output();
				
			}
		
			else
			{
				echo "NO SE PUEDE FACTURAR PORQUE SE ACABARON TODOS LOS NUMERO DE FACTURACION, REGISTRE UNA NUEVA DOSIFICACION";
			}
		 
		
		
	}
	    else { echo 'NO HAY DATOS DE DOSIFICACION EN EL SISTEMA, REGISTRE DOSIFICACION PARA PODER FACTURAR'; }
		
	
	}//DE LA FUNCION	
	

	function direccionar_salir_paginaweb()
	{
		
		$this->load->view('vista_pagina_principal');
	}
	
	function eliminar_facturas($codfactura,$numinscripcion,$ciusuario)
	{
		
		$datospensiones= $this->modelo_pensiones->buscar_pension($numinscripcion);
		$datosfactura= $this->modelo_pensiones->buscar_factura($codfactura);
		foreach ($datospensiones-> result() as $row1)
		{
						
		}
		foreach ($datosfactura-> result() as $row2)
		{
						
		}
		$montopension=$row1->montopension;
		$saldodeudor=$row1->saldodeudor;
		$cantidadtotal=$row2->cantidadtotal;
		$pensionespagadas=$cantidadtotal/$montopension;   // 367 / 367
		$saldodeudor= $saldodeudor+$pensionespagadas*$montopension;
		
		$pension[1]=$row1->pension1;
		$pension[2]=$row1->pension2;
		$pension[3]=$row1->pension3;
		$pension[4]=$row1->pension4;
		$pension[5]=$row1->pension5;
		$pension[6]=$row1->pension6;
		$pension[7]=$row1->pension7;
		$pension[8]=$row1->pension8;
		$pension[9]=$row1->pension9;
		$pension[10]=$row1->pension10;
											
		$num = 10;
		$i=0;
		while($i<$pensionespagadas)
		{
		
			if($pension[$num]=="pagado")
			{
			   $numerodepension="pension".$num;
			   $this->modelo_pensiones->cancelar_pago($numinscripcion,$saldodeudor,$numerodepension);	
				$i=$i+1;
			}
			$num=$num-1;
			
		} //fin for
	  
		$this->modelo_pensiones->eliminar_factura($codfactura);
		echo	'<script language="javascript"> ';
		echo	'alert("SE ANULO EXITOSAMENTE");' ;
		echo	'</script>';
		$this->mostrar_facturas($ciusuario);
	}
	

}