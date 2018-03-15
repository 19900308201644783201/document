<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;

class ShowVocabularyAction
{
    public function handle(int $id)
    {
        return Vocabulary::find($id);
    }
}