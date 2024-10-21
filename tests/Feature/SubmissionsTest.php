<?php

use App\Models\Form;
use Laravel\Sanctum\Sanctum;

it('only allows submissions from forms with api key and correct ability', function () {
    $form = Form::factory()->create();
    Sanctum::actingAs($form, ['other']);

    $this->postJson(route('api.forms.store'), [
        'data' => [
            'name' => 'John Doe',
        ],
    ])->assertForbidden();

    Sanctum::actingAs($form, ['submit']);

    $this->postJson(route('api.forms.store'), [
        'data' => [
            'name' => 'John Doe',
        ],
    ])->assertCreated();

    $this->assertDatabaseHas('forms', [
        'id' => $form->id,
        'submissions_count' => 1,
    ]);
});
