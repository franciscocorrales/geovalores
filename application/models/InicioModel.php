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

}