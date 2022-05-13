<?php

if (!defined('PATH')) exit;

if (is_front_page()) {

getCurStyleSheet('Popup-personalizar', 'global');
getCurScript('Popup-personalizar', 'global');

$popup = (object) [
  'image' => get_theme_mod('setting_popup_image'),
  'link' => get_theme_mod('setting_popup_link'),
  'link_newtab' => get_theme_mod('setting_popup_link_newtab'),
  'close_color' => get_theme_mod('setting_popup_close_color'),
]; 

if ($popup->image):

?>

<?php if ($popup->close_color): ?>
<style>
  section.popup-personalizar .popup-content a.close-popup {
    color: <?= $popup->close_color ?>;
  }
</style>
<?php endif; ?>

<section class="popup-personalizar">
  <div class="glass" close-popup-personalizar></div>
  <div class="popup-content">
    <a 
      href="javascript:void(0);" 
      class="close-popup" 
      close-popup-personalizar 
      title="Fechar">
      <i class="fa-solid fa-times"></i>
    </a>
    <?php if ($popup->link) { ?>
        <a 
          href="<?= $popup->link ?>" 
          title="Saiba mais"
          <?= $popup->link_newtab ? 'target="_blank"' : null ?>>
    <?php } ?>
      <figure>
        <img src="<?= wpfx_get_image($popup->image) ?>" alt="Imagem da popup" draggable="false">
      </figure>
    <?php if ($popup->link) { ?>
      </a>
    <?php } ?>
  </div>
</section>

<?php

endif;
} # if is_front_page