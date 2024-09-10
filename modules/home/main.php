<?php get_header();?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
       <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Điện thoại</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php 
                            foreach($list_product as $item){
                                if($item['cat_id']==1){
                            ?>
                            <li>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thump']; ?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo number_format($item['price']) ?></p>
                        </li>
                              <?php  }
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Macbook</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php 
                            foreach($list_product as $item){
                                if($item['cat_id']==2){
                            ?>
                            <li>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thump']; ?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo number_format($item['price']) ?></p>
                        </li>
                              <?php  }
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Laptop</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php 
                            foreach($list_product as $item){
                                if($item['cat_id']==3){
                            ?>
                            <li>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thump']; ?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo number_format($item['price']) ?></p>
                        </li>
                              <?php  }
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        get_footer();
    ?>   