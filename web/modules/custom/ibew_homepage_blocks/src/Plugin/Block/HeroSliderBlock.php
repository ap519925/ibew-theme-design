<?php

namespace Drupal\ibew_homepage_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;
use Drupal\Core\Url;

/**
 * Provides a 'Hero Slider' block.
 *
 * @Block(
 *   id = "ibew_hero_slider",
 *   admin_label = @Translation("IBEW Hero Slider"),
 *   category = @Translation("IBEW Homepage"),
 * )
 */
class HeroSliderBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return [
            'slide_1_image' => [],
            'slide_2_image' => [],
            'slide_3_image' => [],
        ] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $config = $this->getConfiguration();

        $form['slide_1_image'] = [
            '#type' => 'managed_file',
            '#title' => $this->t('Slide 1 Image'),
            '#upload_location' => 'public://hero-slides',
            '#default_value' => $config['slide_1_image'],
        ];

        $form['slide_2_image'] = [
            '#type' => 'managed_file',
            '#title' => $this->t('Slide 2 Image'),
            '#upload_location' => 'public://hero-slides',
            '#default_value' => $config['slide_2_image'],
        ];

        $form['slide_3_image'] = [
            '#type' => 'managed_file',
            '#title' => $this->t('Slide 3 Image'),
            '#upload_location' => 'public://hero-slides',
            '#default_value' => $config['slide_3_image'],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        $this->configuration['slide_1_image'] = $form_state->getValue('slide_1_image');
        $this->configuration['slide_2_image'] = $form_state->getValue('slide_2_image');
        $this->configuration['slide_3_image'] = $form_state->getValue('slide_3_image');

        // Make file usage permanent.
        // Make file usage permanent.
        foreach (['slide_1_image', 'slide_2_image', 'slide_3_image'] as $field) {
            $fids = $this->configuration[$field];
            if (!empty($fids)) {
                // Handle array or single value
                $fid = is_array($fids) ? reset($fids) : $fids;
                $file = File::load($fid);
                if ($file) {
                    // Note: We are strictly setting permanent status. 
                    // Tracking detailed usage for config blocks without numeric IDs is constrained.
                    $file->setPermanent();
                    $file->save();
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $config = $this->getConfiguration();
        $slides = [];

        // Helper to get URL
        $get_url = function ($fids) {
            if (empty($fids)) {
                return null;
            }
            // Handle if it's an array or single value (just in case)
            $fid = is_array($fids) ? reset($fids) : $fids;

            if (!$fid) {
                return null;
            }

            $file = File::load($fid);
            if ($file) {
                return \Drupal::service('file_url_generator')->generateAbsoluteString($file->getFileUri());
            }
            return null;
        };

        $slides[] = $get_url($config['slide_1_image']);
        $slides[] = $get_url($config['slide_2_image']);
        $slides[] = $get_url($config['slide_3_image']);

        // Filter empty slides
        $slides = array_filter($slides);

        // Default slides if none provided (Fallbacks)
        if (empty($slides)) {
            $slides = [
                'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1581094794329-cd1096a7a2e8?q=80&w=2070&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop',
            ];
        }

        // Build render array
        // Usage of inline template for simplicity, or ideally a theme hook.
        // For specific Splide structure:
        $items = [];
        foreach ($slides as $url) {
            $items[] = [
                'url' => $url,
                // You can add more config here later (caption, etc)
            ];
        }

        return [
            '#theme' => 'ibew_hero_slider',
            '#slides' => $items,
            '#attached' => [
                // Theme's library is already attached globally or via page, 
                // but we can ensure it here.
                'library' => [
                    'ibew_theme/global-styling',
                ],
            ],
        ];
    }
}
