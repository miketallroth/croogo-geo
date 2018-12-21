<?php
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\Event\EventManager;

# migrate croogo setting to cake configuration key for cakephp-geo
$settings = TableRegistry::get('Croogo/Settings.Settings');
$apiKey = $settings->findByKey('Service.googlemap_key')->first();
if ($apiKey) {
    Configure::write('GoogleMap.key', $apiKey->value);
}

# register map listener
EventManager::instance()->on('View.CroogoGeo.fetchMap', function() {
    echo 'hello from the event listener';
});