<?php

namespace ClearSky\CroogoGeo\View\Cell;

use Cake\View\Cell;

class MapCell extends Cell
{

    /**
     * Renders the map.
     * Dispatches an event to solicit data for the map given the mapId.
     * If no listener provides data, then render a missing map message.
     * Both values are simply passed in to the event to be processed
     * as desired. Scope can be ignored if not necessary for the
     * application.
     * @param int $mapId the id of the map within the scope
     * @param string $mapScope the scope if multiple scopes are desired
     */
    public function display(int $mapId, string $mapScope = null)
    {

        $events = $this->getEventManager();

        // setup event with mapId and mapScope

        // dispatch event

        // get map data as 'options' and 'markers'

        // render the view
        $options = [
            'lat' => 44.2651738,
            'lng' => -88.4081236,
            'zoom' => 12,
            'type' => 'R',
            'div' => ['id' => 'someothers'],
            'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_BOTTOM']]
        ];
        $markers = null;
        //$this->set(compact('options', 'markers'));
        $this->set('options', $options);
        $this->set('markers', $markers);

    }

}