<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;

class GetListVocabularyAction
{
    public function handle()
    {
        return Vocabulary::orderBy('id', 'DESC')->get();
    }
}