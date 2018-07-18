<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CheckPandR extends Controller
{
  public function index()
  {
  $users = User::find(2);
  $users->assignRole('writer');
  // $users->syncRoles(['writer', 'un']);
  // dd($users->getAllPermissions());
   // $users->givePermissionTo('edit articles');
  // if($users->hasAnyPermission(['edit articles','unpublish articles'])){
  //   return 'User has permissions to edit articles';
  // }
  // return 'User has no permission to edit articles';
  // $users->givePermissionTo('edit articles');
  // $users = User::permission('edit articles')->get();
  // if($users->can('edit articles')){
  //   return 'User can edit another test article';
  // }
  // return 'User can not edit another article';
  //
  return view('home');
  }
}
