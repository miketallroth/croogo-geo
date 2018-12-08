<?php

use Phinx\Seed\AbstractSeed;

class NodesSeed extends AbstractSeed
{

    public $records = [
        [
            'id' => null,
            'parent_id' => null,
            'user_id' => '1',
            'title' => 'Sample Map Blog',
            'slug' => 'sample-map-blog',
            'body' => '[element:map plugin=ClearSky/CroogoGeo]',
            'excerpt' => '',
            'status' => '0',
            'mime_type' => '',
            'comment_status' => '0',
            'comment_count' => '0',
            'promote' => '0',
            'path' => '/blog/sample-map',
            'terms' => '',
            'sticky' => '0',
            'lft' => null,
            'rght' => null,
            'visibility_roles' => '',
            'type' => 'blog',
            'updated' => '2018-12-06 06:36:00',
            'created' => '2018-11-26 01:21:20'
        ],
    ];

    public function run()
    {
        $Table = $this->table('nodes');
        $Table->insert($this->records)->save();
    }

}
