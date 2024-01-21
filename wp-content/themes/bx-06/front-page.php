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
      <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
      <span class="c-display-l u-font-logo">BLUE B NOSE</span>
    </h1>
  </div>
</div>
<div class="o-sidebar o-sidebar--no-gap js-pull-view">
  <div class="o-sidebar__wide">
    <picture class="o-frame">
      <source type="image/avif"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.avif" />
      <source type="image/webp"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.webp" />
      <img
        src="<?php echo get_template_directory_uri();?>/img/dummy-img01.jpg"
        width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
    </picture>
  </div>
  <div class="o-sidebar__narrow o-cover u-bg-primary">
    <div class="o-cover__middle c-inner-box">
      <h2 class="c-display-m u-mb-l u-text-weight-b u-font-en-con">NEWS</h2>
      <?php echo get_front_news();?>
    </div>
  </div>
</div>
<div class="o-sidebar o-sidebar--no-gap js-pull-view">
  <div class="o-sidebar__narrow o-cover u-bg-invert">
    <div class="o-cover__middle c-inner-box">
      <h2 class="c-display-m u-mb-l u-text-weight-b u-font-en-con">PRODUCTS SERVICES</h2>
      <p class="c-content-l">
        あのイーハトーヴォのすきとおった風、<br class="u-pc-only" />夏でも底に冷たさをもつ青いそら、うつくしい森で飾られた
      </p>
      <a href="<?php echo home_url('/product/');?>"
        class="o-box o-box--button o-box--rect-button u-font-en-con u-full-width u-flex-center">
        MORE
      </a>
    </div>
  </div>
  <div class="o-sidebar__wide">
    <picture class="o-frame">
      <source type="image/avif"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img02.avif" />
      <source type="image/webp"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img02.webp" />
      <img
        src="<?php echo get_template_directory_uri();?>/img/dummy-img02.jpg"
        width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
    </picture>
  </div>
</div>
<div class="o-center u-pt-2xl u-pb-2xl u-bg-qua js-pull-view">
  <div class="o-switcher">
    <div class="o-stack o-stack--l">
      <h2 class="c-display-m u-text-weight-b u-font-en-con">WORKS</h2>
      <h3 class="c-display-m u-text-weight-b">ダミーテキスト</h3>
      <p class="c-content-l">
        あのイーハトーヴォのすきとおった風、<br class="u-pc-only" />
        夏でも底に冷たさをもつ青いそら、うつくしい森で飾られた
      </p>
      <a href="<?php echo home_url('/works/');?>"
        class="o-box o-box--button o-box--rect-button o-box--primary-button u-font-en-con u-full-width u-flex-center">
        MORE
      </a>
    </div>
    <div>
      <picture class="o-frame">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/dummy-img03.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/dummy-img03.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/dummy-img03.jpg"
          width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
      </picture>
    </div>
  </div>
</div>
<a href="<?php echo home_url('/warranty/');?>"
  class="o-box o-box--button o-box--primary-button c-warranty-btn u-pt-m u-pb-m u-pl-m u-pr-m u-text-center u-full-width js-pull-view">
  <span class="o-icon-parent o-icon-parent--center">
    <span class="u-font-en-con c-display-m u-text-weight-b">WARRANTY</span>
    <span class="c-display-xs u-text-weight-b">保証について</span>
  </span>
</a>
<div class="o-center u-pb-2xl js-pull-view">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/blog/');?>">
      MORE
    </a>
  </div>
</div>
<?php get_footer();?>