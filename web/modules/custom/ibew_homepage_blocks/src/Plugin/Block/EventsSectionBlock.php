<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an IBEW Events Section Block.
 *
 * @Block(
 *   id = "ibew_events_section",
 *   admin_label = @Translation("IBEW Events Section"),
 *   category = @Translation("IBEW Homepage")
 * )
 */
class EventsSectionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'chip_text' => 'Calendar',
      'chip_color' => 'blue',
      'main_title' => 'Upcoming Events',
      'show_view_all_link' => TRUE,
      'view_all_url' => '/events',
      'events' => [
        [
          'day' => '15',
          'month' => 'Dec',
          'color_variant' => 'blue',
          'title' => 'General Membership Meeting',
          'time' => '6:00 PM - 8:00 PM',
          'location' => 'Union Hall, Wallingford',
          'description' => 'Regular monthly business meeting for all members. Dinner provided.',
          'registration_count' => '85 Registered',
          'link_url' => '/events/meeting',
          'link_text' => 'Register',
        ],
        [
          'day' => '22',
          'month' => 'Dec',
          'color_variant' => 'gold',
          'title' => 'Retirees Breakfast',
          'time' => '9:00 AM - 11:00 AM',
          'location' => 'Athenian Diner',
          'description' => 'Join us for our monthly retirees gathering. All retirees welcome.',
          'registration_count' => '32 Registered',
          'link_url' => '/events/breakfast',
          'link_text' => 'Register',
        ],
        [
          'day' => '05',
          'month' => 'Jan',
          'color_variant' => 'blue',
          'title' => 'Executive Board Meeting',
          'time' => '5:30 PM - 7:00 PM',
          'location' => 'Conference Room',
          'description' => 'Regular meeting of the Executive Board.',
          'registration_count' => 'Board Members',
          'link_url' => '/events/board',
          'link_text' => 'Details',
        ],
        [
          'day' => '12',
          'month' => 'Jan',
          'color_variant' => 'green',
          'title' => 'OSHA 10 Training',
          'time' => '8:00 AM - 4:00 PM',
          'location' => 'Training Center',
          'description' => 'Two-day OSHA certification course. Attendance mandatory for apprentices.',
          'registration_count' => '12 Spots Left',
          'link_url' => '/events/osha',
          'link_text' => 'Register',
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
      '#title' => $this->t('Show "Full Calendar" link'),
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

    // Events
    $form['events'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Events'),
      '#tree' => TRUE,
    ];

    for ($i = 0; $i < 4; $i++) {
      $form['events'][$i] = [
        '#type' => 'fieldset',
        '#title' => $this->t('Event @num', ['@num' => $i + 1]),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      ];

      $form['events'][$i]['day'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Day'),
        '#default_value' => $config['events'][$i]['day'] ?? '',
        '#size' => 5,
      ];

      $form['events'][$i]['month'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Month'),
        '#default_value' => $config['events'][$i]['month'] ?? '',
        '#size' => 10,
      ];

      $form['events'][$i]['color_variant'] = [
        '#type' => 'select',
        '#title' => $this->t('Color Variant'),
        '#options' => [
          'blue' => $this->t('Blue (General/Meeting)'),
          'red' => $this->t('Red (Important/Safety)'),
          'gold' => $this->t('Gold (Special/Union)'),
          'green' => $this->t('Green (Training/Education)'),
        ],
        '#default_value' => $config['events'][$i]['color_variant'] ?? 'blue',
      ];

      $form['events'][$i]['title'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Title'),
        '#default_value' => $config['events'][$i]['title'] ?? '',
      ];

      $form['events'][$i]['time'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Time'),
        '#default_value' => $config['events'][$i]['time'] ?? '',
      ];

      $form['events'][$i]['location'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Location'),
        '#default_value' => $config['events'][$i]['location'] ?? '',
      ];

      $form['events'][$i]['description'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Description'),
        '#default_value' => $config['events'][$i]['description'] ?? '',
        '#rows' => 2,
      ];

      $form['events'][$i]['registration_count'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Registration Count Text'),
        '#default_value' => $config['events'][$i]['registration_count'] ?? '',
        '#description' => $this->t('e.g., "85 Registered" or "12 Spots Left"'),
      ];

      $form['events'][$i]['link_url'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Link URL'),
        '#default_value' => $config['events'][$i]['link_url'] ?? '',
      ];

      $form['events'][$i]['link_text'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Link Text'),
        '#default_value' => $config['events'][$i]['link_text'] ?? 'Register',
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
    $this->configuration['events'] = $values['events'];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    return [
      '#theme' => 'ibew_events_section',
      '#chip_text' => $config['chip_text'],
      '#chip_color' => $config['chip_color'],
      '#main_title' => $config['main_title'],
      '#show_view_all_link' => $config['show_view_all_link'],
      '#view_all_url' => $config['view_all_url'],
      '#events' => $config['events'],
    ];
  }

}
