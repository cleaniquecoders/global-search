<?php

namespace CleaniqueCoders\GlobalSearch\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        abort_if(
            empty($request->type) || empty(config('model_type')::tryFrom($request->type)),
            404,
            __('Unknown search type')
        );

        abort_if(
            empty($request->search),
            404,
            __('Please provide search keyword')
        );

        return search(
            config('model_type')::tryFrom($request->type),
            $request->search,
            $request->query('paginate', false)
        );
    }
}
