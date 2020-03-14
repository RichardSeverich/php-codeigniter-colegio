<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_inscripciones extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_inscripcion($datos)
  {
    $this->db->insert('inscripciones', array(
      'ciestudiante' => $datos['ciestudiante'],
      'numcurso' => $datos['numcurso'],
      'aniogestion' => $datos['aniogestion'],
      'numhermano' => $datos['numhermano']
    ));
  }

  function registrar_pensiones($datos)
  {
    $this->db->insert('pensiones', array(
      'numinscripcion' => $datos['numinscripcion'],
      'pension1' => $datos['pension1'],
      'pension2' => $datos['pension2'],
      'pension3' => $datos['pension3'],
      'pension4' => $datos['pension4'],
      'pension5' => $datos['pension5'],
      'pension6' => $datos['pension6'],
      'pension7' => $datos['pension7'],
      'pension8' => $datos['pension8'],
      'pension9' => $datos['pension9'],
      'pension10' => $datos['pension10'],
      'saldodeudor' => $datos['saldodeudor'],
      'descuento' => $datos['descuento'],
      'montopension' => $datos['montopension']
    ));
  }

  function obtener_inscripciones($datos)
  {
    if ($datos) {
      $query = $this->db->like('aniogestion', $datos['buscar']);
      $query = $this->db->get('inscripciones');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('inscripciones');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  // por num curso y ciestudiante
  function buscar_inscripcion($ciestudiante, $numcurso)
  {
    $this->db->where('$numcurso', $numcurso);
    $this->db->where('$ciestudiante', $ciestudiante);
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_inscripcion_por_curso($numcurso)
  {
    $this->db->where('numcurso', $numcurso);
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_inscripcion_por_ciestudiante($ciestudiante)
  {
    $this->db->where('ciestudiante', $ciestudiante);
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_inscripcion_por_ciestudiante_con_like($ciestudiante)
  {
    $this->db->like('ciestudiante', $ciestudiante);
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function devolver_inscripciones()
  {
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_incripcion_por_ciestudiante_aniogestion($ciestudiante, $aniogestion)
  {
    $this->db->where('ciestudiante', $ciestudiante);
    $this->db->where('aniogestion', $aniogestion);
    $query = $this->db->get('inscripciones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function modificar_inscripciones($numinscripcion, $numcurso)
  {
    $data = array(
      'numcurso' => $numcurso
    );
    $this->db->where('numinscripcion', $numinscripcion);
    $query = $this->db->update('inscripciones', $data);
  }

  function eliminar_inscripciones($numinscripcion)
  {
    // estos son los campos lo que esta entre comillas es de la base de datos
    $this->db->where('numinscripcion', $numinscripcion);
    $this->db->delete('pensiones');
    // estos son los campos lo que esta entre comillas es de la base de datos
    $this->db->where('numinscripcion', $numinscripcion);
    $this->db->delete('inscripciones');  // esta es la tabla

  }
}
