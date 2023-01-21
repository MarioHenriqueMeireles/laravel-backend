<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class RoomDoor extends Model
{
    use Uuids;
    protected $table = 'room_door';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    public $incrementing = false;
    protected $casts = [
        "id"      => 'string',
        'room_id' => 'string',
        "door_id" => 'string'
    ];
    protected $fillable = [
        "id",
        "room_id",
        "door_id",
        "created_at",
        "updated_at",
    ];
}
