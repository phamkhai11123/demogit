<?php
function get_product_by_id($id){
    global $list_product;
    foreach($list_product as $item){
        if($item['id']==$id){
            return $item;
        }
    }
}
function get_product_by_cat_id($cat_id){
    global $list_product;
    $arr = array();
    foreach($list_product as $item){
        if($item['cat_id']==$cat_id){
            $arr[] = $item;
        }
    }
    return $arr;
}
function get_cat_by_id($cat_id){
    global $list_product_cat;
    foreach($list_product_cat as $item){
        if($item['id']==$cat_id){
            return $item;
        }
    }
}
?>