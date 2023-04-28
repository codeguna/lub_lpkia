<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'notes'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'id_question_group');
    }
}
