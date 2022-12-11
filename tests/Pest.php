<?php

use CleaniqueCoders\GlobalSearch\Tests\Models\User;
use CleaniqueCoders\GlobalSearch\Tests\TestCase;
use Illuminate\Support\Facades\Hash;

uses(TestCase::class)->in(__DIR__);

function login($user = null)
{
    return test()->actingAs($user ?? user());
}

function user($name = 'pest', $email = 'pest@test.com', $password = 'password')
{
    return User::updateOrCreate([
        'name' => $name,
        'email' => $email,
    ], [
        'password' => Hash::make($password),
    ]);
}

function remigrate()
{
    $migration = include __DIR__.'/database/migrations/2014_10_12_000000_create_users_table.php';
    $migration->down();
    $migration->up();
}
