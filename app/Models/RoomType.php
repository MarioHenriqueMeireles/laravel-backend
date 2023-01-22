<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use Uuids;

    protected $table = "room_types";
    protected $dateFormat = "Y-m-d H:i:s.u";
    public $incrementing = false;
    protected $casts = [
        "id"          => "string",
        "name"        => "string",
        "description" => "string"
    ];
    protected $fillable = [
        "id",
        "name",
        "description",
        "created_at",
        "updated_at",
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class, "house_id", "id");
    }
}
