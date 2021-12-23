<?php

if (!defined('PATH')) exit;
$base = 'webdoor-slide';

if (have_rows($base)):
$ind = 0;
?>

<section class="home-webdoor">

  <div id="home-webdoor" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      
      <?php while (have_rows($base)): the_row(); ?>
      <?php 
        $slide = (object) [
          'title' => get_sub_field($base.'-title'),
          'description' => get_sub_field($base.'-description'),
          'link' => get_sub_field($base.'-link'),
          'link-newtab' => get_sub_field($base.'-link-newtab'),
          'link-text' => get_sub_field($base.'-link-text'),
          'image' => [
            'desktop' => get_sub_field($base.'-image_desktop'),
            'mobile' => get_sub_field($base.'-image_mobile')
          ]
        ];
        
      ?>
        <div class="carousel-item carousel-item-<?= $ind ?> <?= ($ind == 0) ? 'active' : null ?>">
          <div class="webdoor-background background-parallax">
            <?php if ($slide->image['mobile']): ?>
              <style>
                .carousel-item-<?=$ind?> .webdoor-background {
                  background-image: url('<?= wpfx_get_image($slide->image['mobile']) ?>');
                }
              </style>
            <?php endif; ?>
            <?php if ($slide->image['desktop']): ?>
              <style>
                @media (min-width: 768px) {
                  .carousel-item-<?= $ind ?> .webdoor-background {
                    background-image: url('<?= wpfx_get_image($slide->image['desktop']) ?>');
                  }
                }
              </style>
            <?php endif; ?>
          </div>
          <div class="container">
            <div class="webdoor-content">
              <?php if ($slide->title): ?>
                <h1><?= $slide->title ?></h1>
              <?php endif; ?>
              
              <?php if ($slide->description): ?>
                <p><?= $slide->description ?></p>
              <?php endif; ?>
              
              <?php if ($slide->link): ?>
              <p>
                <a 
                  href="<?= $slide->link ?>" 
                  class="btn-site"
                  <?= $slide->{'link-newtab'} ? 'target="_blank"' : null ?>>
                  <?= $slide->{'link-text'} ? $slide->{'link-text'} : 'Saiba Mais' ?>
                </a>
              </p>
              <?php endif; ?>

            </div>
          </div>
        </div>
      <?php $ind++; endwhile; ?>

    </div>
    
    <?php if ($ind > 1): ?>
    <ol class="carousel-indicators">
      <?php for ($i = 0; $i < $ind; $i++): ?>
        <li 
          data-target="#home-webdoor" 
          data-slide-to="<?= $i ?>" 
          class="<?= ($i == 0) ? 'active' : null ?>"></li>
      <?php endfor; ?>
    </ol>
    <?php endif; ?>

  </div>

</section>
<?php

endif;