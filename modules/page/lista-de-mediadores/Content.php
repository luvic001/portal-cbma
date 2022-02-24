<?php

if (!defined('PATH')) exit;

?>

<section class="site-sections page-lista-de-arbitros">

  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <div class="editor-content mb-3">
          <?= get_the_content() ?>
        </div>
      </div>
      <div class="col-md-6">

        <form form-arbitro>
          <div class="input-text">
            <label>
              <span>
                <input type="text" search-arbitros name="search-arbitros" id="search-arbitros">
              </span>
              <span class="text">Procurar profissional</span>
            </label>
            <button type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
        
      </div>

      <div class="col-12">
        <?php get_modules('Content-list', 'page/lista-de-mediadores') ?>
      </div>

    </div>

  </div>

</section>