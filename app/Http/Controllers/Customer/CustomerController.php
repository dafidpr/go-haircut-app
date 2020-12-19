<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function edit_profile()
    {
        $data['title'] = "Edit Profile";
        $data['mod'] = "mod-customer";
        $data['customer'] = Customer::where('id', session('member')['id'])->first();
        return view('customer.edit', $data);
    }
    public function update_password()
    {
        $data['title'] = "Edit Password";
        $data['mod'] = "mod-customer";
        $data['customer'] = Customer::where('id', session('member')['id'])->first();
        return view('customer.password', $data);
    }

    public function update_profile(Request $request, $id)
    {
        if (\Request::ajax()) {
            $validator = Validator::make($request->all(), [
                'name'  => 'required',
                'email' => 'required|email',
                'pic'   => 'mimes:jpeg,png'
            ]);
            
            if($validator->fails()){
                return response()->json([
                    'messages' => $validator->messages()
                ], 400);
            } else {
                try {
                    $customer = Customer::findOrFail($id);
                    if(empty($request->file('pic'))){
                        $profile_pic = $customer->picture;
                    } else {
                        if ($customer->picture != 'default.png') {
                            
                            \unlink('assets/img/profile/'.$customer->picture);
                        }
                        $profile_pic = Str::random(25).'.'.$request->file('pic')->extension();
                        $request->file('pic')->move(public_path('assets/img/profile/'), $profile_pic);
                    }


                    $customer->update([
                        'customer_name'     => \htmlentities($request->name),
                        'email'             => \htmlentities($request->email),
                        'picture'           => \htmlentities($profile_pic)
                    ]);


                    return response()->json([
                        'pesan' => 'Data telah diupdate'
                    ], 200);
                } catch (Exeption $e) {
                    return response()->json([
                        'pesan' => 'Terjadi Kesalahan'
                    ], 409);
                }
            }
        }else {
            \abort(403);
        }
    }

    public function change_password(Request $request, $id)
    {
        if(\Request::ajax()){
            $validator = Validator::make($request->All(), [
                'old_password' => 'required',
                'new_password' => 'required|same:confirm_password',
                'confirm_password' => 'required|same:new_password',
            ], [
                'old_password.same'         => 'Old password is not the same as confirmation password.',
                'new_password.same'         => 'New password is not the same as confirmation password.',
                'old_password.required'     => 'Password cannot be empty',
                'confirm_password.same'     => 'Confirm password is not the same as password',
                'confirm_password.required' => 'Confirm password cannot be empty'
            ]);

            if($validator->fails()){
                return response()->json([
                    'messages' => $validator->messages()
                ], 400);
            } else {
                try {
                    $customer = Customer::findOrFail($id);
                    if(!Hash::check($request->old_password, $customer->password)){
                        return response()->json([
                            'pesan' => 'Password salah!'
                        ], 409);
                    } else {
                    $customer->update([
                        'password' => Hash::make($request->new_password)
                    ]);

                    return response()->json([
                        'pesan' => 'Data telah diupdate'
                    ], 200);
                }

                } catch (Exeption $e){
                    return response()->json([
                        'pesan' => 'Terjadi Kesalahan'
                    ], 409);
                }
            }
        } else {
            abort(403);
        }
    }
}
