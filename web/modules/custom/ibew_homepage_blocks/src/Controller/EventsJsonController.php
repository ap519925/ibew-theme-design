<?php

namespace Drupal\ibew_homepage_blocks\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Returns responses for IBEW Homepage Blocks routes.
 */
class EventsJsonController extends ControllerBase
{

    /**
     * Returns a JSON feed of events for the calendar.
     */
    public function json()
    {
        $events = [];

        // Load all published ibew_event nodes
        $query = \Drupal::entityQuery('node')
            ->condition('type', 'ibew_event')
            ->condition('status', 1)
            ->accessCheck(TRUE)
            ->sort('field_event_date', 'ASC');

        $nids = $query->execute();
        $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

        foreach ($nodes as $node) {
            if ($node->hasField('field_event_date') && !$node->get('field_event_date')->isEmpty()) {
                $date = $node->get('field_event_date')->value;
                $title = $node->getTitle();

                // Determine event type based on title
                $type = 'meeting';
                if (stripos($title, 'training') !== FALSE || stripos($title, 'safety') !== FALSE || stripos($title, 'workshop') !== FALSE) {
                    $type = 'training';
                }

                $events[] = [
                    'title' => $title,
                    'start' => $date,
                    'end' => $date,
                    'url' => $node->toUrl()->toString(),
                    'type' => $type,
                ];
            }
        }

        return new JsonResponse($events);
    }

}
