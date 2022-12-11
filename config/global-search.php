<?php

use CleaniqueCoders\GlobalSearch\Enums\SearchType;
use CleaniqueCoders\GlobalSearch\Http\Controllers\SearchController;

return [
    'model_type' => SearchType::class,
    'middleware' => 'auth',
    'uri' => 'search',
    'controller' => SearchController::class,
    'route_name' => 'search',
];
