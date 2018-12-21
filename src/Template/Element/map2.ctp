<?php

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

$cell = $this->cell('ClearSky/CroogoGeo.Map', [$mapId, $mapScope]);
echo $cell->render();