<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Login";
        return view('admin.login', $data);
    }

    public function postLogin(Request $request)
    {
        $user = User::where('email', $request->post('email'))->first();

        if ($user && Hash::check($request->post('password'), $user->password)) {


            $request->session()->put('user', [
                'id' => $user->id,
                'fullName' => $user->full_name,
                'email' => $user->email,
                'picture' => $user->picture,
                'role'  => 'Administrator'
            ]);

            $user->last_login = Carbon::now();
            $user->save();

            return redirect(config('redirects.redirectIfAuthAdmin'));
        }

        return redirect()->back()->with('error', 'Wrong email or password');
    }

    public function logout(Request $request)
    {
        $request->session()->remove('user');
        return redirect(config('redirects.redirectIfUnAuthAdmin'));
    }

}
