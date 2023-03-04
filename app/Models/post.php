<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'postlab3s';
    protected $perPage = 5;
    public $timestamps = false;
    function creator()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
