<?php
namespace App\Core\Toeic\Models;

use Illuminate\Database\Eloquent\Model;

class Part6Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'toeic_part_6_question';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'translate',
        'answer',
        'explain',
    ];

    /**
     * Get the part6Answers for the part6Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function part6Answers()
    {
        return $this->hasMany(Part6Answer::class, 'toeic_part_6_question_id');
    }
}

