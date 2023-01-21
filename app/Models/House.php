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
        "id"   => 'string',
        "address_id" => 'string',
        "owner_id" => 'string',
    ];
    protected $fillable = [
        "id",
        "address_id",
        "owner_id",
        "created_at",
        "updated_at",
    ];
}
