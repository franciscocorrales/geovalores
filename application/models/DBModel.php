<?php


	class DBModel extends CI_Model{

		var $limite=17;
		public function __construct(){
			parent::__construct();         
                        $this->load->database();
                        date_default_timezone_set('America/Los_Angeles');
		}

		public function insert($tabla, $columnas, $valores, $condicion){
			
			$query="";
			if( $condicion !=""){
				$query="INSERT INTO $tabla ($columnas) VALUES($valores) WHERE($condicion)";
				$this->db->query($query);
			}else{
			    $query="INSERT INTO $tabla ($columnas) VALUES($valores)";
				$this->db->query($query);
			}
			
			$filas = $this->db->affected_rows();
			return $filas;
		}

		public function select($tabla, $valores, $condicion, $pagina){
			//
			//
			//pagination
			$desde = ceil($pagina)*$this->limite;

			$query="";
			if(!$condicion==""){
				$query="SELECT $valores FROM $tabla WHERE($condicion) LIMIT $desde, $this->limite";
				$query = $this->db->query($query);
			}else{
				$query="SELECT $valores FROM $tabla LIMIT $desde, $this->limite";
				$query = $this->db->query($query);
			}

			//TOTAL COUNT
			if(!$condicion==""){
				$query2="SELECT COUNT(*) AS 'total' FROM $tabla WHERE($condicion)";
				$query2 = $this->db->query($query2);
			}else{
				$query2="SELECT COUNT(*) AS 'total' FROM $tabla ";
				$query2 = $this->db->query($query2);
			}

			$arr=null;
			//LIMIT
			if($query->num_rows() > 0){
				foreach($query->result() as $obj){
					$arr[] = $obj;
				}
			}else{
				return null;
			}

			//COUNT
			if($query2->num_rows() > 0){
				$obj = $query2->result();
				$obj = get_object_vars($obj[0]);
				$obj = $obj['total'];
				$total = ceil($obj/$this->limite);
				$total = array('total'=>$total);
				array_push($arr, $total);
			}else{
				return null;
			}

			return $arr;
		}
		public function select_last($tabla, $valores, $condicion, $orden){
			
			$query="";
			if(!$condicion==""){
				$query="SELECT $valores FROM $tabla WHERE($condicion) ORDER BY $orden DESC LIMIT 1";
				$query = $this->db->query($query);
			}else{
				$query="SELECT $valores FROM $tabla ORDER BY $orden DESC LIMIT 1";
				$query = $this->db->query($query);
			}

			$arr=null;
			if($query->num_rows() > 0){
				foreach($query->result() as $obj){
					$arr[] = get_object_vars($obj);
				}
			}else{
				return null;
			}
			return $arr;
		}


		public function select_by_order($tabla, $valores, $condicion, $orden, $pagina){
			//
			//
			//pagination
			$desde = ceil($pagina)*$this->limite;
			$query="";
			if(!$condicion==""){
				$query="SELECT DISTINCT $valores FROM $tabla WHERE($condicion) ORDER BY $orden ASC LIMIT $desde, $this->limite";
				$query = $this->db->query($query);
			}else{
				$query="SELECT $valores FROM $tabla ORDER BY $orden ASC LIMIT $desde, $this->limite";
				$query = $this->db->query($query);
			}

			//TOTAL COUNT
			if(!$condicion==""){
				$query2="SELECT COUNT(*) AS 'total' FROM $tabla WHERE($condicion)";
				$query2 = $this->db->query($query2);

			}else{
				$query2="SELECT COUNT(*) AS 'total' FROM $tabla ";
				$query2 = $this->db->query($query2);
			}
			
		
			$arr=null;
			//LIMIT
			if($query->num_rows() > 0){
				foreach($query->result() as $obj){
					$arr[] = get_object_vars($obj);
				}
			}else{
				return null;
			}

			//COUN
			if($query2->num_rows() > 0){
				$obj = $query2->result();
				$obj = get_object_vars($obj[0]);
				$obj = $obj['total'];
				$total = ceil($obj/$this->limite);
				$total = array('total'=>$total);
				array_push($arr, $total);
			}else{
				return null;
			}

			return $arr;

		}
		public function select_all($tabla, $valores, $condicion, $orden){
		
			$query="";
			if(!$condicion==""){
				$query="SELECT $valores FROM $tabla WHERE($condicion) ORDER BY $orden ASC";
				$query = $this->db->query($query);
			}else{
				$query="SELECT $valores FROM $tabla ORDER BY $orden ASC";
				$query = $this->db->query($query);
			}

			
			$arr=null;
			//LIMIT
			if($query->num_rows() > 0){
				foreach($query->result() as $obj){
					$arr[] = get_object_vars($obj);
				}
			}else{
				return null;
			}

			return $arr;
		}

		public function update($tabla, $valores, $condicion){
			$query="UPDATE $tabla SET $valores WHERE $condicion";
			$this->db->query($query);
			$filas = $this->db->affected_rows();
			return $filas;

		}

		public function delete($tabla, $condicion){
			$query="DELETE FROM $tabla WHERE  $condicion";
			$this->db->query($query);
			$errtxt = $this->db->_error_message();
			$errno = $this->db->_error_number();			
			$filas = $this->db->affected_rows();
			if ($errno == 1451) {
				return "Error";
			}else{
				return $filas;
			}
		}

		public function count($tabla, $condicion){

			$query="";
			if(!$condicion==""){
				$query="SELECT COUNT(*) AS 'count' FROM $tabla WHERE($condicion)";
				$query = $this->db->query($query);
			}else{
				$query="SELECT COUNT(*) AS 'count' FROM $tabla";
				$query = $this->db->query($query);
			}

			
			$arr=null;
			//LIMIT
			if($query->num_rows() > 0){
				$arr = $query->result();
				$arr = get_object_vars($arr[0]);
				return $arr['count'];
			}else{
				return null;
			}

			
		}
		
		
                
                public function InsertTable($tabla,$data) {
                    try {
                        $this->db->insert($tabla, $data); 
                        return $this->db->insert_id();;
                    } catch (Exception $exc) {
                        return 'error';
                    }
                }
                
                public function UpdateTable($tabla ,$data, $idPublicacion){
                	try {
                		$this->db->where('idPublicacion',$idPublicacion);
                		$this->db->update($tabla, $data);
                		return true;
                	} catch (Exception $e) {
                		return 'error';
                	}
                }
                
                public function UpdateFieldPublicacion($field_value,$field_name, $idPublicacion, $price=''){
                	
                	if(empty($price)){
                		$query="UPDATE details_fields SET field_value = '$field_value' WHERE field_name = '$field_name' and idPublicacion = $idPublicacion  ";
                	}
                	else{
                		$query="UPDATE details_fields SET field_value = '$field_value',newPrice=$price  WHERE field_name = '$field_name' and idPublicacion = $idPublicacion  ";
                	}
                	
                	$this->db->query($query);
                	$filas = $this->db->affected_rows();
                	return $filas;
				
                }
                
                public function selectPublicaciones($table,$idUser){
                	$sql = "SELECT * FROM " .$table." where usuarios_idUsuario = ".$idUser.";" ;
                	$query = $this->db->query($sql);

                	$arr=null;
                	if($query->num_rows() > 0){
                		foreach($query->result() as $obj){
                		$arr[] = get_object_vars($obj);
	                	}
	                }else{
	                	return null;
	                }
	                return $arr;
                }
                
                
                public  function selectDetailsPublicacion($table,$idPublicacion)
                {
                	$sql = "SELECT *
                				FROM {$table}
                						where idPublicacion = {$idPublicacion}	;" ;
                	$query = $this->db->query($sql);
                	                	
                	$arr=null;
                	if($query->num_rows() > 0){
                		foreach($query->result() as $obj){
                			$arr[] = get_object_vars($obj);
                		}
                	}else{
                		return null;
                	}
                	return $arr;
                	
                }
                
                public function selectPublicacion($table,$idPublicacion){
                	$sql = "SELECT * FROM " .$table." where idPublicacion = ".$idPublicacion.";" ;
                	$query = $this->db->query($sql);
                
                	$arr=null;
                	if($query->num_rows() > 0){
                		foreach($query->result() as $obj){
                			$arr[] = get_object_vars($obj);
                		}
                	}else{
                		return null;
                	}
                	return $arr;
                }
                
                
                
                public function selectJoinPublicaciones($table1,$table2,$idUser){
                	$sql = "SELECT *
							FROM {$table1} T1
							INNER JOIN {$table2} T2 ON T1.idPublicacion = T2.idPublicacion
                			where T2.idUsuario = {$idUser}	;" ;
                	$query = $this->db->query($sql);
                
                
	                $arr=null;
	                if($query->num_rows() > 0){
	                	foreach($query->result() as $obj){
	                		$arr[] = get_object_vars($obj);
	                	}
	                }else{
	                	return null;
	                }
	                return $arr;
                }
	}
?>