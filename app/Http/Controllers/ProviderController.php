<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::all();
        return view('backend.providers.list', compact('providers'));
    }


    public function create()
    {
        return view('backend.providers.create');
    }


    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->name = $request->input('name');
        $provider->image = $request->input('image');
        $provider->avatar = $request->input('avatar');
        $provider->age = $request->input('age');
        $provider->birth_day = $request->input('birth_day');
        $provider->gender = $request->input('gender');
        $provider->phone = $request->input('phone');
        $provider->address = $request->input('address');
        $provider->city = $request->input('city');
        $provider->national = $request->input('national');
        $provider->height = $request->input('height');
        $provider->weight = $request->input('weight');
        $provider->favourite = $request->input('favourite');
        $provider->note = $request->input('note');
        $provider->social_network = $request->input('social_network');
        $provider->save();
        $message = "Tạo mới thông tin $request->name thành công";
        session::flash('success', $message);
        return redirect()->route('providers.index');
    }


    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('backend.providers.edit', compact('provider'));
    }


    public function update(Request $request, $id)
    {
        $provider = Provider::findOrFail($id);
        $provider = new Provider();
        $provider->name = $request->input('name');
        $fileImage = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $provider->image = $fileImage;
        } else {
            $fileExtension = $fileImage->getClientOriginalExtension();
            $fileNameImage = $request->inputFileNameImage;
            $newFileImage = "$fileNameImage.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileImage);
            $provider->image = $newFileImage;
        }

        $fileAvatar = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $provider->avatar = $fileAvatar;
        } else {
            $fileExtension = $fileAvatar->getClientOriginalExtension();
            $fileNameAvatar = $request->inputFileNameAvatar;
            $newFileAvatar = "$fileNameAvatar.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileAvatar);
            $provider->avatar = $newFileAvatar;
        }
        $provider->age = $request->input('age');
        $provider->birth_day = $request->input('birth_day');
        $provider->gender = $request->input('gender');
        $provider->phone = $request->input('phone');
        $provider->address = $request->input('address');
        $provider->city = $request->input('city');
        $provider->national = $request->input('national');
        $provider->height = $request->input('height');
        $provider->weight = $request->input('weight');
        $provider->favourite = $request->input('favourite');
        $provider->note = $request->input('note');
        $provider->social_network = $request->input('social_network');
        $provider->save();
    }


    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();
        $message = "Xóa thông tin người dùng thành công!";
        session::flash('success', $message);
        return redirect()->view('providers.index');
    }
}
