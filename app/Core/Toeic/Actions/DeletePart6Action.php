<?php
namespace App\Core\Toeic\Actions;

use App\Core\Toeic\Models\Vocabulary;

class DeletePart6Action
{
    /**
     * Delete Vocabulary Action 
     *
     * @param int $int Vocabulary Id
     *
     * @return void
     */
    public function handle(int $int)
    {
        return Vocabulary::destroy($id);
    }
}