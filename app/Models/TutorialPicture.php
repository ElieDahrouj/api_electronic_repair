<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialPicture extends Model
{
    use HasFactory;

    public function tutorialStep(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TutorialStep::class, 'id_tutorial_step');
    }
}
