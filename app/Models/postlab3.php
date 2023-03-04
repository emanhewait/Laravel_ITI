<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postlab3 extends Model
{
    use HasFactory;
    function creator()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
