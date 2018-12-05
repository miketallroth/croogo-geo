<?php

$config = [
	'autoScript' => true,
];
$this->loadHelper('Geo.GoogleMap', $config);



$options = [
	'lat' => 44.2648051,
	'lng' => -88.4039178,
	'zoom' => 12,
	'type' => 'R',
	'div' => ['id' => 'someothers'],
	'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'RIGHT_CENTER']]
];
$map = $this->GoogleMap->map($options);


$icon = $this->GoogleMap->addIcon('https://maps.google.com/mapfiles/kml/paddle/blu-circle.png');
$blueCirclePaddlIconId = $icon['icon'];

$icon = $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_gray.png');
$graySmallIconId = $icon['icon'];

$icon = $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png');
$greenSmallIconId = $icon['icon'];

$icon = $this->GoogleMap->addIcon('https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png');
$yellowSmallIconId = $icon['icon'];

// Let's add some markers
$this->GoogleMap->addMarker([
	'lat' => 44.2648051,
	'lng' => -88.4039178,
	'title' => 'Appleton, WI',
	'content' => 'Some Html-<b>Content</b>',
	'icon' => $greenSmallIconId,
]);


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
echo $map;

// finalize returns a script w/o the script tags
// add this to the bottom inline scripts
$s = $this->GoogleMap->finalize(true);
$this->Html->scriptBlock($s, ['block' => 'scriptBottom']);

?>
