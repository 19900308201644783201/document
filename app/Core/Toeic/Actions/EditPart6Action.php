<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Vocabulary;

class EditPart6Action
{
    public function handle($id)
    {
        return Vocabulary::find($id);
    }
}