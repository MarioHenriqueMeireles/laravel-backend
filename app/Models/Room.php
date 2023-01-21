<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use Uuids;
    protected $table = 'rooms';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    public $incrementing = false;
    protected $casts = [
        "id"           => 'string',
        'house_id'     => 'string',
        'room_type_id' => 'string',
    ];
    protected $fillable = [
        "id",
        "house_id",
        "room_type_id",
        "created_at",
        "updated_at",
    ];
}
