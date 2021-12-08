<?php

if (!defined('PATH')) exit;

$panel_name = 'informacoes_globais';

$wp_customize->add_panel($panel_name, [
  'title' => __('Informações Globais', 'poli'),
]);

// Redes Sociais ======================================

$wp_customize->add_section('redes-sociais', [
  'title' => 'Redes Sociais',
  'panel' => $panel_name
]);


foreach (get_redes_sociais() as $key => $label) {

  $setting_name = sprintf('setting_%s', $key);

  $wp_customize->add_setting($setting_name);
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
    'label' => $label,
    'section' => 'redes-sociais',
    'settings' => $setting_name,
    'description' => ''
  ]));

}

// Informações de contato ==============================

$wp_customize->add_section('informacoes-de-contato', [
  'title' => 'Informações de Contato',
  'panel' => $panel_name
]);

$setting_name = 'setting_telefones';
$wp_customize->add_setting($setting_name);
$wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
  'label' => 'Telefones',
  'section' => 'informacoes-de-contato',
  'settings' => $setting_name,
  'description' => 'Separe os telefones por vírgula'
]));

$setting_name = 'setting_telefone_principal';
$wp_customize->add_setting($setting_name);
$wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
  'label' => 'Telefone principal',
  'section' => 'informacoes-de-contato',
  'settings' => $setting_name,
  'description' => 'Este telefone aparecerá no mega menu'
]));

$setting_name = 'setting_email';
$wp_customize->add_setting($setting_name);
$wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
  'label' => 'E-mail',
  'section' => 'informacoes-de-contato',
  'settings' => $setting_name,
  'description' => ''
]));

// Informações gerais ==============================

$wp_customize->add_section('informacoes-gerais', [
  'title' => 'Informações Gerais',
  'panel' => $panel_name
]);

$setting_name = 'setting_endereco';
$wp_customize->add_setting($setting_name);
$wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
  'label' => 'Endereço',
  'section' => 'informacoes-gerais',
  'settings' => $setting_name,
  'description' => ''
]));

$setting_name = 'setting_funcionamento';
$wp_customize->add_setting($setting_name);
$wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting_name, [
  'label' => 'Horário de funcionamento',
  'section' => 'informacoes-gerais',
  'settings' => $setting_name,
  'description' => ''
]));