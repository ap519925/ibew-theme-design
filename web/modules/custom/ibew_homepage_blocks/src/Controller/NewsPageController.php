<?php

namespace Drupal\ibew_homepage_blocks\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the News page.
 */
class NewsPageController extends ControllerBase
{

    /**
     * Returns a blank build so the page--news.html.twig template can take over.
     */
    public function content()
    {
        return [
            '#markup' => '',
        ];
    }

}
