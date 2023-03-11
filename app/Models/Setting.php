<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'main_url',
        'email',
        'description',
        'logo',
        'logo_medium',
        'logo_thumb',
        'link',
        'address',
        'phone',
        'twitter',
        'facebook',
        'skype',
        'linkedin',
        'g_plus',
        'youtube',
        'flickr',
        'pinterest',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
