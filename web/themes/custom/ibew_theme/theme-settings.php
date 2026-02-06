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

    // Color Scheme Settings
    $form['ibew_colors'] = [
        '#type' => 'details',
        '#title' => t('Color Scheme Settings'),
        '#description' => t('Customize the theme colors for Light and Dark modes.'),
        '#open' => TRUE,
    ];

    // --- Light Mode Colors ---
    $form['ibew_colors']['light_mode'] = [
        '#type' => 'details',
        '#title' => t('Light Mode Colors'),
        '#open' => FALSE,
    ];

    $form['ibew_colors']['light_mode']['ibew_light_primary'] = [
        '#type' => 'color',
        '#title' => t('Primary Color'),
        '#default_value' => theme_get_setting('ibew_light_primary') ?? '#1e293b',
        '#description' => t('Default: #1e293b'),
    ];

    $form['ibew_colors']['light_mode']['ibew_light_secondary'] = [
        '#type' => 'color',
        '#title' => t('Secondary Color'),
        '#default_value' => theme_get_setting('ibew_light_secondary') ?? '#3b82f6',
        '#description' => t('Default: #3b82f6'),
    ];

    $form['ibew_colors']['light_mode']['ibew_light_accent'] = [
        '#type' => 'color',
        '#title' => t('Accent Color'),
        '#default_value' => theme_get_setting('ibew_light_accent') ?? '#f59e0b',
        '#description' => t('Default: #f59e0b'),
    ];

    $form['ibew_colors']['light_mode']['ibew_light_bg'] = [
        '#type' => 'color',
        '#title' => t('Background Color'),
        '#default_value' => theme_get_setting('ibew_light_bg') ?? '#ffffff',
        '#description' => t('Default: #ffffff'),
    ];

    $form['ibew_colors']['light_mode']['ibew_light_card_bg'] = [
        '#type' => 'color',
        '#title' => t('Card Background Color'),
        '#default_value' => theme_get_setting('ibew_light_card_bg') ?? '#f3f4f6',
        '#description' => t('Default: #f3f4f6'),
    ];

    $form['ibew_colors']['light_mode']['ibew_light_text'] = [
        '#type' => 'color',
        '#title' => t('Text Color'),
        '#default_value' => theme_get_setting('ibew_light_text') ?? '#1f2937',
        '#description' => t('Default: #1f2937'),
    ];

    // --- Dark Mode Colors ---
    $form['ibew_colors']['dark_mode'] = [
        '#type' => 'details',
        '#title' => t('Dark Mode Colors'),
        '#open' => TRUE,
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_primary'] = [
        '#type' => 'color',
        '#title' => t('Primary Color'),
        '#default_value' => theme_get_setting('ibew_dark_primary') ?? '#1e293b',
        '#description' => t('Default: #1e293b'),
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_secondary'] = [
        '#type' => 'color',
        '#title' => t('Secondary Color'),
        '#default_value' => theme_get_setting('ibew_dark_secondary') ?? '#3b82f6',
        '#description' => t('Default: #3b82f6'),
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_accent'] = [
        '#type' => 'color',
        '#title' => t('Accent Color'),
        '#default_value' => theme_get_setting('ibew_dark_accent') ?? '#f59e0b',
        '#description' => t('Default: #f59e0b'),
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_bg'] = [
        '#type' => 'color',
        '#title' => t('Background Color'),
        '#default_value' => theme_get_setting('ibew_dark_bg') ?? '#1f2937',
        '#description' => t('Default: #1f2937'),
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_card_bg'] = [
        '#type' => 'color',
        '#title' => t('Card Background Color'),
        '#default_value' => theme_get_setting('ibew_dark_card_bg') ?? '#3e4c63',
        '#description' => t('Default: #3e4c63. Used for news cards, event cards, etc.'),
    ];

    $form['ibew_colors']['dark_mode']['ibew_dark_text'] = [
        '#type' => 'color',
        '#title' => t('Text Color'),
        '#default_value' => theme_get_setting('ibew_dark_text') ?? '#f3f4f6',
        '#description' => t('Default: #f3f4f6'),
    ];

    // --- Image Preview for Logo & Favicon ---

    // Logo Preview
    $logo_url = theme_get_setting('logo.url');
    // If 'logo.use_default' is unchecked and a path is provided, logo.url typically reflects that.
    // However, in the settings form context, sometimes we need to check specific form values if not saved yet, 
    // but reading the theme setting is the reliable way to show "Current Legacy".

    if ($logo_url) {
        $form['logo']['logo_preview'] = [
            '#type' => 'item',
            '#title' => t('Logo Preview'),
            '#markup' => '<div class="logo-preview" style="background: #ccc; padding: 5px; display: inline-block; border-radius: 4px; margin-top: 10px;"><img src="' . $logo_url . '" alt="Logo Preview" style="max-height: 40px; height: auto;" /></div>',
            '#weight' => -10, // Show above upload/path settings or near top of section
        ];
    }

    // Favicon Preview
    $favicon_url = theme_get_setting('favicon.url');
    if ($favicon_url) {
        $form['favicon']['favicon_preview'] = [
            '#type' => 'item',
            '#title' => t('Favicon Preview'),
            '#markup' => '<div class="favicon-preview" style="margin-top: 10px;"><img src="' . $favicon_url . '" alt="Favicon Preview" style="max-height: 16px; width: auto; border: 1px solid #ddd;" /></div>',
            '#weight' => -10,
        ];
    }
}
