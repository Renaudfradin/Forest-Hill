<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contremarque(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
