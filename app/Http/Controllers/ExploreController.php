<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ExploreController extends Controller
{
    public function index(){

        $data['title'] = "Explore";
        $data['customer'] = Customer::where('id', session('member')['id'])->first();
        return view('explore', $data);
    }
}
