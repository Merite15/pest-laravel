<?php

use App\Models\User;

beforeAll(function () {
    dumpHelloWorld();
});

beforeEach(function () {
    User::factory(10)->create();
});

it('test name', function ($name) {
    expect($name)->toBeIn(['John', 'Jane', 'paul', 'henri']);
})->with('names');

it('ensures that 10 users are retuned', function () {
    expect(User::count())->toEqual(10);

    expect(User::all())->toHaveCount(10);
});

it('ensures that 10 users are created 2', function () {
    expect(User::count())->toEqual(10);

    expect(User::all())->toHaveCount(10);
});
