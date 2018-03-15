<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Part6Question;

class GetListPart6Action
{
    public function handle()
    {
        return Part6Question::with('part6Answers')->orderBy('id', 'DESC')->get();
    }
}