<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function render($templateName, $data = [])
    {
        $template = Template::where('name', $templateName)
            ->where('is_active', true)
            ->first();

        if (!$template) {
            return view('frontend.templates.default', $data);
        }

        return view('frontend.templates.' . $template->view_path, array_merge($data, [
            'template' => $template
        ]));
    }
}
