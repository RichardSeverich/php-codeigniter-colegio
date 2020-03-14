<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_pensiones extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function registrar_pensiones($numinscripcion, $saldodeudor, $numerodepension)
  {
    $data = array(
      $numerodepension => 'pagado'

    );
    $data['saldodeudor'] = $saldodeudor;
    $this->db->where('numinscripcion', $numinscripcion);
    $query = $this->db->update('pensiones', $data);
  }

  function registrar_datosfactura($datos)
  {
    $this->db->insert('datosfactura', array(
      'numfactura' => $datos['numfactura'],
      'numdosificacion' => $datos['numdosificacion'],
      'ciusuario' => $datos['ciusuario'],
      'numinscripcion' => $datos['numinscripcion'],
      'nitcliente' => $datos['nitcliente'],
      'apellidocliente' => $datos['apellidocliente'],
      'cantidadtotal' => $datos['cantidadtotal'],
      'fecha' => $datos['fecha'],
      'fechalimiteemicion' => $datos['fechalimiteemicion']
    ));
  }

  function obtener_datosfactura()
  {
    // esto es la entidad
    $query = $this->db->get('datosfactura');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_datosfactura_porfecha($fecha)
  {
    $this->db->where('fecha', $fecha);
    // esto es la entidad
    $query = $this->db->get('datosfactura');

    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_datosfaturas_numinscripcion($numinscripcion)
  {
    $this->db->where('numinscripcion', $numinscripcion);
    // esto es la entidad
    $query = $this->db->get('datosfactura');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_pensiones()
  {
    // esto es la entidad
    $query = $this->db->get('pensiones');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_pension($numinscripcion)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('numinscripcion', $numinscripcion);
    // esto es la entidad
    $query = $this->db->get('pensiones');

    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function buscar_factura($codfactura)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('codfactura', $codfactura);
    // esto es la entidad
    $query = $this->db->get('datosfactura');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_facturacion_numinscripcion($numinscripcion)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('numinscripcion', $numinscripcion);
    // esto es la entidad
    $query = $this->db->get('datosfactura');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function obtener_facturacion_ciusuario($ciusuario)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('ciusuario', $ciusuario);
    // esto es la entidad
    $query = $this->db->get('datosfactura');

    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
  function obtener_facturacion_numdosificacion($numdosificacion)
  {
    // primero: atributo de la base de datos, luego con que va a comparar
    $this->db->where('numdosificacion', $numdosificacion);
    // esto es la entidad
    $query = $this->db->get('datosfactura');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  function cancelar_pago($numinscripcion, $saldodeudor, $numerodepension)
  {
    $data = array(
      $numerodepension => 'debe'
    );
    $data['saldodeudor'] = $saldodeudor;
    $this->db->where('numinscripcion', $numinscripcion);
    $query = $this->db->update('pensiones', $data);
  }

  function modificar_pensiones($numinscripcion, $saldodeudor, $montopension)
  {
    $data = array(
      'saldodeudor' => $saldodeudor,
      'montopension' => $montopension
    );
    $this->db->where('numinscripcion', $numinscripcion);
    $query = $this->db->update('pensiones', $data);
  }

  function eliminar_factura($codfactura)
  {
    // estos son los campos lo que esta entre comillas es de la base de datos
    $this->db->where('codfactura', $codfactura);
    // esta es la tabla
    $this->db->delete('datosfactura');
  }
}
