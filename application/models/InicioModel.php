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
	

	$query="SELECT * FROM markers WHERE 1";
	$results = $this->db->query($query);
	if (!$results) {  
		header('HTTP/1.1 500 Error: Could not get markers!'); 
		exit();
	} 

	//set document header to text/xml
	header("Content-type: text/xml"); 

	// Iterate through the rows, adding XML nodes for each
	if($results->num_rows() > 0){
				foreach($results->result() as $obj){
					$arr[] = get_object_vars($obj);
					$node = $dom->createElement("marker");  
					  $newnode = $parnode->appendChild($node);   
					  $newnode->setAttribute("name",$obj->name);
					  $newnode->setAttribute("address", $obj->address);  
					  $newnode->setAttribute("lat", $obj->lat);  
					  $newnode->setAttribute("lng", $obj->lng);  
					  $newnode->setAttribute("type", $obj->type);	
				}
			}else{
				return null;
			}
			return $dom->saveXML();
	
		
		
	}

}