<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Setting;
use Notification;

class SettingController extends BaseController {

    public function index() {

        $setting = Setting::findOrFail(1);
        return View::make('backend.setting.setting', compact('setting'))
            ->with('active', 'settings')
            ->with('menu', 'settings/website');
    }

    public function generalSettings() {
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
}
