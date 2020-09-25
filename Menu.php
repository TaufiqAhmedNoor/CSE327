<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');

class Menu
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		
	}

	function getMenuByResId($id){
		$sql ='SELECT * FROM Menu WHERE res_id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	

}