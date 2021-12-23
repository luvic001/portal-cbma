<?php

if (!defined('PATH')) exit;

$base = 'section-rs';
$title = get_field($base.'-title');
$rs = (object) [
  'linkedin' => get_field($base.'-linkedin'),
  'facebook' => get_field($base.'-facebook'),
  'twitter' => get_field($base.'-twitter'),
  'youtube' => get_field($base.'-youtube'),
];

?>

<section 
  class="site-sections section-redes-sociais background-cover background-center" 
  style="background-image: url('<?= site_url() ?>/wp-content/uploads/2021/12/bg-redes-sociais.png')">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <?php if ($title): ?>
          <div class="section-title have-after">
            <h2><?= $title ?></h2>
          </div>
        <?php endif; ?>

        <ul class="redes-sociais">

          <?php if ($rs->linkedin): ?>
            <li>
              <a href="<?= $rs->linkedin ?>" target="_blank" title="LinkedIn | <?= get_bloginfo('name') ?>">
                <i class="fab fa-linkedin-in fa-2x"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ($rs->facebook): ?>
            <li>
              <a href="<?= $rs->facebook ?>" target="_blank" title="Facebook | <?= get_bloginfo('name') ?>">
                <i class="fab fa-facebook-f fa-2x"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ($rs->twitter): ?>
            <li>
              <a href="<?= $rs->twitter ?>" target="_blank" title="Twitter | <?= get_bloginfo('name') ?>">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ($rs->youtube): ?>
            <li>
              <a href="<?= $rs->youtube ?>" target="_blank" title="YouTube | <?= get_bloginfo('name') ?>">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
            </li>
          <?php endif; ?>
          
        </ul>

      </div>
    </div>
  </div>
</section>
