<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Part6Answer;
use App\Core\Toeic\Models\Part6Question;
use App\Core\Toeic\Http\Requests\PostPart6Request;

class UpdatePart6Action
{
    public function handle(int $id, PostVocabularyRequest $request)
    {
        return Vocabulary::whereId($id)->update(array_except($request->all, ['id']));   
    }
}