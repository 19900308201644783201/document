<?php
namespace App\Core\Vocabulary\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Core\Vocabulary\Http\Requests\PostVocabularyRequest;
use App\Core\Vocabulary\Http\Requests\PutVocabularyRequest;
use App\Core\Vocabulary\Actions\CreateVocabularyAction;
use App\Core\Vocabulary\Actions\GetListVocabularyAction;
use App\Core\Vocabulary\Actions\EditVocabularyAction;
use App\Core\Vocabulary\Actions\UpdateVocabularyAction;
use App\Core\Vocabulary\Actions\DeleteVocabularyAction;
use App\Core\Vocabulary\Actions\ShowVocabularyAction;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the Vocabulary
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(GetListVocabularyAction::class)->handle();
    }

    /**
     * Store a newly created resourse in storage
     *
     * @param PostVocabularyRequest $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostVocabularyRequest $request)
    {
        return app(CreateVocabularyAction::class)->handle($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int                  $id      Id of vocabulary
     * @param PutVocabularyRequest $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, PutVocabularyRequest $request)
    {
        return app(UpdateVocabularyAction::class)->handle($id, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id Id of vocabulary
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return app(ShowVocabularyAction::class)->handle($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id Id of vocabulary
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return app(DeleteVocabularyAction::class)->handle($id);
    }

    /**
     * Show the form for editing the specified resource
     *
     * @param int $id Id of vocabulary
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return app(EditVocabularyAction::class)->handle($id);
    }
}
