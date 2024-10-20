<?php

namespace App\Http\Controllers;

use App\Actions\GetTemplateAction;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Http\Resources\SubmissionResource;
use App\Models\Form;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Form $form, Request $request)
    {
        dd($form);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubmissionRequest $request, GetTemplateAction $templateAction)
    {
        $template = $templateAction->execute($request->data);
        $sub = Submission::create(['form_id' => auth()->id(), 'form_template_id' => $template->id, 'data' => $request->data]);

        return new SubmissionResource($sub);
    }

    /**
     * Display the specified resource.
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
