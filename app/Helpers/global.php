<?php

use App\Lib\ClientInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (!function_exists('get_setting')) {
    function get_setting($settings, $name, $optional = '')
    {
        $row = $settings->firstWhere('name', $name);
        if ($row != null) {
            return $row->value;
        }
        return $optional;
    }
}

if (!function_exists('get_option')) {
    function get_option($name, $optional = '')
    {

        $value = Cache::get($name);

        if ($value == '') {
            $setting = DB::table('settings')->where('name', $name)->get();
            if (!$setting->isEmpty()) {
                $value = $setting[0]->value;
                Cache::put($name, $value);
            } else {
                $value = $optional;
            }
        }

        return $value;
    }
}

if (!function_exists('app_logo')) {
    function app_logo()
    {
        $appLogo = get_option('app_logo');

        if ($appLogo == '') {
            return asset('/uploads/default/logo.svg');
        }

        return asset('storage/media/system/' . $appLogo);
    }
}

if (!function_exists('app_logo_white')) {
    function app_logo_white()
    {
        $appLogo = get_option('app_logo_white');

        if ($appLogo == '') {
            return asset('/uploads/default/logo_white.svg');
        }

        return asset('storage/media/system/' . $appLogo);
    }
}

if (!function_exists('get_favicon')) {
    function get_favicon()
    {
        $favicon = get_option('favicon');

        if ($favicon == '') {
            return asset('/uploads/default/favicon.png');
        }

        return asset('storage/media/system/' . $favicon);
    }
}

if (!function_exists('get_coverbg')) {
    function get_coverbg()
    {
        $coverbg = get_option('coverbg');

        if ($coverbg == '') {
            return asset('/uploads/default/cover-bg.jpeg');
        }

        return asset('storage/media/system/' . $coverbg);
    }
}

if (!function_exists('profile_photo')) {
    function profile_photo()
    {
        return asset('storage/media/users/' . Auth::user()->profile_picture);
    }
}

function getRealIP() {
    $ip = $_SERVER["REMOTE_ADDR"];
    //Deep detect ip
    if (filter_var(@$_SERVER['HTTP_FORWARDED'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_FORWARDED'];
    }
    if (filter_var(@$_SERVER['HTTP_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    }
    if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    if (filter_var(@$_SERVER['HTTP_X_REAL_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    }
    if (filter_var(@$_SERVER['HTTP_CF_CONNECTING_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if ($ip == '::1') {
        $ip = '127.0.0.1';
    }

    return $ip;
}

function getIpInfo() {
    $ipInfo = ClientInfo::ipInfo();
    return $ipInfo;
}

function osBrowser() {
    $osBrowser = ClientInfo::osBrowser();
    return $osBrowser;
}