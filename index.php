<!-- header begin -->
<?php get_header(); ?>
<!-- header end -->

<!-- top begin  -->
<div class="wrap_top wrap">
  <div class="top_slide">
    ここにスライドが入ります。
    <!-- スライドがここに入る slider.js -->
  </div>
</div>
<!--  top end -->

<!-- bottom begin -->
<div class="wrap_bottom">
  <div class="wrap_tab wrap">
    <ul class="tab_items">
      <!-- 選択中のタブはadd class "chosen-tab" -->
      <li class="tab_item">Category01</li>
      <li class="tab_item">Category02</li>
      <li class="tab_item">Category03</li>
      <li class="tab_item">Category04</li>
      <li class="tab_item">Category05</li>
    </ul>
    <?php get_search_form(); ?>
  </div>
  <!-- 投稿の一覧画面 -->
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
</div>
<!-- bottom end -->

<!-- footer begin -->
<?php get_footer(); ?>
<!-- footer end -->
