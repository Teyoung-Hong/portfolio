<!-- header begin -->
<?php 
/**
*The main template file

*@package WordPress
*@subpackage wp-test
*@since 1.0.0
*/


get_header(); 
?>
<!-- header end -->
<main>
<!-- top begin  -->
<div class="wrap_top wrap">
  <div class="top_slide">
    <!-- スライドがここに入る slider.js -->
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </div>
</div>
<!--  top end -->

<!-- bottom begin -->
<div class="wrap_bottom">
<div class="wrap_bottom--left">
  <div class="wrap_tab wrap">
    <ul class="tab_items">
      <!-- 選択中のタブはadd class "chosen-tab" -->
      <li class="tab_item">Category01</li>
      <li class="tab_item">Category02</li>
      <li class="tab_item">Category03</li>
      <li class="tab_item">Category04</li>
      <li class="tab_item">Category05</li>
    </ul>
  </div>
  <!-- 投稿の一覧画面 -->
  <div class="swiper_outer">
    <section class="swiper-container loading">
      <div class="swiper-wrapper">
        <?php
          if ( have_posts() ) : 
            while ( have_posts() ) : 
              the_post();
        ?>
        <div class="swiper-slide">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <span class="caption" data-swiper-parallax="-20%"><?php the_excerpt(); ?></span>
          </div>
        </div>
        <?php
            endwhile;
          endif;
        ?>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
          <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-white button-before"></div>
        <div class="swiper-button-next swiper-button-white button-before"></div>
      </div>
    </section>
  </div>
  <div class="wrap_archives wrap">
    <div class="archives_inner">
      <div class="archives_row">
        <?php
          if ( have_posts() ) : 
            while ( have_posts() ) : 
              the_post();
        ?>
        <section class="archives_item">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </section>
        <?php
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
  <!-- About -->
  <div class="wrap_about wrap">
    <div class="about_left about_common">
      文章が入ります。
    </div>
    <div class="about_right about_common">
      <a href="#">もっと知る</a>
    </div>
  </div>
  <!-- About end -->
  <!-- contact -->
  <div class="wrap_contact contact wrap">
    <?php echo do_shortcode( '[contact-form-7 id="12" title="コンタクトフォーム 1"]' ); ?>
  </div>
  <!-- contact end -->
  </div><!-- bottom left end -->

  <div class="wrap_bottom--right">
    <?php dynamic_sidebar('right-sidebar'); ?>
  </div><!-- bottom right end -->
</div>
<!-- bottom end -->
</main>

<!-- footer begin -->
<?php get_footer(); ?>
<!-- footer end -->
