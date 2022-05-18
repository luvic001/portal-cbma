<?php

if (!defined('PATH')) exit;
get_header();

?>

<section class="site-sections page-lista-de-arbitros">

  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <div class="editor-content mb-3">
          <p><em><strong>Importante:</strong> o CBMA reconhece os serviços das partes citadas, mas não possui qualquer vínculo empregatício com os profissionais aqui listados.</em></p>
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
        <?php get_modules('Content-list', 'page/lista-de-arbitros') ?>
      </div>

    </div>

  </div>

</section>

<?php

get_footer();
