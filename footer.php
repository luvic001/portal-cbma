<?php 

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI;

get_modules('Footer/Content');

?>

</main>
<script type="text/javascript" src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/splide.config.js" async defer></script>
<?php wp_footer() ?>
</body>
</html>