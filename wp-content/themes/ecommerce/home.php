<?php get_header(); ?>

<?php include TEMPLATEPATH . '/includes/hero.php'; ?>

<?php $product = wc_get_product(57); ?>

<div class="container">
    <div class="product-page">
        <div class="product-page-left">
            <img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>" />
        </div>
        <div class="product-page-right">
            <h2 class="product-title">
                <?php echo $product->get_name(); ?>
            </h2>

            <div class="product-price">
                <?php echo get_woocommerce_currency_symbol(); ?>
                <?php if ($product->is_on_sale()): ?>
                    <?php echo $product->get_sale_price(); ?> - <span class="sale">Discounted Price!</span><br />
                    <span class="regular-price">Before
                        <?php echo get_woocommerce_currency_symbol(); ?>     <?php echo $product->get_regular_price(); ?></span>
                <?php else: ?>
                    <?php echo $product->get_regular_price(); ?>
                <?php endif; ?>
            </div>

            <div class="product-description">
                <?php echo $product->get_description(); ?>
            </div>
            <div class="product-categories">
                <strong>Categories:</strong> <?php echo wc_get_product_category_list($product->get_id(), ','); ?>
            </div>

            <div class="product-action">
                <?php echo do_shortcode('[add_to_cart id="' . $product->get_id() . '" show_price="false" class="" style=""]'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>