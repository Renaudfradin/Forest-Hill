<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'activitys' => 'array',
    ];

    public function activitys(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
