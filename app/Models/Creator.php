<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $table = 'creators';

    protected $fillable = [
        'full_name',
        'instagram_followed',
        'follower_count',
        'content_niche',
        'state',
        'district',
        'commercials',
        'instagram_link',
        'contact_number',
        'ip_address',
        'status',
        'notes',
    ];
}
