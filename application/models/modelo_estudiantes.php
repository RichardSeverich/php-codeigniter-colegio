<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	
	
	class Modelo_estudiantes extends CI_Model
	{
			function __construct()
			{
				parent:: __construct();
				$this -> load -> database();
			}
			
			
			function registrar_estudiante($datos)
			{
				$this -> db->insert('estudiantes',array('ciestudiante' => $datos['ciestudiante'],
													 'nombres' => $datos['nombres'],
													 'apellidos' => $datos['apellidos'], 
													 'fechanacimiento' => $datos['fechanacimiento'], 
													 'direccion' => $datos['direccion'], 
													 'telefono' => $datos['telefono'],
													 'email' => $datos['email'],
													 'ciapoderado' => $datos['ciapoderado'],
													 'nombreapoderado' => $datos['nombresapoderado'],
													 'apellidoapoderado' => $datos['apellidosapoderado']

													 ));
			}

			function obtener_estudiantes($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('ciestudiante',$datos['buscar']);
					$query = $this ->db->get('estudiantes');
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
					$query = $this ->db->get('estudiantes');
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
			
			function buscar_estudiante($ciestudiante)
			{
				
					
					$this ->db->where('ciestudiante',$ciestudiante);
					
					$query = $this ->db->get('estudiantes');
					
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				
			}
			
	
			
			function modificar_estudiantes($ciestudiante,$datos)
			{
				$data = array
				(
						 'nombres' => $datos['nombres'],
						 'apellidos' => $datos['apellidos'], 
						'fechanacimiento' => $datos['fechanacimiento'], 
						 'direccion' => $datos['direccion'], 
						 'telefono' => $datos['telefono'],
						 'email' => $datos['email'],
						 'ciapoderado' => $datos['ciapoderado'],
						'nombreapoderado' => $datos['nombresapoderado'],
						 'apellidoapoderado' => $datos['apellidosapoderado']
				);
				$this -> db->where('ciestudiante',$ciestudiante);
				$query = $this -> db -> update('estudiantes',$data);
			}
			
			function eliminar_estudiante($ciestudiante)
			{
				$this->db->where('ciestudiante',$ciestudiante);  // estos son los campos lo que esta entre comillas es de la base de datos
				$this->db->delete('estudiantes');  // esta es la tabla

			}
			
			
	}
	
	
	
?>
	