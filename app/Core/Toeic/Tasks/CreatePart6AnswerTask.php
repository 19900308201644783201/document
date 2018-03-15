<?php
namespace App\Core\Toeic\Tasks;

use Carbon\Carbon;
use App\Core\Toeic\Models\Part6Answer;

class CreatePart6AnswerTask
{
    public function handle($questionId, array $data)
    {
        $answers = array_map(function ($item) use ($questionId) {
            $item['toeic_part_6_question_id'] = $questionId;
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            return $item;
        }, $data);
        return Part6Answer::insert($answers);
    }
}