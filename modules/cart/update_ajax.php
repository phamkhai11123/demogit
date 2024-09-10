<?php
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    $item = get_product_by_id($id);
    if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']['buy'])){
        $_SESSION['cart']['buy'][$id]['qty'] = $qty;

        $sub_total = $qty * $item['price'];

        $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
        
        update_cart_info();
        
        $total = $_SESSION['cart']['info']['total'];
        
        $data = array(
            'sub_total'=>number_format($sub_total) ,
            'total'=>number_format($total), 
            'cnt'=> $_SESSION['cart']['info']['num_total']
        );
        echo json_encode($data);
    }
?>