<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }

    public function replacementTutorial(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ReplacementTutorial::class, "id_appliance", "id");
    }
}
