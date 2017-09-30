<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use App\Users\User;
use Illuminate\Support\Facades\DB;

class UserServiceProvider extends ServiceProvider
{
    
    public function __construct(Application $app){
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
    
    public function getUsers(){
        $users = DB::select('select * from user');
        return $users;
    }
    
    public function getUser($id){
        
        $user = DB::select('select * from user where user_id=?',[$id]);
        return $user[0];
    }
    
}
