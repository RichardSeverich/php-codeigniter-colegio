<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_usuarios extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_usuario($datos)
  {
    $this->db->insert('usuarios', array(
      'ciusuario' => $datos['ciusuario'],
      'contrasena' => $datos['contrasena'],
      'tipo' => $datos['tipousuario'],
      'nombres' => $datos['nombres'],
      'apellidos' => $datos['apellidos'],
      'fechanacimiento' => $datos['fechanacimiento'],
      'direccion' => $datos['direccion'],
      'telefono' => $datos['telefono'],
      'email' => $datos['email']
    ));
  }

  function obtener_usuarios($datos)
  {
    if ($datos) {
      $query = $this->db->like('ciusuario', $datos['buscar']);
      $query = $this->db->get('usuarios');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    } else {
      $query = $this->db->get('usuarios');
      if ($query->num_rows() > 0) {
        return $query;
      } else {
        return false;
      }
    }
  }

  function buscar_usuario($ciusuario)
  {
    $this->db->where('ciusuario', $ciusuario);
    $query = $this->db->get('usuarios');
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

  function modificar_usuario($ciusuario, $datos)
  {
    $data = array(
      'contrasena' => $datos['contrasena'],
      'tipo' => $datos['tipousuario'],
      'nombres' => $datos['nombres'],
      'apellidos' => $datos['apellidos'],
      'fechanacimiento' => $datos['fechanacimiento'],
      'direccion' => $datos['direccion'],
      'telefono' => $datos['telefono'],
      'email' => $datos['email']
    );
    $this->db->where('ciusuario', $ciusuario);
    $query = $this->db->update('usuarios', $data);
  }

  function eliminar_usuario($ciusuario)
  {
    $this->db->where('ciusuario', $ciusuario);
    $this->db->delete('usuarios');   //tabla

  }
}
