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

    public function add(Request $request){
         $name = $request->input('name');
        $this->userServiceProvider->addUser($name);
      return redirect('/list');  }

    public function update(Request $request){
         $name = $request->input('name');
          $id = $request->input('id');
        $this->userServiceProvider->updateUser($id,$name);
          return redirect('/list');
          }

    public function delete(Request $request){
        $id = $request->input('id');
          $this->userServiceProvider->deleteUser($id);
      return redirect('/list');  }



}
