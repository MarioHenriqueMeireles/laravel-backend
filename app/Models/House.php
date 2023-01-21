<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use Uuids;

    protected $table = 'houses';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    public $incrementing = false;
    protected $casts = [
        "id"         => 'string',
        "address_id" => 'string',
        "owner_id"   => 'string',
    ];
    protected $fillable = [
        "id",
        "address_id",
        "owner_id",
        "created_at",
        "updated_at",
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'house_id', 'id');
    }

    public function doors()
    {
        return $this->hasManyThrough(Door::class, Room::class, 'house_id', 'room_id', 'id', 'id');
    }

    public function windows()
    {
        return $this->hasManyThrough(Window::class, Room::class, 'house_id', 'room_id', 'id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(Address::class, 'owner_id', 'id');
    }
}
