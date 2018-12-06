<?php
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

# migrate croogo setting to cake configuration key for cakephp-geo
$settings = TableRegistry::get('Croogo/Settings.Settings');
$apiKey = $settings->findByKey('Service.googlemap_key')->first();
if ($apiKey) {
    Configure::write('GoogleMap.key', $apiKey->value);
}