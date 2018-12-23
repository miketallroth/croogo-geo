<?php

namespace ClearSky\CroogoGeo\Lib;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;

class MapUtility implements EventListenerInterface
{
    public function implementedEvents()
    {
        return [
            'View.CroogoGeo.fetchData' => 'fetchData',
        ];
    }

    public function fetchData(Event $event, $mapId, $mapScope)
    {
        // Implement your own utility class that implements the EventListenerInterface,
        // and register it in your bootstrap.php file. This function would perform
        // the data lookup and return options, markers and icons in an array as the
        // result of the event.

        // Do lookup using $mapId and (optionally) $mapScope

        $icons = [
            //'blue-paddle' => $this->GoogleMap->addIcon('https://maps.google.com/mapfiles/kml/paddle/blu-circle.png'),
            'blue-paddle' => 'https://maps.google.com/mapfiles/kml/paddle/blu-circle.png',
            'rf-gray' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_gray.png',
            'rf-green' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png',
            'rf-yellow' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png',
            'rf-orange' => 'https://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_orange.png',
        ];

        $options = [
            'lat' => 44.2651738, 'lng' => -88.4081236,
            'type' => 'R',
            'div' => ['id' => 'themap'],
            'map' => [
                'navOptions' => ['style' => 'SMALL'],
                'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_BOTTOM'],
            ],
        ];

        $joeMarker = [
            'lat' => 44.2651738,
            'lng' => -88.4081236,
            'title' => 'Joe Cool',
            'content' => 'Some Html <b>Content</b>',
            'icon' => $icons['rf-green'],
        ];
        $billyMarker = [
            'lat' => 44.2752938,
            'lng' => -88.4182436,
            'title' => 'Billy Black',
            'content' => 'Some Html <b>Content</b>',
            'icon' => $icons['rf-green'],
        ];
        $jimmyMarker = [
            'lat' => 44.2851738,
            'lng' => -88.4381236,
            'title' => 'Jimmy John',
            'content' => 'Some Html <b>Content</b>',
            'icon' => $icons['rf-yellow'],
        ];

        $markers = [
            $joeMarker,
        ];

        if ($mapId == 0) {
            $options['zoom'] = 12;
            $markers[] = $billyMarker;
        } else if ($mapId == 1) {
            $options['zoom'] = 11;
            $markers[] = $jimmyMarker;
        }

        // return data in an array

        return [
            'options' => $options,
            'markers' => $markers,
        ];
    }
}