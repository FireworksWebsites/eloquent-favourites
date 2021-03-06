<?php
namespace Mintbridge\EloquentFavourites\Test;

use Mintbridge\EloquentFavourites\FavouritesManager;
use PHPUnit\Framework\TestCase;

class FavouritesManagerTest extends TestCase
{
    /**
     * @var \Mintbridge\EloquentFavourites\FavouritesManager
     */
    protected $favourites;

    public function setUp(): void
    {
        $this->favourites = new FavouritesManager();
    }

    /**
     * @test
     */
    public function it_provides_public_favouriting_methods()
    {
        $this->assertTrue(
            method_exists($this->favourites, 'toggle'),
            'Class does not have method toggle'
        );
        $this->assertTrue(
            method_exists($this->favourites, 'add'),
            'Class does not have method add'
        );
        $this->assertTrue(
            method_exists($this->favourites, 'remove'),
            'Class does not have method remove'
        );
    }
}
