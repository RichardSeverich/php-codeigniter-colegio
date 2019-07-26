<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	
	
	class Modelo_pruebas extends CI_Model
	{
			function __construct()
			{
				parent:: __construct();
				$this -> load -> database();
			}
			
			
			function registrar_codigocontrol($datos)
			{
				$this -> db->insert('pruebacodigocontrol',array('numautorizacion' => $datos['numautorizacion'],
													 'numfactura' => $datos['numfactura'], 
													 'nitci' => $datos['nitci'],
													 'fecha' => $datos['fecha'],
													 'monto' => $datos['monto'],
													 'llave' => $datos['llave'],
													 'codigocontrol' => $datos['codigocontrol']

													 ));
			}

			function obtener_codigocontrol($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('codigocontrol',$datos['buscar']);
					$query = $this ->db->get('pruebacodigocontrol');
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				}
				else
				{
					$query = $this ->db->get('pruebacodigocontrol');
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				}
			}
			
			function eliminar_codigocontrol($codigocontrol)
			{
				$this->db->where('codigocontrol',$codigocontrol);
				$this->db->delete('pruebacodigocontrol');

			}
			
			
	}
	
	
	
?>
	