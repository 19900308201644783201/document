<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;
use App\Core\Vocabulary\Http\Requests\PostVocabularyRequest;

class UpdateVocabularyAction
{
    public function handle(int $id, PostVocabularyRequest $request)
    {
        return Vocabulary::whereId($id)->update(array_except($request->all, ['id']));   
    }
}