<?php 
    if(isset($_SESSION['cart'])){
        $list_cart_item = $_SESSION['cart']['buy'];
        $cart_info = $_SESSION['cart']['info'];
    }
    
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form action="?mod=cart&act=update" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($list_cart_item)){
                            foreach($list_cart_item as $item){
                                ?>
                                <tr>
                            <td><?php echo $item['code'] ?></td>
                            <td>
                                <a href="<?php echo'?mod=product&act=detail&id='.$item['id']?>" title="" class="thumb">
                                    <img src="<?php echo $item['product_thump'] ?>" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo'?mod=product&act=detail&id='.$item['id']?>" title="" class="name-product"><?php echo $item['product_title'] ?></a>
                            </td>
                            <td><?php echo number_format( $item['price']) ?></td>
                            <td>
                                <input type="number" min="1" max="10" name="qty[<?php echo$item['id']?>]" value="<?php echo$item['qty']?>" class="num-order">
                            </td>
                            <td><?php echo number_format( $item['sub_total']) ?></td>
                            <td>
                                <a href="?mod=cart&act=delete&id=<?php echo$item['id']; ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                           <?php }
                    
                        }else{
                            ?> <td>Chua so san pham nao trong gio hang</td>

                        <?php
                        } 
                        ?>
                            
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span><?php
                                    if(isset($cart_info)){
                                        echo number_format($cart_info['total']);
                                    }else{
                                        echo "0";
                                    }
                                   ?></span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <input type="submit" id="update-cart" name="btn-update" value="Cập nhật giỏ hàng">
                                        <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </form>
                
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>