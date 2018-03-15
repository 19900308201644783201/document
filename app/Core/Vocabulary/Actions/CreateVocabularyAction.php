<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;
use App\Core\Vocabulary\Http\Requests\PostVocabularyRequest;

class CreateVocabularyAction
{
    public function handle(PostVocabularyRequest $request)
    {
        return Vocabulary::create($request->all());
    }
}