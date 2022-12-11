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
            empty($request->type) || empty(config('global-search.type')::tryFrom($request->type)),
            424,
            __('Unknown search type')
        );

        abort_if(
            empty($request->keyword),
            404,
            __('Please provide search keyword')
        );

        return search(
            config('global-search.type')::tryFrom($request->type),
            $request->keyword,
            $request->query('paginate', false)
        );
    }
}
