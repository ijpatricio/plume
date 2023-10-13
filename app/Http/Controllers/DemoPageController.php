<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Http\Controllers\PageController;
use Z3d0X\FilamentFabricator\Models\Page;

class DemoPageController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws \Exception
     */
    public function __invoke(Request $request, string $id)
    {
        $page = FilamentFabricator::getPageModel()::query()->find($id);

        $fabricatorController = app(PageController::class);

        return $fabricatorController($page);
    }
}
