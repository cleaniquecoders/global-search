<?php

use CleaniqueCoders\GlobalSearch\Enums\SearchType;
use CleaniqueCoders\GlobalSearch\Http\Controllers\SearchController;

return [
    /**
     * List of available search types. You need to extend the class of Spatie\Enum\Laravel\Enum
     */
    'type' => SearchType::class,

    /**
     * Middleware use for the search URI. Default is auth.
     */
    'middleware' => 'auth',

    /**
     * URI used for the searching route. Default is /search.
     */
    'uri' => 'search',

    /**
     * Search Controller.
     */
    'controller' => SearchController::class,

    /**
     * Route name for the search.
     */
    'route_name' => 'search',
];
