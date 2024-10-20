<?php

use App\Models\Form;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('test:create-token', function () {
    $form = Form::first();

    if (! $form) {
        $form = Form::factory()->create();
    }

    $token = $form->createToken('test-token', ['submit']);
    $this->comment('Token: '.$token->plainTextToken);
})->purpose('Create a new token');
