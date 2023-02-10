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

    public function windows()
    {
        return $this->hasMany(Window::class, 'room_id', 'id');
    }

    public function doors()
    {
        return $this->belongsToMany(Door::class, "room_door", "room_id", 'id');
    }

    public function house()
    {
        return $this->belongsTo(House::class, 'house_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }

}
