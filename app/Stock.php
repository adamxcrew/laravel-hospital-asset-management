<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Stock extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'stocks';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'hospital_id',
        'asset_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'current_stock',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id');

    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');

    }
}
