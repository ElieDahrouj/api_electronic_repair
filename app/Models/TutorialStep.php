<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialStep extends Model
{
    use HasFactory;

    public function replacementTutorial(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ReplacementTutorial::class, 'id_replacement_tutorial');
    }

    public function tutorialPicture(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TutorialPicture::class);
    }
}
