<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        $data = [
            'setting' => $setting
        ];

        return view('dashboard.settings.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $validator = Validator::make(
            $request->all(), [
                'email' => 'email'
            ]
        );

        $validator->validate();

        if ($validator->fails()) {
            return redirect()->to(route('users.create'))
                ->withErrors($validator)
                ->withInput();
        }

        Setting::create([
            'title' => $request->title,
            'main_url' => $request->main_url,
            'email' => $request->email,
            'description' => $request->description,
            'logo' => $request->logo,
            'logo_medium' => $request->logo_medium,
            'logo_thumb' => $request->logo_thumb,
            'link' => $request->link,
            'address' => $request->address,
            'phone' => $request->phone,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'skype' => $request->skype,
            'linkedin' => $request->linkedin,
            'g_plus' => $request->g_plus,
            'youtube' => $request->youtube,
            'flickr' => $request->flickr,
            'pinterest' => $request->pinterest,
            'user_id' => $user->id
        ]);

        return redirect(route('settings.index'));
    }

    public function edit(Setting $setting)
    {
        return view('dashboard.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        /** @var User $user */
        $user = Auth::user();
        $data = $request->all();

        $setting->update($data, [
           'updated_at' => now(),
            'user_id' => $user->id
        ]);

        return redirect()->route('settings.index');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();

        return redirect()->back();
    }
}
