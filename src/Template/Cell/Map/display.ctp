<?php

$config = [
    'autoScript' => true,
];
$this->loadHelper('Geo.GoogleMap', $config);

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