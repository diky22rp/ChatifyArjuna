<?php

namespace ChatifyArjuna\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'Favorites';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'favorite_id',
        'created_at',
        'updated_at',
    ];
}