<?php
namespace App\Core\Toeic\Models;

use Illuminate\Database\Eloquent\Model;

class Part6Answer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'toeic_part_6_answer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'index',
        'content',
        'type_word',
        'pronunciation',
        'meaning',
        'toeic_part_6_question_id',
    ];
}

