<?php
	/**
	 
	*/	
	class Iniciomodel extends CI_Model{
    
    public function __construct(){
		parent::__construct();
	}

	

	//********************
	//		 READ
	//********************
	

	public function getmapainicio(){

		
		
		$this->load->database();

		
			

	################ Continue generating Map XML #################

	//Create a new DOMDocument object
	$dom = new DOMDocument("1.0");
	$node = $dom->createElement("markers"); //Create new element node
	$parnode = $dom->appendChild($node); //make the node show up 

	// Select all the rows in the markers table
	
	$query1="SELECT * FROM publicaciones WHERE 1";
	$results1 = $this->db->query($query1);
	$query="SELECT * FROM details_fields WHERE 1";
	$results = $this->db->query($query);
	if (!$results) {  
		header('HTTP/1.1 500 Error: Could not get markers!'); 
		exit();
	} 

	//set document header to text/xml
	header("Content-type: text/xml"); 

	// Iterate through the rows, adding XML nodes for each
	if($results->num_rows() > 0){
			
			 
				foreach($results1->result() as $obj1){
				$node = $dom->createElement("marker");  
					  $newnode = $parnode->appendChild($node); 	
				foreach($results->result() as $obj){
					$arr[] = get_object_vars($obj);
					$i = 0;
					  if ($obj1->idPublicacion == $obj->idPublicacion) {
					 
					  
					 
					  if ($obj->field_name == 'name') {  
					  $newnode->setAttribute("name",$obj->field_value);
					  }
					  if ($obj->field_name == 'address') {  
					  $newnode->setAttribute("address", $obj->field_value);  
					  }
					  if ($obj->field_name == 'lat') { 
					  $newnode->setAttribute("lat", $obj->field_value);
					  }
					  if ($obj->field_name == 'lng') {   
					  $newnode->setAttribute("lng", $obj->field_value);  
					  }
					  if ($i == 0) {
					  	$newnode->setAttribute("type", $obj1->tipo_categoria);
					  }
					  	
					  $i++;
					}
				}
			}

			}else{
				return null;
			}
			return $dom->saveXML();
	
		
		
	}

	public function nueva_busqueda($campos)
	{
		$this->load->database();

		
			

	################ Continue generating Map XML #################

	//Create a new DOMDocument object
	$dom = new DOMDocument("1.0");
	$node = $dom->createElement("markers"); //Create new element node
	$parnode = $dom->appendChild($node); //make the node show up 
		//definimos si descripción viene vacio o no para utilizar el operador and or
		$and_or = $this->input->post('precio1') !== '' ? ' OR ' : ' AND ';
			
		$condiciones = array();
		
		//recorremos los campos del formulario
		foreach($campos as $campo){
			
			//si llegan las variables y no están vacias
			if($this->input->post($campo) && $this->input->post($campo) != '') 
			{
				
			    //definimos la condición para hacer la búsqueda de los campos y de 
			    //esta forma podemos hacer uso del array condiciones fuera del loop
			    $condiciones[] = "field_value LIKE '%" . $this->input->post($campo) . "%'";
				
	        }
			
		}
			
		//la consulta base a la que concatenaremos la búsqueda
		$sql = "SELECT * FROM details_fields ";
		
		//si existen condiciones entramos
		if(count($condiciones) > 0) 
		{
			
		    //aquí creamos la condición y la concatenamos a $query
		    $sql .= "WHERE " . implode ($and_or, $condiciones);
			
		}

		//asignamos a $query la consulta final
		$query = $this->db->query($sql);
		
		//con la siguiente línea podéis ver lo que arroja la 
		//consulta escogiendo varios campos, es bueno entenderlo
		//; exit;
		foreach($query->result() as $obj2){
		$query1[]="SELECT * FROM publicaciones WHERE idPublicacion = ".$obj2->idPublicacion;
                $query3[]="SELECT * FROM details_fields WHERE idPublicacion = ".$obj2->idPublicacion;
                }
                
	
        
	//$results = $this->db->query($query1);
	

	//set document header to text/xml
	header("Content-type: text/xml"); 

	// Iterate through the rows, adding XML nodes for each
	if($query->num_rows() > 0){
                                
                                foreach ($query1 as $value) {
                                $results = $this->db->query($value);
			        foreach($results->result() as $obj1){
				$node = $dom->createElement("marker");  
				$newnode = $parnode->appendChild($node); 	
				foreach($query->result() as $obj){
                                foreach ($query3 as $value2) {
                                $results1 = $this->db->query($value2);
                                $i = 0;
                                foreach($results1->result() as $obj4){
					$arr[] = get_object_vars($obj);
					
					  if ($obj4->idPublicacion == $obj1->idPublicacion) {
					 
					  
					 
					  if ($obj4->field_name == 'name') {  
					  $newnode->setAttribute("name",$obj4->field_value);
					  }
					  if ($obj4->field_name == 'address') {  
					  $newnode->setAttribute("address", $obj4->field_value);  
					  }
					  if ($obj4->field_name == 'lat') { 
					  $newnode->setAttribute("lat", $obj4->field_value);
					  }
					  if ($obj4->field_name == 'lng') {   
					  $newnode->setAttribute("lng", $obj4->field_value);  
					  }
					  if ($i == 0) {
					  	$newnode->setAttribute("type", $obj1->tipo_categoria);
					  }
					  	
					  $i++;
					}
                                }}}
			}}

			}else{
				return null;
			}
			return $dom->saveXML();



		//si se ha encontrado algo 
	
		
	}
        public function selectJoinPublicaciones($table1,$table2){
                	$sql = "SELECT *
							FROM {$table1} T1
							INNER JOIN {$table2} T2 ON T1.idPublicacion = T2.idPublicacion
                			;" ;
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