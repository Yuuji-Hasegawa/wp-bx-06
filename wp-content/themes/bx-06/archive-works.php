<?php get_header();?>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/hero.png"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover">
    <h1 class="c-hero-copy o-cover__middle">
      <span class="c-display-l u-text-weight-b u-font-en-con">WORKS</span>
      <span class="c-display-xs">導入事例</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pt-2xl u-pb-2xl u-bg-qua">
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri" id="photos">
    <?php while (have_posts()): the_post();
        if(has_post_thumbnail()) {
            $url = get_the_post_thumbnail_url($post->ID, 'full');
        } else {
            $url = get_template_directory_uri() . '/img/thumb.png?' . date("YmdHis");
        }
        ?>
    <li class="js-pull-view">
      <a href="<?php echo $url;?>"
        class="c-puton c-puton--filter c-lightbox-photo" target="_blank" rel="noopener">
        <?php echo get_thumb_sq();?>
        <div class="c-puton__inner o-cover">
          <div class="u-text-center u-block-bottom u-pr-m u-pl-m">
            <span
              class="c-display-2xs u-text-weight-b"><?php the_title();?></span>
          </div>
        </div>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">導入事例はまだありません。</p>
  <?php endif;?>
</div>
<?php get_footer();?>