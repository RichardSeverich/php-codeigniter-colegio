<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	
	
	class Modelo_cursos extends CI_Model
	{
			function __construct()
			{
				parent:: __construct();
				$this -> load -> database();
			}
			
			
			function registrar_cursos($datos)
			{
				$this -> db->insert('cursos',array('aniogestion' => $datos['aniogestion'],
													 'niveleducativo' => $datos['niveleducativo'],
													 'nombrecurso' => $datos['nombrecurso'], 
													 'paralelocurso' => $datos['paralelocurso'] 

													 ));
			}

			function obtener_cursos($datos)
			{
				
				if($datos)
				{
					$query = $this ->db->like('aniogestion',$datos['buscar']);
					$query = $this ->db->get('cursos');
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
					$query = $this ->db->get('cursos');
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
			
			function obtener_cursos_por_numcurso($numcurso)
			{

					$query = $this ->db->like('numcurso',$numcurso);
					$query = $this ->db->get('cursos');
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				
			
			}
			
			function buscar_CursosAnioNivelNombreParalelo($aniogestion,$niveleducativo,$nombrecurso,$paralelocurso)
			{
					$this ->db->where('aniogestion',$aniogestion);
					$this ->db->where('niveleducativo',$niveleducativo);
					$this ->db->where('nombrecurso',$nombrecurso);
					$this ->db->where('paralelocurso',$paralelocurso);
					$query = $this ->db->get('cursos');
					
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
			}
			
			function buscar_cursos($aniogestion)
			{
				
					
					$this ->db->where('aniogestion',$aniogestion);
					
					$query = $this ->db->get('cursos');
					
					if($query->num_rows() > 0) 
					{
						return $query;
					}
					else
					{
						return false;
					}
				
			}

			function modificar_cursos($numcurso,$datos)
			{
				$data = array
				(
						'aniogestion' => $datos['aniogestion'], 
					    'niveleducativo' => $datos['niveleducativo'],
						'nombrecurso' => $datos['nombrecurso'], 
						'paralelocurso' => $datos['paralelocurso']
					
				);
				$this -> db->where('numcurso',$numcurso);
				$query = $this -> db -> update('cursos',$data);
			}
			
			function eliminar_cursos($numcurso)
			{
				$this->db->where('numcurso',$numcurso);  // estos son los campos lo que esta entre comillas es de la base de datos
				$this->db->delete('cursos');  // esta es la tabla

			}
			
			
	}
	
	
	
?>
	