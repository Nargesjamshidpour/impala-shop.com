<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php $new_products=new WP_Query([
                'post_type'=>'product',
                'order'=>'asc',
                'orderby'=>'meta_valu_num',
                'meta_key'=>Product::product_meta_key
        ]);?>
        <?php if ($new_products->have_posts()):?>
            <?php while ($new_products->have_posts()):$new_products->the_post();?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="<?php echo get_the_permalink();?>"><img class="img-fluid w-100" src="<?php echo Asset::image('product-1.jpg');?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <a href="<?php echo get_the_permalink();?>"><h4 class="text-truncate mb-3"><?php echo get_the_title();?></h4></a>
                            <div class="d-flex justify-content-center">
                                <h6><?php echo product::price(get_the_id());?></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif;?>
    </div>
</div>

