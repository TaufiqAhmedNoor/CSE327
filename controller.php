<?php
include 'model/model.php';
class controller{

    public $model;

   public function_construct(){
        $this-> = new model();

    }
    pblic function home(){
        $this-> model->customer_signin_data();
        $this-> model->contact_data();
        $this-> model->resturante_data();
        include 'view/home.php';
    }
}
?>