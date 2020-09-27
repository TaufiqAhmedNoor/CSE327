<?php
include 'login_u.php';
class model{
    public function customer_data(){
        $sql='SELECT * FROM customer';
        $stmt=DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetch()

    }
    public function contact_data(){
        $sql='SELECT * FROM contact';
        $stmt=DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetch()
    }
    public function resturante_data(){
        $sql='SELECT * FROM resturants';
        $stmt=DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetch()
    }
}
?>