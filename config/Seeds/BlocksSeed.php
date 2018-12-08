<?php

use Phinx\Seed\AbstractSeed;

class BlocksSeed extends AbstractSeed
{

    public $records = [
        [
            'id' => null,
            'region_id' => '4',
            'title' => 'Sample Map Block',
            'alias' => 'sample-map-block',
            'body' => '',
            'show_title' => '1',
            'class' => '',
            'status' => '0',
            'weight' => '1',
            'element' => 'ClearSky/CroogoGeo.map',
            'visibility_roles' => '',
            'visibility_paths' => '',
            'visibility_php' => '',
            'params' => '',
            'updated' => '2018-12-06 06:36:00',
            'created' => '2018-11-26 01:21:20'
        ],
    ];

    public function run()
    {
        $Table = $this->table('blocks');
        $Table->insert($this->records)->save();
    }

}
