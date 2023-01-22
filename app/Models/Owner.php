<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use Uuids;

    protected $table = 'owners';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    public $incrementing = false;
    protected $casts = [
        "id"   => 'string',
        "name" => 'string',
    ];
    protected $fillable = [
        "id",
        "name",
        "created_at",
        "updated_at",
    ];

    public function houses()
    {
        return $this->hasMany(House::class, 'address_id', 'id');
    }
}
