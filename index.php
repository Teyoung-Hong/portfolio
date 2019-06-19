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
  <!-- 投稿の一覧画面 -->
  <div class="swiper_outer">
    <section class="swiper-container loading">
      <div class="swiper-wrapper">
        <?php
          if ( have_posts() ) : 
            while ( have_posts() ) : 
              the_post();
        ?>
        <div class="swiper-slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
          <div class="swiper-slide_content">
            <p class="swiper-slide_title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <span class="swiper-slide_caption" data-swiper-parallax="-20%"><?php the_excerpt(); ?></span>
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
 </div>
</div>
<!--  top end -->

<!-- bottom begin -->
<div class="wrap_bottom">
<div class="wrap_bottom--left">
  <div class="wrap_tab wrap">
    <ul class="tab_items">
      <!-- 選択中のタブはadd class "chosen-tab" -->
      <?php
        $args = array(
          'orderby' => 'name'
        );
        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
          $cat_link = get_category_link($category->cat_ID);
            echo '<li class="category-list__item"><a href="' . $cat_link . '">' . $category->name . '</a></li>';
        }
      ?>
    </ul>
  </div>
  <div class="wrap_archives wrap">
    <div class="archives_inner">
      <div class="archives_row">
        <?php
          if ( have_posts() ) :
            $counter = 0;
             while ( have_posts() ) : the_post();
            $counter++;
        ?>
        <section class="archives_item">
          <h2 class="archives_item--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="archives_item--content"><?php the_excerpt(); ?></div>
        </section>
        <?php if($counter%2==0){
          echo ('</div><div class="archives_row">');  
        } ?>
        <?php
            endwhile;
          endif;
        ?>
      </div><!-- archives_row -->
    </div><!-- archives_inner -->
  </div><!-- wrap_archives -->
  <!-- About -->
  <div id="about" class="wrap_about wrap">
    <div class="about_left about_common">
      文章が入ります。
    </div>
    <div class="about_right about_common">
      <a href="#">もっと知る</a>
    </div>
  </div>
  <!-- About end -->
  <!-- instagram slide -->
    <?php echo do_shortcode('[instagram-feed]'); ?>
  <!-- instagram slide end -->
  <!-- contact -->
  <div id="contact" class="wrap_contact contact wrap">
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
