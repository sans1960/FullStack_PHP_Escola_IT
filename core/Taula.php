<?php

class Taula extends Conexio{
    private $db;
    private $productes;
    
    public function __construct(){
		$this->db = Conexio::conectar();
		$this-> productes= array();
    } 
    public function get_productes(){
		$query = $this->db->query("SELECT * FROM compra");
		while ($rows = $query->fetch_assoc()){
			$this->productes[] = $rows;
		}
		return $this->productes;
    }
	public function sumaSubtotal(){
		$sql = $this->db->query('SELECT SUM(subtotal) as total from compra');
		$result = mysqli_fetch_assoc($sql);
		return $result;
	}
	public function set_compres($nom,$quantitat,$preu,$subtotal){
		$sql = "INSERT INTO compra(nom,quantitat,preu,subtotal) VALUES ('".$nom."','".$quantitat."','".$preu."','".$subtotal."')";
	
		 if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
		 	 return false;
		  }	
	}
	public function get_producte($id){
		$sql="SELECT * FROM compra WHERE id=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
	}
	public function up_compra($id,$nom,$quantitat,$preu,$subtotal){
		$sql = "UPDATE compra SET nom='$nom',quantitat='$quantitat',preu='$preu',subtotal='$subtotal' WHERE id='$id'";
		
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
		 	 return false;
		  }	

	}
	public function delete_compra($id){
		$sql = "DELETE  FROM compra WHERE id = '$id'";
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
		 	 return false;
		  }	
	}
    

}