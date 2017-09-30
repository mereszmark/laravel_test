<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\UserServiceProvider;

class UserListController extends Controller
{
    public $userServiceProvider;
    
    public function __construct(UserServiceProvider $userServiceProvider){
        $this->userServiceProvider=$userServiceProvider;
    }
    
    public function list(){
        return view('user_listing')->withUsers($this->userServiceProvider->getUsers());   
    }
    
    public function show(Request $request){
         $userid = $request->input('userid');
        return view('user_listing_detail')->withUser($this->userServiceProvider->getUser($userid));   
    }
    
    
    
}
