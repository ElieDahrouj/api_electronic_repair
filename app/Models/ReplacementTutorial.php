<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplacementTutorial extends Model
{
    use HasFactory;

    public function appliance(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Appliance::class, 'id_appliance','id');
    }

    public function tutorialStep(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TutorialStep::class,'id_replacement_tutorial', 'id');
    }
}
