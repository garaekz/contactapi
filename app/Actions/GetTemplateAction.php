<?php

namespace App\Actions;

use App\Models\FormTemplate;

class GetTemplateAction
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  array<string, mixed>  $data
     */
    public function execute(array $data): FormTemplate
    {
        $keys = $fixedKeys = array_keys($data);
        sort($keys);
        $hash = md5(serialize($keys));

        $template = FormTemplate::firstOrCreate(compact('hash'), ['fields' => $fixedKeys]);

        return $template;
    }
}
