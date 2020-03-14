<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_inscripciones extends CI_Controller
{
  function   __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
    $this->load->model('modelo_inscripciones');
    $this->load->model('modelo_estudiantes');
    $this->load->model('modelo_cursos');
    $this->load->model('modelo_gestion');
    $this->load->model('modelo_pensiones');
  }

  public function index()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->helper('form');
  }

  function registrar_inscripcion($ciestudiante, $numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso)
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $resultadoestudiante = $this->modelo_estudiantes->buscar_estudiante($ciestudiante);
    $datosabuscar['buscar'] = $aniogestion;
    $ResultadoEstudiantesInscritos = $this->modelo_inscripciones->obtener_inscripciones($datosabuscar);
    // deste Aqui codigo para verificar que numero de hermano es
    foreach ($resultadoestudiante->result() as $row) {
      $ciapoderado = $row->ciapoderado;
    }
    $numhermano = 1;
    if ($ResultadoEstudiantesInscritos)  // si existen estudiantes inscritos
    {
      foreach ($ResultadoEstudiantesInscritos->result() as $row1)  // para estudiantes inscritos
      {
        $ciestudiantesinscrito = $row1->ciestudiante;   // asigan el valor de primer estudiante inscrito
        $DatosEstudianteInscrito = $this->modelo_estudiantes->buscar_estudiante($ciestudiantesinscrito); // devuelve datos estudiante inscrito
        foreach ($DatosEstudianteInscrito->result() as $row2)  // los datos del estudiante inscrito
        {
          $ciapoderado2 = $row2->ciapoderado;  // asigna el valor de ci apoderado
        }
        if (strcmp($ciapoderado, $ciapoderado2) == 0) {
          $numhermano++;
        }
      }
    }
    // aky termina la verificacion de hermano 
    // esta parte verifica que el estudiante no se haya inscrito 2 veses en la misma gestion.
    $resultadobusqueda = $this->modelo_inscripciones->buscar_incripcion_por_ciestudiante_aniogestion($ciestudiante, $aniogestion);
    if (!$resultadobusqueda) {
      $datos['ciestudiante'] = $ciestudiante;
      $datos['numcurso'] = $numcurso;
      $datos['aniogestion'] = $aniogestion;
      $datos['numhermano'] = $numhermano;
      $this->modelo_inscripciones->registrar_inscripcion($datos);
      //PENSIONES
      $resultadobusqueda = $this->modelo_inscripciones->buscar_incripcion_por_ciestudiante_aniogestion($ciestudiante, $aniogestion);
      foreach ($resultadobusqueda->result() as $row3)  // para sacar el numero de la inscripcion
      {
        $numinscripcion = $row3->numinscripcion;
      }
      $datosgestion = $this->modelo_gestion->buscar_gestion($aniogestion);
      foreach ($datosgestion->result() as $row4)  // para los datos de la gestion
      {
        $montopreescolar = $row4->montopreescolar;
        $montoprimaria = $row4->montoprimaria;
        $montosecundaria = $row4->montosecundaria;
        $descuentosegundohermano = $row4->descuentosegundohermano;
        $descuentotercerhermano = $row4->descuentotercerhermano;
        $descuentocuartohermano = $row4->descuentocuartohermano;
      }
      //verifica el descuento
      $descuento = 0;
      if ($numhermano == 1) {
        $descuento = 0;
      }
      if ($numhermano == 2) {
        $descuento = $descuentosegundohermano;
      }
      if ($numhermano == 3) {
        $descuento = $descuentotercerhermano;
      }
      if ($numhermano > 3) {
        $descuento = $descuentocuartohermano;
      }

      // verificar el monto mensualidad
      if ($niveleducativo == 'PRE-ESCOLAR') {
        $montopension = $montopreescolar;
      }
      if ($niveleducativo == 'PRIMARIA') {
        $montopension = $montoprimaria;
      }
      if ($niveleducativo == 'SECUNDARIA') {
        $montopension = $montosecundaria;
      }
      $saldodeudor = $montopension * 10;
      $datospension['numinscripcion'] = $numinscripcion;
      $datospension['pension1'] = 'debe';
      $datospension['pension2'] = 'debe';
      $datospension['pension3'] = 'debe';
      $datospension['pension4'] = 'debe';
      $datospension['pension5'] = 'debe';
      $datospension['pension6'] = 'debe';
      $datospension['pension7'] = 'debe';
      $datospension['pension8'] = 'debe';
      $datospension['pension9'] = 'debe';
      $datospension['pension10'] = 'debe';
      $datospension['saldodeudor'] = $saldodeudor - $saldodeudor * ($descuento / 100);
      $datospension['descuento'] = $descuento;
      $datospension['montopension'] = $montopension - $montopension * ($descuento / 100);
      $this->modelo_inscripciones->registrar_pensiones($datospension);
      $this->direccionar_registro_inscripciones_elegir_estudiantes($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso);
      echo  '<script language="javascript"> ';
      echo  'alert("SE REGISTRO EXITOSAMENTE");';
      echo  '</script>';
    } else {
      $this->direccionar_registro_inscripciones_elegir_estudiantes($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso);
      echo  '<script language="javascript"> ';
      echo  'alert("EL ESTUDIANTE YA ESTA INSCRITO EN ESTA GESTION");';
      echo  '</script>';
    }
  }

  function mostrar_inscripciones()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnbuscar'];

    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );

    $data['cursos'] = $this->modelo_cursos->obtener_cursos($datos);
    $data['inscripciones'] = $this->modelo_inscripciones->obtener_inscripciones($datos);
    $this->load->view('vista_mostrar_inscripciones', $data);
  }

  function mostrar_cursos()  // esta funcionando
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnbuscar'];
    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );
    $data['cursos'] = $this->modelo_cursos->obtener_cursos($datos);
    $this->load->view('vista_registro_inscripciones_cursos', $data);
  }

  function mostrar_estudiantes($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso)
  {
    $this->load->helper('url');
    $this->load->helper('html');
    //$boton=$_POST['btnbuscar'];
    $datos = array(
      'buscar' => $this->input->post('buscar'),
    );
    $data['numcurso'] = $numcurso;
    $data['aniogestion'] = $aniogestion;
    $data['niveleducativo'] = $niveleducativo;
    $data['nombrecurso'] = $nombrecurso;
    $data['paralelocurso'] = $paralelocurso;

    $data['estudiantes'] = $this->modelo_estudiantes->obtener_estudiantes($datos);
    $this->load->view('vista_registro_inscripciones_estudiantes', $data);
  }

  function direccionar_registro_inscripciones_elegir_cursos()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $datos = FALSE;
    $data['cursos'] = $this->modelo_cursos->obtener_cursos($datos);
    $this->load->view('vista_registro_inscripciones_cursos', $data);
  }

  function direccionar_registro_inscripciones_elegir_estudiantes($numcurso, $aniogestion, $niveleducativo, $nombrecurso, $paralelocurso)
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $datos = FALSE;
    $data['estudiantes'] = $this->modelo_estudiantes->obtener_estudiantes($datos);
    //$data['numcurso'] = $datosinscripcion['numcurso'];
    //$data['aniogestion'] = $datosinscripcion['aniogestion'];
    $data['numcurso'] = $numcurso;
    $data['aniogestion'] = $aniogestion;
    $data['niveleducativo'] = $niveleducativo;
    $data['nombrecurso'] = $nombrecurso;
    $data['paralelocurso'] = $paralelocurso;
    $this->load->view('vista_registro_inscripciones_estudiantes', $data);
  }

  function direccionar_menu_principal()
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $this->load->view('vista_menu_principal_secretaria');
  }

  function direccionar_modificar_inscripciones_elegir_cursos($numinscripcion, $aniogestion)
  {
    $this->load->helper('url');
    $this->load->helper('html');
    $datos['buscar'] = $aniogestion;
    $data['cursos'] = $this->modelo_cursos->obtener_cursos($datos);
    $data['numinscripcion'] = $numinscripcion;
    $data['aniogestion'] = $aniogestion;
    $this->load->view('vista_modificar_inscripciones_elegir_cursos', $data);
  }

  function modificar_inscripciones($numinscripcion, $numcurso, $aniogestion, $niveleducativo)
  {
    $datosgestion = $this->modelo_gestion->buscar_gestion($aniogestion);
    foreach ($datosgestion->result() as $row)  // Saca los datos de la gestion
    {
      $montopreescolar = $row->montopreescolar;
      $montoprimaria = $row->montoprimaria;
      $montosecundaria = $row->montosecundaria;
    }
    $datospension = $this->modelo_pensiones->buscar_pension($numinscripcion);
    foreach ($datospension->result() as $row)  // Saca para los datos de la pension
    {
      $pension1 = $row->pension1;
      $pension2 = $row->pension2;
      $pension3 = $row->pension3;
      $pension4 = $row->pension4;
      $pension5 = $row->pension5;
      $pension6 = $row->pension6;
      $pension7 = $row->pension7;
      $pension8 = $row->pension8;
      $pension9 = $row->pension9;
      $pension10 = $row->pension10;
      $descuento = $row->descuento;
      $montopensionactual = $row->montopension;
    }

    //verifica el nivel educativo
    if ($niveleducativo == 'PRE-ESCOLAR') {
      $montopensionnuevo = $montopreescolar;
    }
    if ($niveleducativo == 'PRIMARIA') {
      $montopensionnuevo = $montoprimaria;
    }
    if ($niveleducativo == 'SECUNDARIA') {
      $montopensionnuevo = $montosecundaria;
    }
    $saldodeudornuevo = $montopensionnuevo * 10;
    //verifica cuantas mensualidades ya pago el estudiante
    $band = 0;  //para verificar si tiene alguna pension ya pagada
    if ($pension1 == "pagado") {
      $band++;
    }
    if ($pension2 == "pagado") {
      $band++;
    }
    if ($pension3 == "pagado") {
      $band++;
    }
    if ($pension4 == "pagado") {
      $band++;
    }
    if ($pension5 == "pagado") {
      $band++;
    }
    if ($pension6 == "pagado") {
      $band++;
    }
    if ($pension7 == "pagado") {
      $band++;
    }
    if ($pension8 == "pagado") {
      $band++;
    }
    if ($pension9 == "pagado") {
      $band++;
    }
    if ($pension10 == "pagado") {
      $band++;
    }
    if ($band > 0) {
      echo  '<script language="javascript"> ';
      echo  'alert("NO SE MODIFICO PORQUE TIENE PENSIONES PAGADAS EN ESTA INCRIPCION CANCELE LOS PAGOS PORFAVOR");';
      echo  '</script>';
    } else {
      $saldodeudornuevo = $saldodeudornuevo - $saldodeudornuevo * ($descuento / 100);
      $montopensionnuevo = $montopensionnuevo - $montopensionnuevo * ($descuento / 100);
      $datos = array(
        'numinscripcion' => $numinscripcion,
        'numcurso' => $numcurso

      );
      $this->modelo_pensiones->modificar_pensiones($numinscripcion, $saldodeudornuevo, $montopensionnuevo);
      $this->modelo_inscripciones->modificar_inscripciones($numinscripcion, $numcurso);
      echo  '<script language="javascript"> ';
      echo  'alert("SE MODIFICO EXITOSAMENTE");';
      echo  '</script>';
    }
    $this->mostrar_inscripciones();
  }

  function eliminar_inscripciones($numinscripcion)
  {
    $resultadobusqueda = $this->modelo_pensiones->obtener_facturacion_numinscripcion($numinscripcion);
    if ($resultadobusqueda) {
      echo  '<script language="javascript"> ';
      echo  'alert("ERROR NO SE ELIMINO, EXISTEN FACTURAS A NOMBRE DE ESTE ESTUDIANTE, ELIMINE LAS FACTURAS PARA PODER ELIMINAR");';
      echo  '</script>';
    } else {
      $this->modelo_inscripciones->eliminar_inscripciones($numinscripcion);
      echo  '<script language="javascript"> ';
      echo  'alert("SE ELIMINO EXITOSAMENTE");';
      echo  '</script>';
    }

    $this->mostrar_inscripciones();
  }

  function direccionar_salir_paginaweb()
  {
    $this->load->view('vista_pagina_principal');
  }
}
