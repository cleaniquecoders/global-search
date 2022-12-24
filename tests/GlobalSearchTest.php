<?php

use CleaniqueCoders\GlobalSearch\Tests\Models\User;
use function PHPUnit\Framework\assertTrue;

it('has search helper', function () {
    assertTrue(function_exists('search'));
})->group('helpers');

it('has search route', function () {
    assertTrue(
        ! empty(route(config('global-search.route_name')))
    );
})->group('helpers');

it('abort if no type or invalid search type provided', function () {
    remigrate();
    login(User::first())
        ->get(route('search'))
        ->assertStatus(424);
})->group('helpers');

it('abort if no keyword provided', function () {
    remigrate();
    login(User::first())->get(
        route('search', [
            'type' => 'user',
        ])
    )->assertStatus(404);
})->group('helpers');

it('return no user', function () {
    remigrate();
    login(User::first())->get(
        route('search', [
            'type' => 'user',
            'keyword' => 'nothing',
        ])
    )
    ->assertStatus(200);
})->group('helpers');

it('return user', function () {
    remigrate();
    login(User::first())->get(
        route('search', [
            'type' => 'user',
            'keyword' => 'pest',
        ])
    )
    ->assertStatus(200);
})->group('helpers');

it('return paginated list users', function () {
    remigrate();
    User::factory(100)->create();
    $response = login(User::first())->get(
        route('search', [
            'type' => 'user',
            'keyword' => 'a',
            'paginate' => true,
        ])
    );

    $response->assertStatus(200);
    // any other way to test?
    assertTrue(isset($response->getData()->current_page));
})->group('helpers');

// it('can search user', function () {
//     // should return non-existent users
//     // should return valid user
//     // shoudl return paginated / first
//     assertTrue(true);
// })->group('helpers');
