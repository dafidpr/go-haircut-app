<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function edit_profile()
    {
        $data['title'] = "Edit Profile";
        $data['mod'] = "mod-profile";
        $data['user'] = User::where('id', session('user')['id'])->first();
        return view('admin.settings.profile', $data);

    }
    public function update_password()
    {

        $data['title'] = "Update Password";
        $data['mod'] = "mod-profile";
        $data['user'] = User::where('id', session('user')['id'])->first();
        return view('admin.settings.password', $data);
    }

    public function update_profile(Request $request, $id)
    {
        if(\Request::ajax()){
            $validator = Validator::make($request->All(), [
                'name'   => 'required',
                'email'  => 'required|email',
                'pic'    => 'mimes:jpeg,png',
            ]);

            if($validator->fails()){
                return response()->json([
                    'messages' => $validator->messages()
                ], 400);
            } else {
                try {
                    $user = User::findOrFail($id);
                    if(empty($request->file('pic'))){
                        $profile_pic = $user->picture;
                    } else {
                        if($user->picture != 'default.png'){

                            \unlink('admin/assets/assets/avatars/'.$user->picture);
                        }
                        $profile_pic = Str::random(25).'.'.$request->file('pic')->extension();
                        $request->file('pic')->move(public_path('admin/assets/assets/avatars/'), $profile_pic);
                    }

                    $user->update([
                        'full_name'   => \htmlentities($request->name),
                        'email'       => \htmlentities($request->email),
                        'picture'     => \htmlentities($profile_pic),
                    ]);


                    return response()->json([
                        'pesan' => 'Data telah diupdate'
                    ], 200);

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
                    $user = User::findOrFail($id);
                    if(!Hash::check($request->old_password, $user->password)){
                        return response()->json([
                            'pesan' => 'Password salah!'
                        ], 409);
                    } else {
                    $user->update([
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
