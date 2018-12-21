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


    // stuck!!!
    // From Cake manual
    // Cell templates have an isolated scope that does not share the same
    // View instance as the one used to render template and layout for the
    // current controller action or other cells. Hence they are unaware of
    // any helper calls made or blocks set in the action’s template / layout
    // and vice versa.

    // Seems like cells might not work for this. Including javascript in
    // the bottom block of the page from within the cell template.


    // finalize returns a script w/o the script tags
    // add this to the bottom inline scripts
    $script = $this->GoogleMap->finalize(true);
    $this->Html->scriptBlock($script, ['block' => 'scriptBottom']);

} else {

    echo "missing map definition";

}