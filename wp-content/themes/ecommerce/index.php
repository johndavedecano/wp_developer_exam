<?php get_header(); ?>

<?php include TEMPLATEPATH . '/includes/hero.php'; ?>

<div class="container">
    <div class="cart-page">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <h3 class="product-title"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No posts found. :(</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>