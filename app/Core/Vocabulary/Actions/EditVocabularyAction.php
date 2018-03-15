<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;

class EditVocabularyAction
{
    public function handle($id)
    {
        return Vocabulary::find($id);
    }
}