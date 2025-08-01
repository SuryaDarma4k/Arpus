<?php

namespace App\Http\Controllers;

use App\Models\PageComponents;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function render(PageComponents $component)
    {
        $componentType = $component->component_type;
        $componentData = $component->component_data;
        $viewPath = 'frontend.components.' . str_replace('_', '-', $componentType);

        if (!view()->exists($viewPath)) {
            $viewPath = 'frontend.components.default';
        }

        return view($viewPath, [
            'component' => $component,
            'data' => $componentData
        ]);
    }
}
