<?php 

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI, $sitename;
$sitename = get_bloginfo('name') . ' | ' . get_bloginfo('description');

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>
  <?php wp_head() ?>

  <!-- Files -->
  <?php if (GOOGLE_FONTS): ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="<?= GOOGLE_FONTS ?>" rel="stylesheet">
  <?php endif; ?>
  <style>
    <?= get_file('style.css') ?>
  </style>
  <script>
    var adm_ajax = '<?= admin_url('admin-ajax.php') ?>';
    var site_url = '<?= site_url() ?>';
    let siteLoader = `
    <div class="loading-options">
      <?= svg('lds-ring') ?>
      <p>Carregando</p>
    </div>
    `;
  </script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js" async defer></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/splide.min.js" async defer></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/splide-grid.min.js" async defer></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/script.min.js" async defer></script>
	<?php if (FONT_AWESOME): ?>
    <script src="https://kit.fontawesome.com/c454b0919f.js" crossorigin="anonymous"></script>
  <?php endif; ?>

  <!-- / End Files -->

</head>
<body <?= body_class(!is_front_page() ? 'internal-page' : '') ?>>

<?php get_modules('Popup'); ?>

<main class="site-content">
  <?php get_modules('Header'); ?>
