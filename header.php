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
  <meta name="facebook-domain-verification" content="4zh9b25v3v0a3us6vcbm3pks6pjr18" />
  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '440489961528401');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=440489961528401&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->

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
<?php get_modules('Popup-personalizar'); ?>

<main class="site-content">
  <?php get_modules('Header'); ?>
