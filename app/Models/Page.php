<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use \Z3d0X\FilamentFabricator\Models\Page as BasePage;
class Page extends BasePage implements HasMedia
{
    use InteractsWithMedia;
}
