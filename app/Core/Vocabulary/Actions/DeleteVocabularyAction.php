<?php
namespace App\Core\Vocabulary\Actions;

use App\Core\Vocabulary\Models\Vocabulary;

class DeleteVocabularyAction
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