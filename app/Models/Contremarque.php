<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contremarque extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class);
    }

    public function business(): HasOne
    {
        return $this->hasOne(Business::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
