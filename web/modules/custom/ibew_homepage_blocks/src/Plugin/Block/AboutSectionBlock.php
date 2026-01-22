<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an 'About Section' Block.
 *
 * @Block(
 *   id = "ibew_about_section",
 *   admin_label = @Translation("IBEW About Section"),
 *   category = @Translation("IBEW Homepage"),
 * )
 */
class AboutSectionBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return [
            'chip_text' => 'About Us',
            'chip_color' => 'ibew-chip--blue',
            'main_title' => 'Powering New Haven Since 1901',
            'lede_text' => 'IBEW Local 90 represents skilled electricians throughout the Greater New Haven area, providing quality electrical work for commercial, industrial, and residential projects.',
            'card_1_title' => 'Skilled Workforce',
            'card_1_items' => "5-year Apprenticeship Program\nContinuing Education & Training\nState-Certified Journeymen\nOSHA Safety Certified",
            'card_2_title' => 'Member Benefits',
            'card_2_items' => "Comprehensive Health Insurance\nPension & Retirement Plans\nLife Insurance Coverage\nUnion Representation",
            'card_3_title' => 'Our Services',
            'card_3_items' => "Commercial Electrical Construction\nIndustrial Installations\nResidential Projects\nMaintenance & Repairs",
        ] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $config = $this->getConfiguration();

        $form['chip_text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Section Label (Chip)'),
            '#default_value' => $config['chip_text'],
        ];

        $form['chip_color'] = [
            '#type' => 'select',
            '#title' => $this->t('Chip Color'),
            '#options' => [
                'ibew-chip--blue' => 'Blue',
                'ibew-chip--gold' => 'Gold',
                'ibew-chip--green' => 'Green',
            ],
            '#default_value' => $config['chip_color'],
        ];

        $form['main_title'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Main Title'),
            '#default_value' => $config['main_title'],
        ];

        $form['lede_text'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Lede Text'),
            '#default_value' => $config['lede_text'],
        ];

        // Cards
        for ($i = 1; $i <= 3; $i++) {
            $form["card_{$i}_group"] = [
                '#type' => 'details',
                '#title' => $this->t('Card @num', ['@num' => $i]),
                '#open' => FALSE,
            ];
            $form["card_{$i}_group"]["card_{$i}_title"] = [
                '#type' => 'textfield',
                '#title' => $this->t('Card Title'),
                '#default_value' => $config["card_{$i}_title"],
            ];
            $form["card_{$i}_group"]["card_{$i}_items"] = [
                '#type' => 'textarea',
                '#title' => $this->t('List Items (One per line)'),
                '#default_value' => $config["card_{$i}_items"],
            ];
        }

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        $this->configuration['chip_text'] = $form_state->getValue('chip_text');
        $this->configuration['chip_color'] = $form_state->getValue('chip_color');
        $this->configuration['main_title'] = $form_state->getValue('main_title');
        $this->configuration['lede_text'] = $form_state->getValue('lede_text');

        for ($i = 1; $i <= 3; $i++) {
            $group = $form_state->getValue("card_{$i}_group");
            $this->configuration["card_{$i}_title"] = $group["card_{$i}_title"];
            $this->configuration["card_{$i}_items"] = $group["card_{$i}_items"];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $config = $this->getConfiguration();

        $cards = [];
        for ($i = 1; $i <= 3; $i++) {
            // Explode items by newline
            $items_raw = $config["card_{$i}_items"];
            $items = array_filter(array_map('trim', explode("\n", $items_raw)));

            $cards[] = [
                'title' => $config["card_{$i}_title"],
                'items' => $items,
            ];
        }

        return [
            '#theme' => 'ibew_about_section',
            '#chip_text' => $config['chip_text'],
            '#chip_color' => $config['chip_color'],
            '#main_title' => $config['main_title'],
            '#lede_text' => $config['lede_text'],
            '#cards' => $cards,
        ];
    }

}
