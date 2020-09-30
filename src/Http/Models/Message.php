<?php

namespace ChatifyArjuna\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'Messages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type',
        'from_id',
        'to_id',
        'body',
        'attachment',
        'seen',
        'created_at',
        'updated_at',
    ];
}
