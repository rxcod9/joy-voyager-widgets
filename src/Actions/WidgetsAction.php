<?php

namespace Joy\VoyagerWidgets\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use TCG\Voyager\Actions\AbstractAction;
use TCG\Voyager\Facades\Voyager;

class WidgetsAction extends AbstractAction
{
    public function getTitle()
    {
        return __('joy-voyager-widgets::generic.widgets');
    }

    public function getIcon()
    {
        return 'voyager-widgets';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'id'     => 'widgets_btn',
            'class'  => 'btn btn-primary',
            'target' => '_blank',
        ];
    }

    public function getDefaultRoute()
    {
        // return route('my.route');
    }

    public function shouldActionDisplayOnDataType()
    {
        return config('joy-voyager-widgets.enabled', true) !== false
            && isInPatterns(
                $this->dataType->slug,
                config('joy-voyager-widgets.allowed_slugs', ['*'])
            )
            && !isInPatterns(
                $this->dataType->slug,
                config('joy-voyager-widgets.not_allowed_slugs', [])
            );
    }

    public function massAction($ids, $comingFrom)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug(request());

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        Gate::authorize('browse', app($dataType->model_name));

        // Your macgic here

        return redirect()->back()->with([
            'message'    => __('joy-voyager-widgets::generic.successfully_widgetsed') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }

    protected function getSlug(Request $request)
    {
        if (isset($this->slug)) {
            $slug = $this->slug;
        } else {
            $slug = explode('.', $request->route()->getName())[1];
        }

        return $slug;
    }
}
