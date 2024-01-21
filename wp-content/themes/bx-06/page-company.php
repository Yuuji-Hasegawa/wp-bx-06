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
      <span class="c-display-l u-text-weight-b u-font-en-con">COMPANY</span>
      <span class="c-display-xs"><?php the_title();?></span>
    </h1>
  </div>
</div>
<div class="o-switcher o-switcher--no-gap js-pull-view">
  <div class="o-cover u-bg-qua">
    <div class="o-cover__middle c-inner-box u-content-wrap u-block-right">
      <h2 class="c-display-m u-text-weight-b u-mb-l u-font-en-con">ORIGIN</h2>
      <h3 class="c-display-m u-text-weight-b u-mb-xl">ダミーテキスト</h3>
      <ul class="c-disc-list">
        <li class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、</li>
        <li class="c-content-l">うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</li>
        <li class="c-content-l">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、</li>
      </ul>
    </div>
  </div>
  <div>
    <picture class="o-frame">
      <source type="image/avif"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img05.avif" />
      <source type="image/webp"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img05.webp" />
      <img
        src="<?php echo get_template_directory_uri();?>/img/dummy-img05.jpg"
        width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
    </picture>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-primary u-pb-2xl js-pull-view">
  <h2 class="c-sec-heading u-text-weight-b u-font-en-con">INFORMATION</h2>
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">屋号/商号</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'name');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">所在地</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">設立</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'birth');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">代表取締役</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'owner');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">URL</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <a class="c-text-link"
        href="<?php echo get_vars('company', 'url');?>"
        target="_blank" rel="noopener"><span
          class="u-font-en-con"><?php echo get_vars('company', 'url');?></span></a>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">事業内容</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_service_list();?>
    </dd>
  </dl>
</div>
<?php get_footer();?>