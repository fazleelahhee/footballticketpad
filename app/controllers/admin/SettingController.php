<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Setting;
use Notification;
use Config;
use Options;
use DB;

class SettingController extends BaseController {

    public function index() {
        $setting = Setting::findOrFail(1);
        return View::make('backend.setting.setting', compact('setting'))
            ->with('active', 'settings')
            ->with('menu', 'settings/website');
    }

    public function generalSettings() {
        $allowedOptions = Config::get('bondcms.options');
        $options = DB::table('options')->whereIn('option', $allowedOptions)->get();

        foreach($options as $op) {
            View::share($op->option, $op->value);
        }
        return View::make('backend.setting.general')
            ->with('active', 'settings')
            ->with('menu', 'settings/general');
    }

    public function save() {
        $setting = Setting::findOrFail(1);
        $setting->fill(Input::all())->save();

        Notification::success('Settings was successfully updated');
        return Redirect::route('admin.settings');
    }

    public function saveOptions() {
        $input = Input::all();
        $allowedOptions = Config::get('bondcms.options');
        foreach($allowedOptions as $val) {
            if(isset($input[$val])) {
                $option = $input[$val];
                $optionObject = new Options();
                $optionObject = $optionObject->where('option', '=', $val)->first();
                if ($optionObject) {
                    $optionObject->fill([
                        'option' => $val,
                        'value' => $option
                    ])->save();
                } else {
                    $optionObject = new Options();
                    $optionObject->fill([
                        'option' => $val,
                        'value' => $option
                    ])->save();
                }
            }
        }


        Notification::success('Settings was successfully updated');
        return Redirect::route('admin.settings.general');
    }
}

