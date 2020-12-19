<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index(){
        $data['title'] = "Home";
        $data['customer'] = Customer::where('id', session('member')['id'])->first();
        return view('index', $data);
    }
}
