<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'title',
    //     'bio',
    //     'url',
    //     'image'
    // ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/3qaux8MpBY79XSAWYdh8hbSIdvwkCXJE0C7QjMVI.png';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
