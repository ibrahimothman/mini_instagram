<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profiles/NXae8H3zpMXxtpr2WphWPQ21f5X5t2ia5A7fMB7z.png';
        return '/storage/' . $imagePath;


    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
