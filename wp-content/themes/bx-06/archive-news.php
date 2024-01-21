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
      <span class="c-display-l u-text-weight-b u-font-en-con">NEWS</span>
      <span class="c-display-xs">お知らせ</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pt-2xl u-pb-2xl">
  <?php if (have_posts()):?>
  <ul class="o-stack o-stack--m">
    <?php while (have_posts()): the_post();?>
    <li class="o-sidebar js-pull-view">
      <time class="c-content-l u-font-en-con u-text-weight-b"
        datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
      <a class="o-sidebar__grow o-sidebar__grow--news c-content-l c-text-link u-text-weight-b"
        href="<?php the_permalink();?>">
        <?php the_title();?>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l js-pull-view">ニュースはまだありません。</p>
  <?php endif;
echo get_pagination();?>
</div>
<?php get_footer();?>