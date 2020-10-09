<?php

namespace VCComponent\Laravel\Geography\Entities;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    const STATUS_PENDING = 2;
    const STATUS_ACTIVE = 1;

    protected $fillable = [
        'name',
        'type',
        'status',
        'area',
        'thumbnail',
        'content',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
