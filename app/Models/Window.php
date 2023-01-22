<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Window extends Model
{
    use Uuids;

    protected $table = "windows";
    protected $dateFormat = "Y-m-d H:i:s.u";
    public $incrementing = false;
    protected $casts = [
        "id"          => "string",
        "room_id"     => "string",
        "description" => "string"
    ];
    protected $fillable = [
        "id",
        "room_id",
        "description",
        "created_at",
        "updated_at",
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, "house_id", "id");
    }
}
