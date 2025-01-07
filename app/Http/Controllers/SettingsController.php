<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function settings(Request $request, $store = '')
    {
        if ($store == '') {
            $pageTitle = 'Application Settings';
            return view('admin.general-settings', compact('pageTitle'));
        } else {

            if ($request->hasFile('app_logo')) {

                $request->validate([
                    'app_logo' => 'mimes:jpg,jpeg,png,svg,gif,webp|file'
                ]);

                $image              = $request->file('app_logo');
                $app_logo           = 'app_logo.' . $image->getClientOriginalExtension();
                $image->move(storage_path(path: 'app/public/media/system/'), $app_logo);

                $data = array();
                $data['value']      = $app_logo;
                $data['updated_at'] = Carbon::now();
                if (Setting::where('name', 'app_logo')->exists()) {
                    Setting::where('name', '=', 'app_logo')->update($data);
                } else {
                    $data['name']           = 'app_logo';
                    $data['created_at']     = Carbon::now();
                    Setting::insert($data);
                }

                Cache::put('app_logo', $app_logo);
            }

            if ($request->hasFile('app_logo_white')) {

                $request->validate([
                    'app_logo_white' => 'mimes:jpg,jpeg,png,svg,gif,webp|file'
                ]);

                $image              = $request->file('app_logo_white');
                $app_logo_white     = 'app_logo_white.' . $image->getClientOriginalExtension();
                $image->move(storage_path(path: 'app/public/media/system/'), $app_logo_white);

                $data = array();
                $data['value']      = $app_logo_white;
                $data['updated_at'] = Carbon::now();
                if (Setting::where('name', 'app_logo_white')->exists()) {
                    Setting::where('name', '=', 'app_logo_white')->update($data);
                } else {
                    $data['name']           = 'app_logo_white';
                    $data['created_at']     = Carbon::now();
                    Setting::insert($data);
                }

                Cache::put('app_logo_white', $app_logo_white);
            }

            if ($request->hasFile('favicon')) {
                
                $request->validate([
                    'favicon' => 'mimes:jpg,jpeg,png,svg,gif,webp|file'
                ]);

                $image              = $request->file('favicon');
                $favicon           = 'favicon.' . $image->getClientOriginalExtension();
                $image->move(storage_path(path: 'app/public/media/system/'), $favicon);

                $data = array();
                $data['value']      = $favicon;
                $data['updated_at'] = Carbon::now();
                if (Setting::where('name', 'favicon')->exists()) {
                    Setting::where('name', '=', 'favicon')->update($data);
                } else {
                    $data['name']           = 'favicon';
                    $data['created_at']     = Carbon::now();
                    Setting::insert($data);
                }

                Cache::put('favicon', $favicon);
            }

            if ($request->hasFile('coverbg')) {
                
                $request->validate([
                    'coverbg' => 'mimes:jpg,jpeg,png,svg,gif,webp|file'
                ]);

                $image              = $request->file('coverbg');
                $coverbg           = 'coverbg.' . $image->getClientOriginalExtension();
                $image->move(storage_path(path: 'app/public/media/system/'), $coverbg);

                $data = array();
                $data['value']      = $coverbg;
                $data['updated_at'] = Carbon::now();
                if (Setting::where('name', 'coverbg')->exists()) {
                    Setting::where('name', '=', 'coverbg')->update($data);
                } else {
                    $data['name']           = 'coverbg';
                    $data['created_at']     = Carbon::now();
                    Setting::insert($data);
                }

                Cache::put('coverbg', $coverbg);
            }

            if (! $request->app_logo && ! $request->app_logo_white && ! $request->favicon && ! $request->coverbg) {
                foreach ($_POST as $key => $value) {
                    if ($key == '_token') {
                        continue;
                    }

                    $data = array();
                    $data['value']      = $value;
                    $data['updated_at'] = Carbon::now();
                    if (Setting::where('name', $key)->exists()) {
                        Setting::where('name', '=', $key)->update($data);
                    } else {
                        $data['name']           = $key;
                        $data['created_at']     = Carbon::now();
                        Setting::insert($data);
                    }

                    Cache::put($key, $value);
                }
            }

            if (!$request->ajax()) {
                flash('Settings successfully updated', 'success');
                return Redirect::route('settings.update')->with('success', 'Saved successfully');
            } else {
                flash('Settings successfully updated', 'success');
                return response()->json(['result' => 'success', 'action' => 'update', 'message' => 'Saved successfully']);
            }
        }
    }
}
