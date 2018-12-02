<?php
use Migrations\AbstractMigration;

/**
 * Initial Migration
 *
 * Adds a Service Setting to hold the API key.
 *
 * @category Migration
 * @package  ClearSky.CroogoGeo
 * @author   Mike Tallroth <mike.tallroth@goclearsky.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://github.com/goclearsky/croogo-geo
 */
class CroogoGeoInitialMigration extends AbstractMigration
{

    public $records = [
        [
            'id' => null,
            'key' => 'Service.googlemap_key',
            'value' => 'your-google-map-api-key',
            'title' => 'API key',
            'description' => 'Google Map API key',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '40',
            'params' => ''
        ],
    ];


    public function up()
    {
        $Table = $this->table('settings');
        $Table->insert($this->records)->save();
    }

    public function down()
    {
        $Table = $this->table('settings');
        $query = $Table->find('all', [
            'where' => ['Settings.key' => $this->records[0]['key']],
        ]);
        $records = $query->first();
print_r($records);
        //$Table->delete($records);
    }

}
