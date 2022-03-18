<?php

namespace Joy\VoyagerReplaceKeyword\Http\Traits;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

trait ReplaceKeywordAction
{
    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      ReplaceKeyword DataTable our Data Type (B)READ
    //
    //****************************************

    public function replaceKeyword(Request $request)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        // Your magic here

        return redirect()->back()->with([
            'message'    => __('joy-voyager-replace-keyword::generic.successfully_replace_keyworded') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }
}
