<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an IBEW News Section Block.
 *
 * @Block(
 *   id = "ibew_news_section",
 *   admin_label = @Translation("IBEW News Section"),
 *   category = @Translation("IBEW Homepage")
 * )
 */
class NewsSectionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'chip_text' => 'Latest Updates',
      'chip_color' => 'gold',
      'main_title' => 'Union News',
      'show_view_all_link' => TRUE,
      'view_all_url' => '/news',
      'news_items' => [
        [
          'chip' => 'Negotiations',
          'title' => 'Contract Negotiations Update',
          'description' => 'Members are encouraged to attend the next general meeting for important updates regarding the new commercial agreement.',
        ],
        [
          'chip' => 'Training',
          'title' => 'Apprenticeship Applications',
          'description' => 'The JATC will be accepting applications for the 2025 apprenticeship class starting next month. Spread the word to qualified candidates.',
        ],
        [
          'chip' => 'Community',
          'title' => 'Annual Food Drive',
          'description' => 'Local 90 is collecting non-perishable food items for the CT Food Bank. Donation bins are located in the union hall lobby.',
        ],
      ],
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['chip_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Chip Text'),
      '#default_value' => $config['chip_text'],
      '#description' => $this->t('The small label above the title.'),
    ];

    $form['chip_color'] = [
      '#type' => 'select',
      '#title' => $this->t('Chip Color'),
      '#options' => [
        'blue' => $this->t('Blue'),
        'gold' => $this->t('Gold'),
        'green' => $this->t('Green'),
      ],
      '#default_value' => $config['chip_color'],
    ];

    $form['main_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Main Title'),
      '#default_value' => $config['main_title'],
      '#required' => TRUE,
    ];

    $form['show_view_all_link'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show "View All News" link'),
      '#default_value' => $config['show_view_all_link'],
    ];

    $form['view_all_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('View All URL'),
      '#default_value' => $config['view_all_url'],
      '#states' => [
        'visible' => [
          ':input[name="settings[show_view_all_link]"]' => ['checked' => TRUE],
        ],
      ],
    ];

    // News items
    $form['news_items'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('News Items'),
      '#tree' => TRUE,
    ];

    for ($i = 0; $i < 3; $i++) {
      $form['news_items'][$i] = [
        '#type' => 'fieldset',
        '#title' => $this->t('News Item @num', ['@num' => $i + 1]),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      ];

      $form['news_items'][$i]['chip'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Chip Label'),
        '#default_value' => $config['news_items'][$i]['chip'] ?? '',
      ];

      $form['news_items'][$i]['title'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Title'),
        '#default_value' => $config['news_items'][$i]['title'] ?? '',
      ];

      $form['news_items'][$i]['description'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Description'),
        '#default_value' => $config['news_items'][$i]['description'] ?? '',
        '#rows' => 3,
      ];
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();

    $this->configuration['chip_text'] = $values['chip_text'];
    $this->configuration['chip_color'] = $values['chip_color'];
    $this->configuration['main_title'] = $values['main_title'];
    $this->configuration['show_view_all_link'] = $values['show_view_all_link'];
    $this->configuration['view_all_url'] = $values['view_all_url'];
    $this->configuration['news_items'] = $values['news_items'];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    return [
      '#theme' => 'ibew_news_section',
      '#chip_text' => $config['chip_text'],
      '#chip_color' => $config['chip_color'],
      '#main_title' => $config['main_title'],
      '#show_view_all_link' => $config['show_view_all_link'],
      '#view_all_url' => $config['view_all_url'],
      '#news_items' => $config['news_items'],
    ];
  }

}
