<?php 
    $id = (int)$_GET['id'];
    unset($_SESSION['cart']['buy'][$id]);
    update_cart_info();
    redirect("?mod=cart&act=show");
?>