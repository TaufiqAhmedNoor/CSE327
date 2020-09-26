<?php
include 'Database.php';
 class Model
 {
 	private $db;

	function __construct(){
		$this->db = new Database();
	}
 	function getData(){
 		$sql ='SELECT * FROM Menu';
 		$fetchAll = $this->db->select($sql);
		return $fetchAll;
 	}
 	function getMenuByResId($id){
		$sql ='SELECT * FROM Menu WHERE res_id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
 } 
 ?>