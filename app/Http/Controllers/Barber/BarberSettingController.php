<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BarberSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Setting";
        $data['mod'] = "mod-barber-setting";
        $data['barber'] = Barber::where('id', session('member')['id'])->first();
        return view('barber.settings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(\Request::ajax()){
            $validator = Validator::make($request->All(), [
                'barber_name'   => 'required',
                'owner_name'    => 'required',
                'pic'           => 'mimes:jpeg,png',
                'email'         => 'required|email',
                'whatsapp'      => 'required|numeric',
                'address'       => 'required',
                'latitude'      => 'required',
                'longitude'     => 'required',
                'from_day'      => 'required',
                'to_day'        => 'required',
                'from_hour'     => 'required',
                'to_hour'       => 'required'
            ]);

            if($validator->fails()){
                return response()->json([
                    'messages' => $validator->messages()
                ], 400);
            } else {
                try {
                    $barber = Barber::findOrFail($id);
                    if(empty($request->file('pic'))){
                        $profile_pic = $barber->profile_pic;
                    } else {
                        if($barber->profile_pic != 'barber_default.png'){

                            \unlink('assets/img/barber/barber_profile/'.$barber->profile_pic);
                        }
                        $profile_pic = Str::random(25).'.'.$request->file('pic')->extension();
                        $request->file('pic')->move(public_path('assets/img/barber/barber_profile/'), $profile_pic);
                    }
                    $opening_hours = $request->from_day . ' - ' . $request->to_day. ',  ' .$request->from_hour. ' - ' . $request->to_hour;

                    $barber->update([
                        'barber_name'   => \htmlentities($request->barber_name),
                        'owner_name'    => \htmlentities($request->owner_name),
                        'profile_pic'   => \htmlentities($profile_pic),
                        'email'         => \htmlentities($request->email),
                        'whatsapp'      => \htmlentities($request->whatsapp),
                        'address'       => \htmlentities($request->address),
                        'lat'           => \htmlentities($request->latitude),
                        'long'          => \htmlentities($request->longitude),
                        'opening_hours' => \htmlentities($opening_hours)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update_password()
    {

        $data['title'] = "Update Password";
        $data['mod'] = "mod-barber-setting";
        $data['barber'] = Barber::where('id', session('member')['id'])->first();
        return view('barber.settings.update-password', $data);
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
                    $barber = Barber::findOrFail($id);
                    if(!Hash::check($request->old_password, $barber->password)){
                        return response()->json([
                            'pesan' => 'Password salah!'
                        ], 409);
                    } else {
                    $barber->update([
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
