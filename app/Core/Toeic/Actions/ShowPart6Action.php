<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Vocabulary;

class ShowPart6Action
{
    public function handle(int $id)
    {
        return Vocabulary::find($id);
    }
}