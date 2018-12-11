<?php

$config = [
    'autoScript' => true,
];
$this->loadHelper('Geo.GoogleMap', $config);


// TODO set $maps in controller->set() or helper
$maps = [
    'icons' => [
        'blue-paddle' => $this->GoogleMap->addIcon('https://maps.google.com/mapfiles/kml/paddle/blu-circle.png'),
        'rf-gray' => $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_gray.png'),
        'rf-green' => $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png'),
        'rf-yellow' => $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png'),
    ],
    'maps' => [],
];
$maps['maps'][0] = [
    'options' => [
        'lat' => 44.2651738,
        'lng' => -88.4081236,
        'zoom' => 12,
        'type' => 'R',
        'div' => ['id' => 'someothers'],
        'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'RIGHT_CENTER']]
    ],
    'markers' => [
        [
            'lat' => 44.2651738,
            'lng' => -88.4081236,
            'title' => 'Joe Cool',
            'content' => 'Some Html <b>Content</b>',
            'icon' => $maps['icons']['rf-green'],
        ],
        [
            'lat' => 44.2752938,
            'lng' => -88.4182436,
            'title' => 'Billy Black',
            'content' => 'Some Html <b>Content</b>',
            'icon' => $maps['icons']['rf-green'],
        ]
    ]
];
$maps['maps'][1] = [
    'options' => [
        'lat' => 44.2651738,
        'lng' => -88.4081236,
        'zoom' => 12,
        'type' => 'R',
        'div' => ['id' => 'someothers'],
        'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'RIGHT_CENTER']]
    ],
];





// set to default, typically not showing any markers
if (!isset($mapId)) {
    $mapId = -1;
    $maps['maps'][-1] = [
        'options' => [],
        'markers' => [],
    ];
}

// render map
$map = $this->GoogleMap->map($maps['maps'][$mapId]['options']);

// Let's add some markers
if (!empty($maps['maps'][$mapId]['markers'])) {
    foreach ($maps['maps'][$mapId]['markers'] as $marker) {
        $this->GoogleMap->addMarker($marker);
    }
}

// place map in html
echo $map;

// finalize returns a script w/o the script tags
// add this to the bottom inline scripts
$s = $this->GoogleMap->finalize(true);
$this->Html->scriptBlock($s, ['block' => 'scriptBottom']);


/**
 * More options: https://sites.google.com/site/gmapsdevelopment/Home
 * 
 * https://maps.google.com/mapfiles/kml/paddle/
 * blu-blank.png
 * blu-stars.png
 * options:
 * blu, red, grn, pink, purple, wht
 * blank, circle, diamond, square, stars
 *
 * https://maps.gstatic.com/mapfiles/ridefinder-images/
 * mm_20_gray.png
 * mm_20_green.png
 * options:
 * gray, green, orange, purple, red, white, yellow, black, blue, brown
 * 
 */
?>
