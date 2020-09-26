<?php

include 'model/Model.php';
 class Controller
 {
 	public $model;
 	function __construct()
 	{
 		$this->model = new Model();
 	}
 	function home(){
 		$user = $this->model->getData();
 		include 'view/Home.php';
 	}
 	function details(){
 		$user = $this->model->getDataById();
 		include 'view/details.php';
 	}
 } 
 ?>

