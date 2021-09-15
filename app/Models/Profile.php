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
        $imagePath = ($this->image) ? $this->image : '/profile/yAudYSeGUBMqGJfXNkYwnlIvuamR1C5N1FlgcmDe.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
