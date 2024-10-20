<?php

use App\Models\Form;
use Laravel\Sanctum\Sanctum;

it('only allows submissions from forms with api key and correct ability', function () {
    $form = Form::factory()->create();
    Sanctum::actingAs($form, ['other']);

    $this->postJson(route('api.forms.store'), [
        'data' => [
            'name' => 'John Doe',
            'email' => 'test@test.io',
        ],
    ])->assertForbidden();

    Sanctum::actingAs($form, ['submit']);

    $this->postJson(route('api.forms.store'), [
        'fields' => [
            'name' => 'John Doe',
        ],
    ])->assertOk();
});
