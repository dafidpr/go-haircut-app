<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;
class DashboardController extends Controller
{


    public function index()
    {
        $data['title'] = "Dashboard";
        $data['barber'] = Barber::where('id', session('member')['id'])->first();
        $data['nullable'] = Barber::where('id', session('member')['id'])->where(function($query)
            {
                $query->where('whatsapp', '=', null)
                    ->orWhere('address', '=', null)
                    ->orWhere('lat', '=', null)
                    ->orWhere('long', '=', null);
            }
        )->count();

        return view('barber.index', $data);
    }
}
