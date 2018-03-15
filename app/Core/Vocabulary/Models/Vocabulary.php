<?php
namespace App\Core\Vocabulary\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vocabulary';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'word',
        'word_type',
        'pronunciation',
        'vn_mean',
        'en_mean',
        'description',
        'example',
    ];
}

