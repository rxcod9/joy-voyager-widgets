<?php

namespace Joy\VoyagerWidgets\Http\Controllers;

use Joy\VoyagerWidgets\Http\Traits\WidgetsAction;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as TCGVoyagerBaseController;

class VoyagerBaseController extends TCGVoyagerBaseController
{
    use WidgetsAction;
}
