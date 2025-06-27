<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $customers = User::role('customer')->get();
        return view('admin.pages.users.index', compact('customers'));
    }
}
