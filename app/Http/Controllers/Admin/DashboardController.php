<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

        $data['title'] = "Dashboard";
        $data['user'] = User::where('id', session('user')['id'])->first();
        return view('admin.index', $data);
    }
}
