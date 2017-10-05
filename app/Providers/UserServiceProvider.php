<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use App\Users\User;
use Illuminate\Support\Facades\DB;

class UserServiceProvider extends ServiceProvider
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
    }
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function getUsers()
    {
        $users = DB::select('select * from user');
        return $users;
    }

    public function getUser($id)
    {
        $user = DB::select('select * from user where user_id=?', [$id]);
        return $user[0];
    }

    public function addUser($name)
    {
        DB::insert('insert into user (username) values (?)', [$name]);
    }

    public function updateUser($id, $name)
    {
        DB::update('update user set username = ? where user_id = ?', [$name,$id]);
    }

    public function deleteUser($id)
    {
        DB::delete('delete from user where user_id=?', [$id]);
    }
}
