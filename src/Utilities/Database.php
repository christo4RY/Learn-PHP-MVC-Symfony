<?php
namespace App\Utilities;

use Illuminate\Database\Capsule\Manager as DB;

class Database
{
    public function __construct()
    {
        $db = new DB;
        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'testphp',
            'username' => 'admin',
            'password' => 123456,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        
        // Make this db instance available globally via static methods... (optional)
        $db->setAsGlobal();
        
        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $db->bootEloquent();
    }

}
