<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function index(User $user)
    {
        return view('profile.index',[
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => '',
            'image' => ''
        ]);

        $imagePath = request('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(200,200);
        $image->save();

        $user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
