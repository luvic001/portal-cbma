<?php

if (!defined("PATH")) exit;

$ind = 0;
for ($i = 0; $i < 4; $i++) {
  $setting = get_theme_mod(sprintf('partnership-%s', $i));
  if ($setting) {
    $partners[] = wpfx_get_image($setting);
    $ind++;
  }
}

if ($ind > 0) {
  getCurStyleSheet("Footer/Content-parnership", "global");

?>
  <div class="col-12">
    <section class="footer-partnership">
      <h2>Parcerias</h2>
      <div class="row align-items-center">
        <?php foreach ($partners as $partner) { ?>
          <div class="col-md-3 col-6">
            <figure class="is-relative">
              <img class="w-100" src="<?= /** hey */ $partner ?>" alt="Parceiro <?= $i+1 ?>">
            </figure>
          </div>
        <?php } ?>
      </div>
    </section>
  </div>
<?php

}