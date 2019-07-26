<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	
	
	class Modelo_dosificacion extends CI_Model
	{
			function __construct()
			{
				parent:: __construct();
				$this -> load -> database();
			}
			
			
			function registrar_dosificacion($datos)
			{
				$this -> db->insert('dosificacion',array('nitcolegio' => $datos['nitcolegio'],
													 'numautorizacion' => $datos['numautorizacion'], 
													 'numeroinicio' => $datos['numeroinicio'],
													 'fechalimiteemicion' => $datos['fechalimiteemicion'],
													 'llavedosificacion' => $datos['llavedosificacion']

													 ));
			}

			function obtener_dosificacion($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('numdosificacion',$datos['buscar']);
					$query = $this ->db->get('dosificacion');
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
					$query = $this ->db->get('dosificacion');
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
			
			function obtener_dosificacion_por_nitcoleigo($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('nitcolegio',$datos['buscar']);
					$query = $this ->db->get('dosificacion');
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
					$query = $this ->db->get('dosificacion');
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
		
			
			
			
			function modificar_dosificacion($numdosificacion,$datos)
			{
				$data = array
				(
					     'nitcolegio' => $datos['nitcolegio'],
						'numautorizacion' => $datos['numautorizacion'],
						'numeroinicio' => $datos['numeroinicio'],
						'fechalimiteemicion' => $datos['fechalimiteemicion'],
						'llavedosificacion' => $datos['llavedosificacion']
				);
				$this -> db->where('numdosificacion',$numdosificacion);
				$query = $this -> db -> update('dosificacion',$data);
			}
			
			function eliminar_dosificacion($numdosificacion)
			{
				$this->db->where('numdosificacion',$numdosificacion);
				$this->db->delete('dosificacion');

			}
			
			
	}
	
	
	
?>
	