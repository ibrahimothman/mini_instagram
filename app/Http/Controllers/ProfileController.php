<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function index(User $user)
    {

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        return view('profile.index',[
            'user' => $user,
            'follows' => $follows
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profile.edit',compact('user'));
    }

    public function update(User $user)
    {

        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title' => '',
            'description' => '',
            'url' => '',
            'image' => ''
        ]);

        if(request('image')) {
            $imagePath = request('image')->store('profiles', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(200, 200);
            $image->save();
            $data['image'] = $imagePath;
        }



        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
