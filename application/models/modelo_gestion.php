<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_gestion extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_gestion($datos)
  {
    $this->db->insert('gestion', array(
      'aniogestion' => $datos['aniogestion'],
      'montopreescolar' => $datos['montopreescolar'],
      'montoprimaria' => $datos['montoprimaria'],
      'montosecundaria' => $datos['montosecundaria'],
      'descuentosegundohermano' => $datos['descuentosegundohermano'],
      'descuentotercerhermano' => $datos['descuentotercerhermano'],
      'descuentocuartohermano' => $datos['descuentocuartohermano']
    ));
  }

  function obtener_gestiones($datos)
  {
    if ($datos) {
      $query = $this->db->like('aniogestion', $datos['buscar']);
      $query = $this->db->get('gestion');   // la tabla
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('gestion');   // la tabla
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  function buscar_gestion($aniogestion)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('aniogestion', $aniogestion);  
    $query = $this->db->get('gestion');  // esto es la entidad
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_usuario_contrasena($ciusuario, $contrasena)
  {
    $this->db->where('ciusuario', $ciusuario);
    $this->db->where('contrasena', $contrasena);
    $query = $this->db->get('usuarios');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function modificar_gestion($aniogestion, $datos)
  {
    $data = array(
      'montopreescolar' => $datos['montopreescolar'],
      'montoprimaria' => $datos['montoprimaria'],
      'montosecundaria' => $datos['montosecundaria'],
      'descuentosegundohermano' => $datos['descuentosegundohermano'],
      'descuentotercerhermano' => $datos['descuentotercerhermano'],
      'descuentocuartohermano' => $datos['descuentocuartohermano']

    );
    $this->db->where('aniogestion', $aniogestion);
    $query = $this->db->update('gestion', $data);
  }

  function eliminar_gestion($aniogestion)
  {
    $this->db->where('aniogestion', $aniogestion);
    $this->db->delete('gestion');
  }
}
