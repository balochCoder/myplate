<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emirate extends Model
{
    use SoftDeletes;

    public function licensePlates(): HasMany
    {
        return $this->hasMany(LicensePlate::class);
    }
}
