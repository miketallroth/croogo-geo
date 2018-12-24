<?php

use Cake\Event\Event;

$this->loadHelper('Geo.GoogleMap', ['autoScript' => true]);

if (!isset($mapId)) {
    $mapId = 0;
}

if (!isset($mapScope)) {
    $mapScope = null;
}

$options = null;
$markers = null;

// setup event with mapId and mapScope
$manager = $this->getEventManager();
$event = new Event('View.CroogoGeo.fetchData', $this, [$mapId, $mapScope]);

// dispatch event and get map data as 'options' and 'markers'
$manager->dispatch($event);
$result = $event->getResult();
if (!empty($result['options'])) {
    $options = $result['options'];
}
if (!empty($result['markers'])) {
    $markers = $result['markers'];
}

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