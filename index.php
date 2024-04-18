<?php
get_header(); // header.phpを呼び出す

// メインコンテンツの開始
if (have_posts()):
    while (have_posts()): the_post(); ?>
        <main>
        <?php if (!is_front_page()) : ?>
            <h2><?php the_title(); ?></h2>
        <?php endif; ?>            
            <?php the_content(); ?>
        </main>
    <?php endwhile;
endif;

// メインコンテンツの終了

get_footer(); // footer.phpを呼び出す
?>
