<?php
/*** GETTING SITE LOGO
 * @require 'IMAGEM()'
 */
function get_site_logo( $location = 'logo_do_site', $alt = 'Logo do site', $class = null, $size = 'full' )
{

    $theme_mod = get_theme_mod( $location );
    if ( $theme_mod )
        $logo = sprintf( 
            '<img src="%s" alt="%s" class="%s">',
            imagem ( $theme_mod, $size ),
            $alt,
            $class
        );
    else
        $logo = false;

    return( $logo );
}