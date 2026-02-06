<?php

/**
 * @file
 * Theme settings form for IBEW Theme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function ibew_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state)
{
    // Workaround for a core bug affecting admin themes.
    if (isset($form_id)) {
        return;
    }

    // Top Bar Settings
    $form['ibew_top_bar'] = [
        '#type' => 'details',
        '#title' => t('Top Utility Bar Settings'),
        '#open' => TRUE,
    ];

    $form['ibew_top_bar']['top_bar_show'] = [
        '#type' => 'checkbox',
        '#title' => t('Show Top Bar'),
        '#default_value' => theme_get_setting('top_bar_show') ?? TRUE,
    ];

    $form['ibew_top_bar']['top_bar_address'] = [
        '#type' => 'textfield',
        '#title' => t('Address Text'),
        '#default_value' => theme_get_setting('top_bar_address') ?? '2 N Plains Industrial Rd, Wallingford, CT 06492',
    ];

    $form['ibew_top_bar']['top_bar_phone'] = [
        '#type' => 'textfield',
        '#title' => t('Phone Number'),
        '#default_value' => theme_get_setting('top_bar_phone') ?? '1-800-562-2590',
    ];

    $form['ibew_top_bar']['top_bar_email'] = [
        '#type' => 'textfield',
        '#title' => t('Email Address'),
        '#default_value' => theme_get_setting('top_bar_email') ?? 'info@ibewlocal90.org',
    ];

    $form['ibew_top_bar']['top_bar_join_link'] = [
        '#type' => 'textfield',
        '#title' => t('Join URL'),
        '#description' => t('URL for the "JoinIBEWCT.org" link'),
        '#default_value' => theme_get_setting('top_bar_join_link') ?? 'https://JoinIBEWCT.org',
    ];

    $form['ibew_top_bar']['top_bar_join_text'] = [
        '#type' => 'textfield',
        '#title' => t('Join Link Text'),
        '#default_value' => theme_get_setting('top_bar_join_text') ?? 'JoinIBEWCT.org',
    ];

    // Social Media Links (Header specific)
    $form['ibew_social'] = [
        '#type' => 'details',
        '#title' => t('Social Media Links'),
        '#open' => TRUE,
    ];

    $form['ibew_social']['social_facebook'] = [
        '#type' => 'url',
        '#title' => t('Facebook URL'),
        '#default_value' => theme_get_setting('social_facebook'),
    ];

    $form['ibew_social']['social_twitter'] = [
        '#type' => 'url',
        '#title' => t('Twitter / X URL'),
        '#default_value' => theme_get_setting('social_twitter'),
    ];

    $form['ibew_social']['social_linkedin'] = [
        '#type' => 'url',
        '#title' => t('LinkedIn URL'),
        '#default_value' => theme_get_setting('social_linkedin'),
    ];

    $form['ibew_social']['social_instagram'] = [
        '#type' => 'url',
        '#title' => t('Instagram URL'),
        '#default_value' => theme_get_setting('social_instagram'),
    ];
}
