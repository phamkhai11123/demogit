<?php 
    if(isset($_POST['btn-update'])){
        $qty = $_POST['qty'];
        // show_array($qty);
        foreach($qty as $id => $newqty){
            $_SESSION['cart']['buy'][$id]['qty'] = $newqty;
            $_SESSION['cart']['buy'][$id]['sub_total'] = $newqty *  $_SESSION['cart']['buy'][$id]['price'];
        }
        update_cart_info();
    }
    redirect("?mod=cart&act=show");
?>