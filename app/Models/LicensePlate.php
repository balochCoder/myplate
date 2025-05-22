<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LicensePlate extends Model
{
    use SoftDeletes;

    public function emirate(): BelongsTo
    {
        return $this->belongsTo(Emirate::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'price' => Money::class
        ];
    }

}
