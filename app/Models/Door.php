<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use Uuids;

    protected $table = "doors";
    protected $dateFormat = "Y-m-d H:i:s.u";
    public $timestamps = true;
    public $incrementing = false;
    protected $casts = [
        "id"          => "string",
        "description" => "string",
    ];
    protected $fillable = [
        "id",
        "description",
        "created_at",
        "updated_at",
    ];

    public function room()
    {
        return $this->belongsToMany(Room::class, "room_door", "door_id", 'id');
    }

}
