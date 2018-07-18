<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieController extends Controller
{
  public function index()
  {
    $role = Role::create(['name' => 'un']);
    $permission = Permission::create(['name' => 'unpublish articles']);
  }

}
