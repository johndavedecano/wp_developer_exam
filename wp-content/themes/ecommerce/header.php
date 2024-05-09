<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <div>
    <div id="header" class="header">
        <div class="container">
            <div class="header-content">
                <a href="" class="brand">
                    CheapFurnitures
                </a>
                <div class="spacer"></div>
                <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cart.svg" alt="Shopping Cart">
                    <?php if (WC()->cart->get_cart_contents_count() < 1): ?>
                        <span class="cart-quantity">Your cart is empty!</span>
                    <?php else: ?>
                        <span class="cart-quantity"><?php echo WC()->cart->get_cart_contents_count(); ?> items</span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
    </div>