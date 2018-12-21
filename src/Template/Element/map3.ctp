<?php

use Cake\Event\Event;

$config = [
    'autoScript' => true,
];
$this->loadHelper('Geo.GoogleMap', $config);

if (!isset($mapId)) {
    $mapId = 0;
}

if (!isset($mapScope)) {
    $mapScope = null;
}


// setup event with mapId and mapScope
$manager = $this->getEventManager();
$event = new Event('View.CroogoGeo.fetchMap', $this, []);
$manager->dispatch($event);

// fake results of event listener
$options = [
    'lat' => 44.2651738,
    'lng' => -88.4081236,
    'zoom' => 12,
    'type' => 'R',
    'div' => ['id' => 'someothers'],
    'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_BOTTOM']]
];
$markers = null;

// dispatch event

// get map data as 'options' and 'markers'

// render the view

if (!empty($options)) {

    // render the map
    echo $this->GoogleMap->map($options);

    // add the markers
    if (!empty($markers)) {
        foreach ($markers as $marker) {
            $this->GoogleMap->addMarker($marker);
        }
    }

    // finalize returns a script w/o the script tags
    // add this to the bottom inline scripts
    $script = $this->GoogleMap->finalize(true);
    $this->Html->scriptBlock($script, ['block' => 'scriptBottom']);

} else {

    echo "missing map definition";

}