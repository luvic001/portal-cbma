<?php

if (!defined('PATH')) exit;

$elem = is_single() ? 'h2' : 'h1';

if (is_page() or is_single()) {
  $hi = (object) [
    'desktop' => wpfx_get_image(get_field('hi-desktop')),
    'mobile' => wpfx_get_image(get_field('hi-mobile')),
  ];
}

elseif (is_category()) {
  $hi = (object) [
    'desktop' => z_taxonomy_image_url(),
    'mobile' => z_taxonomy_image_url(),
  ];
}

?>

<section class="header-interna background-parallax-ctrl">

  <div class="container">
    <<?=$elem?>>
      <?= titleName() ?>
    </<?=$elem?>>

    <div class="header-breadcrumb">
      <?php
      if (function_exists('yoast_breadcrumb'))
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      ?>
    </div>

  </div>

</section>

<?php

if ($hi->desktop or $hi->mobile) {
?>
  <style>
    section.header-interna {
      background-image: url('<?= $hi->mobile ?>');
      background-size: cover;
    }
    @media (min-width: 768px) {
      section.header-interna {
        background-image: url('<?= $hi->desktop ?>');
      }
    }
  </style>
<?php
} 