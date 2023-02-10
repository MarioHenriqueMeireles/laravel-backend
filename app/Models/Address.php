<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use Uuids;

    protected $table = 'addresses';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    public $timestamps = true;
    public $incrementing = false;
    protected $casts = [
        "id"    => 'string',
        "local" => 'string',
    ];
    protected $fillable = [
        "id",
        "local",
        "created_at",
        "updated_at",
    ];

    public function houses()
    {
        return $this->hasMany(House::class, 'address_id', 'id');
    }
}
