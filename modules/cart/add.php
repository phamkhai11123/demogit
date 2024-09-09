<?php 
    $id = (int)$_GET['id'];
   add_cart($id);
   update_cart_info();
   redirect("?mod=cart&act=show");
?>