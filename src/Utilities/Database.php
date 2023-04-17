<?php
namespace App\Utilities;

use App\Models\Student;
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

    public function index()
    {
        return Student::all();
    }

    public function show($id)
    {
        return Student::findOrFail($id);

    }

    public function store($request)
    {
        Student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'age' => $request['age']
        ]);
        header("location:/../../index.php");
    }

    public function edit($id)
    {
        return Student::findOrFail($id);
    }

    public function update($request)
    {
        
        $student = Student::firstWhere('id', $request['id']);
        $student->update(
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'birthday' => $request['birthday'],
                'age' => $request['age']
            ]
        );
        header("location:/../../show.php?id=".$request['id']);
    }

    public function destroy(int $id):void
    {
        Student::destroy($id);
        header("location:/../../index.php");
    }
}
