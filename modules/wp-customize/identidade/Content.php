<?php

if (!defined('PATH')) exit;

// Logo do site no header
$wp_customize->add_setting('logo_do_site');

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site', array(
  'label' => __('Logo do site no cabeçalho'),
  'section' => 'title_tagline',
  'settings' => 'logo_do_site',
  'description' => 'Este logo ficará no cabeçalho em todas as páginas do site'
)));

// Logo do site no header após scroll
$wp_customize->add_setting('logo_do_site_scroll');

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site_scroll', array(
  'label' => __('Logo do site no cabeçalho após scroll'),
  'section' => 'title_tagline',
  'settings' => 'logo_do_site_scroll',
  'description' => 'Este logo ficará no cabeçalho em todas as páginas do site após scroll ou nas páginas internas'
)));

// Logo do site no megamenu
$wp_customize->add_setting('logo_do_site_megamenu');

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site_megamenu', array(
  'label' => __('Logo do site no Mega Menu'),
  'section' => 'title_tagline',
  'settings' => 'logo_do_site_megamenu',
  'description' => 'Este logo ficará no menu de navegação'
)));

// Logo do site no footer
$wp_customize->add_setting('logo_do_site_footer');

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site_footer', array(
  'label' => __('Logo do site no rodapé'),
  'section' => 'title_tagline',
  'settings' => 'logo_do_site_footer',
  'description' => 'Este logo ficará no rodapé em todas as páginas do site'
)));