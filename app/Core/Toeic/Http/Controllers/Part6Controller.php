<?php
namespace App\Core\Toeic\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Core\Toeic\Http\Requests\PostPart6Request;
use App\Core\Toeic\Http\Requests\PutPart6Request;
use App\Core\Toeic\Actions\CreatePart6Action;
use App\Core\Toeic\Actions\GetListPart6Action;
use App\Core\Toeic\Actions\EditPart6Action;
use App\Core\Toeic\Actions\UpdatePart6Action;
use App\Core\Toeic\Actions\DeletePart6Action;
use App\Core\Toeic\Actions\ShowPart6Action;

class Part6Controller extends Controller
{
    /**
     * Display a listing of the Part6
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(GetListPart6Action::class)->handle();
    }

    /**
     * Store a newly created resourse in storage
     *
     * @param PostPart6Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostPart6Request $request)
    {
        return app(CreatePart6Action::class)->handle($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int             $id      Id of Part6
     * @param PutPart6Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, PutPart6Request $request)
    {
        return app(UpdatePart6Action::class)->handle($id, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id Id of Part6
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return app(ShowPart6Action::class)->handle($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id Id of Part6
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return app(DeletePart6Action::class)->handle($id);
    }

    /**
     * Show the form for editing the specified resource
     *
     * @param int $id Id of Part6
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return app(EditPart6Action::class)->handle($id);
    }
}
