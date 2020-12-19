<?php

use App\Models\Setting;

    if (!function_exists('getSettingGroup')) {
        function getSettingGroup($groups)
        {
            $result = Setting::where('groups', $groups)->orderBy('id', 'asc')->get();
            if ($result) {
                return $result;
            } else {
                return [];
            }
        }
    }
    if (!function_exists('multiexplode')) {
        function multiexplode ($delimiters,$data) {
            $MakeReady = str_replace($delimiters, $delimiters[0], $data);
            $Return    = explode($delimiters[0], $MakeReady);
            return  $Return;
        }
    }
