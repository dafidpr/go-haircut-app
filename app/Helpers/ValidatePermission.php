<?php

namespace App\Helpers;

use Exception;

class ValidatePermission {

    public static function code($code, $request)
    {
        if (!$code) throw Exception('Please provide a permission code');
        if (!in_array($code, $request->session()->get('user')['role']['roles_code'])) {
            return abort(403, "You don't have right permission to do / access this route !");
        }
    }

}