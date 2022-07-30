<?php

use App\Models\Book;
use App\Models\User;
use function Pest\Laravel\actingAs;

it('create a book for a user', function () {
    expect(Book::all())->toHaveCount(0);

    actingAs(User::factory()->create())->post('books', [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'published_year' => 1925,
        'description' => 'The Great Gatsby is a 1925 novel written by F. Scott Fitzgerald',
        'price' => 10.00,
    ])->assertOk();

    expect(Book::all())->toHaveCount(1);

    expect(Book::all())->toBeInstanceOf(Book::class);

    expect(Book::first()->title)->toBeString()->not->toBeEmpty();
});
