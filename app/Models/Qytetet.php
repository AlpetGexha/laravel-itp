<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Qytetet extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    protected $table = 'qytetet';

    public function qytetaret(): HasMany
    {
        return $this->hasMany(Qytetaret::class, 'qyteti_id');
    }

    public function qytetaretMale()
    {
        return $this->hasMany(Qytetaret::class, 'qyteti_id')->where('gjinia', 'M');
    }

    public function qytetaretFemale()
    {
        return $this->hasMany(Qytetaret::class, 'qyteti_id')->where('gjinia', 'F');
    }
}
