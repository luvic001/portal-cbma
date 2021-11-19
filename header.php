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
  <script>var adm_ajax = '<?= admin_url('admin-ajax.php') ?>';</script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js" async defer></script>
  <script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/script.min.js" async defer></script>

  <!-- / End Files -->

</head>
<body <?= body_class() ?>>

<?php get_modules('popup'); ?>

<main class="site-content">