<?php

use CleaniqueCoders\GlobalSearch\Http\Controllers\SearchController;

return [
    'model_type' => \App\Enums\SearchType::class,
    'middleware' => 'auth',
    'uri' => 'search',
    'controller' => SearchController::class,
    'route_name' => 'search',
];
