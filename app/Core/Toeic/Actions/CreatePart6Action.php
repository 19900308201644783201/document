<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Part6Question;
use App\Core\Toeic\Models\Part6Answer;
use App\Core\Toeic\Tasks\CreatePart6AnswerTask;
use App\Core\Toeic\Http\Requests\PostPart6Request;

class CreatePart6Action
{
    public function handle(PostPart6Request $request)
    {
        $question = Part6Question::create($request->questions);
        $answer = app(CreatePart6AnswerTask::class)->handle($question->id, $request->answers);
        $question->part6_answers = $question->part6Answers;
        return $question;
    }
}