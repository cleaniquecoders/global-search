<?php

use CleaniqueCoders\GlobalSearch\Facades\GlobalSearch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertTrue;

uses(RefreshDatabase::class);

beforeEach(function () {
    GlobalSearch::routes();
});

it('has search helper', function () {
    assertTrue(function_exists('search'));
})->group('helpers');

it('has search route', function () {
    assertTrue(
        ! empty(route(config('global-search.route_name')))
    );
})->group('helpers');

it('can search user', function () {
    // should return non-existent users
    // should return valid user
    // should abort if no keyword
    // should abort if non-existence search type
    // shoudl return paginated / first
    assertTrue(true);
})->group('helpers');
