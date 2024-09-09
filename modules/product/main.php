<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
       <?php get_sidebar(); 
            $cat_id = $_GET['cat_id'];
            $list_item = get_product_by_cat_id($cat_id);
            $cate = get_cat_by_id($cat_id);
       ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $cate['cat_title']; ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php 
                            foreach($list_item as $item){
                            ?>
                            <li>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thump']; ?>" alt="">
                            </a>
                            <a href="?mod=product&act=detail&id=<?php echo$item['id'] ?>" title="" class="title">
                                <?php echo $item['product_title']?></a>
                            <p class="price"><?php echo number_format($item['price']) ?></p>
                        </li>
                              <?php  
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
           
        </div>
    </div>
</div>