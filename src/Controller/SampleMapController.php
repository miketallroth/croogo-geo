<?php

namespace ClearSky\CroogoGeo\Controller;

class SampleMapController extends AppController
{

    function map()
    {
        $maps = [
            'icons' => [
                'blue-paddle' => 'https://maps.google.com/mapfiles/kml/paddle/blu-circle.png',
                'rf-gray' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_gray.png',
                'rf-green' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png',
                'rf-yellow' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png',
                'rf-orange' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_orange.png',
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
                'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_BOTTOM']]
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
                'zoom' => 11,
                'type' => 'R',
                'div' => ['id' => 'someothers'],
                'map' => ['navOptions' => ['style' => 'SMALL'], 'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_BOTTOM']]
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
                    'lat' => 44.2851738,
                    'lng' => -88.4381236,
                    'title' => 'Jimmy John',
                    'content' => 'Some Html <b>Content</b>',
                    'icon' => $maps['icons']['rf-yellow'],
                ],
            ]
        ];

        $this->set(compact('maps'));
    }

}
