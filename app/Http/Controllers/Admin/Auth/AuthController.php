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

            // Remapping user role
            $remappedRole = $this->remapRole($user->role);

            $request->session()->put('user', [
                'id' => $user->id,
                'fullName' => $user->full_name,
                'email' => $user->email,
                'picture' => $user->picture,
                'role' => $remappedRole,
            ]);

            $user->last_login = Carbon::now();
            $user->save();

            return redirect(config('redirects.redirectIfAuth'));
        }

        return redirect()->back()->with('error', 'Wrong email / password');
    }

    public function logout(Request $request)
    {
        $request->session()->remove('user');
        return redirect(config('redirects.redirectIfUnAuth'));
    }

    private function remapRole($role)
    {
        if ($role) {

            $permission = $role->permission;
            $roles_code = [];
            $pages = [];

            foreach ($permission as $pr) {
                if ($pr->type === 'access') {
                    if ($pr->page->parentpage) {
                        $pages[$pr->page->parentpage->name]['parent'] = $pr->page->parentpage;
                        $pages[$pr->page->parentpage->name]['pages'][] = $pr->page;
                    } else {
                        $pages[] = $pr->page;
                    }
                };

                foreach ($permission as $p) {
                    $roles_code[] = $p->permission_code;
                }

            }

            $result = [
                'role' => $role,
                'permission' => $role->permission,
                'pages' => $pages,
                'roles_code' => $roles_code,
            ];

        }

        return $result;
    }
}
