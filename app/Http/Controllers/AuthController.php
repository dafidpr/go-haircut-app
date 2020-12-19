<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Barber;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Sign In";
        $data['mod'] = "mod-auth";
        return view('login', $data);
    }
    public function register()
    {
        $data['title'] = "Register";
        $data['mod'] = "mod-auth";
        return view('register', $data);
    }
    public function register_member()
    {
        $data['title'] = "Register Barber";
        $data['mod'] = "mod-auth";
        return view('register-member', $data);
    }

    public function postLogin(Request $request)
    {
        $customer = Customer::where('email', $request->post('email'))->first();
        $barber = Barber::where('email', $request->post('email'))->first();

        if ($customer) {
            if(Hash::check($request->post('password'), $customer->password)){

                $request->session()->put('member', [
                    'id' => $customer->id,
                    'fullName' => $customer->customer_name,
                    'email' => $customer->email,
                    'picture' => $customer->picture,
                    'role'  => 'Customer'
                ]);
    
                $customer->last_login = Carbon::now();
                $customer->save();
                return redirect(config('redirects.redirectIfAuthCustomer'));
            }
            
            return redirect()->back()->with('error', 'Wrong email or password');

        } else if($barber){
            if(Hash::check($request->post('password'), $barber->password)){
                
                $request->session()->put('member', [
                    'id' => $barber->id,
                    'barberName' => $barber->barber_name,
                    'fullName' => $barber->owner_name,
                    'email' => $barber->email,
                    'picture' => $barber->profile_pic,
                    'role'  => 'Barber'
                ]);
                    
                $barber->last_login = Carbon::now();
                $barber->save();
                return redirect(config('redirects.redirectIfAuthBarber'));
            }
            return redirect()->back()->with('error', 'Wrong email or password');
        }

    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|same:password_confirm',
            'password_confirm' => 'required|same:password',
        ], [
            'password.same'                => 'Password is not the same as confirmation password.',
            'password.required'            => 'Password cannot be empty',
            'password_confirm.same'        => 'Confirm password is not the same as password',
            'password_confirm.required'    => 'Confirm password cannot be empty'
        ]);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();

        } else {

            Customer::create([
                'customer_name'   => htmlentities($request->full_name),
                'email'           => htmlentities($request->email),
                'password'        => Hash::make(htmlentities($request->password)),
            ]);
            return redirect('member/login')->with('success', 'Register berhasil!');
        }
    }

    public function PostRegister_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'barber_name'       => 'required',
            'owner_name'        => 'required',
            'email'             => 'required|email|unique:barbers,email',
            'password'          => 'required|same:confirm_password',
            'confirm_password'  => 'required|same:password',
        ], [
            'password.same'                => 'Password is not the same as confirmation password.',
            'password.required'            => 'Password cannot be empty',
            'confirm_password.same'        => 'Confirm password is not the same as password',
            'confirm_password.required'    => 'Confirm password cannot be empty'
        ]);
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();

        } else {

            Barber::create([
                'barber_name'  => htmlentities($request->barber_name),
                'owner_name'   => htmlentities($request->owner_name),
                'email'        => htmlentities($request->email),
                'password'     => Hash::make(htmlentities($request->password)),
            ]);
            return redirect('member/login')->with('success', 'Register berhasil!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->remove('member');
        return redirect(config('redirects.redirectIfUnAuthArea'));
    }
}
