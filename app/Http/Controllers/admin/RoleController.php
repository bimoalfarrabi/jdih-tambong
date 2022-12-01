<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function viewRole() {
        $data = [

            'roles' => Role::where('name', '!=', 'superAdmin')->get()
        ];
        return view('admin.roles');
    }
}
