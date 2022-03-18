<?php

namespace Joy\VoyagerReplaceKeyword\Http\Controllers;

use Joy\VoyagerReplaceKeyword\Http\Traits\ReplaceKeywordAction;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as TCGVoyagerBaseController;

class VoyagerBaseController extends TCGVoyagerBaseController
{
    use ReplaceKeywordAction;
}
