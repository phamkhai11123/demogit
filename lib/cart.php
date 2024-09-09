<?php 
    function add_cart($id){
        global $list_product;
        $item = get_product_by_id($id);
        $qty = 1;
        if(isset($_SESSION['cart']['buy']) && array_key_exists($id,$_SESSION['cart']['buy'])){
            $qty = $_SESSION['cart']['buy'][$id]['qty']+1;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id'=> $item['id'],
            'product_title'=> $item['product_title'],
            'product_thump'=> $item['product_thump'],
            'price'=> $item['price'],
            'code'=> $item['code'],
            'qty' => $qty,
            'sub_total' => $qty * $item['price']
        ) ;
    }
    function update_cart_info(){
        $num_total = 0;
        $total = 0;
        foreach($_SESSION['cart']['buy'] as $item){
            $num_total += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_total' => $num_total,
            'total' => $total
        );
    }
?>