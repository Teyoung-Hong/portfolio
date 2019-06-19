<?php get_header(); ?>

<main>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h1 class="post_title"><?php the_title(); ?></h1>
<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
<p class="post_category"><?php the_category(', '); ?></p>
<p class="post_body"><?php the_content(); ?></p>
<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
