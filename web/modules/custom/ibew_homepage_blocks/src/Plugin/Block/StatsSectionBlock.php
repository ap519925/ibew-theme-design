<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an 'Stats Section' Block.
 *
 * @Block(
 *   id = "ibew_stats_section",
 *   admin_label = @Translation("IBEW Stats Section"),
 *   category = @Translation("IBEW Homepage"),
 * )
 */
class StatsSectionBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return [
            'stat_1_value' => '120+',
            'stat_1_label' => 'Years of Service',
            'stat_2_value' => '500+',
            'stat_2_label' => 'Active Members',
            'stat_3_value' => '50+',
            'stat_3_label' => 'Signatory Contractors',
            'stat_4_value' => '100%',
            'stat_4_label' => 'Union Strong',
        ] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $config = $this->getConfiguration();

        for ($i = 1; $i <= 4; $i++) {
            $form["stat_{$i}_group"] = [
                '#type' => 'details',
                '#title' => $this->t('Stat @num', ['@num' => $i]),
                '#open' => TRUE,
            ];
            $form["stat_{$i}_group"]["stat_{$i}_value"] = [
                '#type' => 'textfield',
                '#title' => $this->t('Value'),
                '#default_value' => $config["stat_{$i}_value"],
            ];
            $form["stat_{$i}_group"]["stat_{$i}_label"] = [
                '#type' => 'textfield',
                '#title' => $this->t('Label'),
                '#default_value' => $config["stat_{$i}_label"],
            ];
        }

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        for ($i = 1; $i <= 4; $i++) {
            $group = $form_state->getValue("stat_{$i}_group");
            $this->configuration["stat_{$i}_value"] = $group["stat_{$i}_value"];
            $this->configuration["stat_{$i}_label"] = $group["stat_{$i}_label"];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $config = $this->getConfiguration();
        $stats = [];
        for ($i = 1; $i <= 4; $i++) {
            $stats[] = [
                'value' => $config["stat_{$i}_value"],
                'label' => $config["stat_{$i}_label"],
            ];
        }

        return [
            '#theme' => 'ibew_stats_section',
            '#stats' => $stats,
        ];
    }

}
