<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an 'IBEW Top Bar' block.
 *
 * @Block(
 *   id = "ibew_top_bar",
 *   admin_label = @Translation("IBEW Top Bar Information"),
 *   category = @Translation("IBEW Blocks")
 * )
 */
class IbewTopBarBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return [
            'address' => '2 N Plains Industrial Rd, Wallingford, CT 06492',
            'phone' => '1-800-562-2590',
            'email' => 'info@ibewlocal90.org',
            'join_link' => 'https://JoinIBEWCT.org',
            'join_text' => 'JoinIBEWCT.org',
            'twitter_url' => '#',
            'facebook_url' => '#',
        ] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $config = $this->getConfiguration();

        $form['address'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Address'),
            '#default_value' => $config['address'],
        ];

        $form['phone'] = [
            '#type' => 'tel',
            '#title' => $this->t('Phone Number'),
            '#default_value' => $config['phone'],
        ];

        $form['email'] = [
            '#type' => 'email',
            '#title' => $this->t('Email Address'),
            '#default_value' => $config['email'],
        ];

        $form['join_link'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Join Link URL'),
            '#default_value' => $config['join_link'],
        ];

        $form['join_text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Join Link Text'),
            '#default_value' => $config['join_text'],
        ];

        $form['twitter_url'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Twitter URL'),
            '#description' => $this->t('Enter # to keep placeholder or leave empty to hide.'),
            '#default_value' => $config['twitter_url'],
        ];

        $form['facebook_url'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Facebook URL'),
            '#description' => $this->t('Enter # to keep placeholder or leave empty to hide.'),
            '#default_value' => $config['facebook_url'],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        $this->configuration['address'] = $form_state->getValue('address');
        $this->configuration['phone'] = $form_state->getValue('phone');
        $this->configuration['email'] = $form_state->getValue('email');
        $this->configuration['join_link'] = $form_state->getValue('join_link');
        $this->configuration['join_text'] = $form_state->getValue('join_text');
        $this->configuration['twitter_url'] = $form_state->getValue('twitter_url');
        $this->configuration['facebook_url'] = $form_state->getValue('facebook_url');
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $config = $this->getConfiguration();

        // Icons (Inline SVGs for performance/simplicity in code block)
        $icon_map = [
            'loading' => '',
            'phone' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>',
            'email' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/></svg>',
            'pin' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>',
            'twitter' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z"/></svg>',
            'facebook' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>',
        ];

        $build_markup = '<div class="w-100 d-flex justify-content-between align-items-center">';

        // Left Side
        $build_markup .= '<div class="d-flex align-items-center gap-4">';
        // Address
        if (!empty($config['address'])) {
            $build_markup .= '<span class="d-flex align-items-center gap-2">' . $icon_map['pin'] . ' ' . $config['address'] . '</span>';
        }
        // Phone
        if (!empty($config['phone'])) {
            $phone_stripped = preg_replace('/[^\d]/', '', $config['phone']);
            $build_markup .= '<a href="tel:' . $phone_stripped . '" class="d-flex align-items-center gap-2 text-decoration-none text-light">' . $icon_map['phone'] . ' ' . $config['phone'] . '</a>';
        }
        // Email
        if (!empty($config['email'])) {
            $build_markup .= '<a href="mailto:' . $config['email'] . '" class="d-flex align-items-center gap-2 text-decoration-none text-light">' . $icon_map['email'] . ' ' . $config['email'] . '</a>';
        }
        $build_markup .= '</div>'; // End Left Side

        // Right Side
        $build_markup .= '<div class="d-flex align-items-center gap-3">';

        if (!empty($config['join_link']) && !empty($config['join_text'])) {
            $build_markup .= '<span class="small me-2"><a href="' . $config['join_link'] . '" class="text-white text-decoration-none">' . $config['join_text'] . '</a></span>';
        }

        if (!empty($config['twitter_url'])) {
            $build_markup .= '<a href="' . $config['twitter_url'] . '" aria-label="Twitter">' . $icon_map['twitter'] . '</a>';
        }
        if (!empty($config['facebook_url'])) {
            $build_markup .= '<a href="' . $config['facebook_url'] . '" aria-label="Facebook">' . $icon_map['facebook'] . '</a>';
        }

        $build_markup .= '</div>'; // End Right Side

        return [
            '#markup' => $build_markup,
            '#allowed_tags' => ['div', 'span', 'a', 'svg', 'path'],
        ];
    }
}
