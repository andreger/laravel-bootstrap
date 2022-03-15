<?php


namespace Andreger\Bootstrap\Tests\Unit;


use Andreger\Bootstrap\Tests\TestCase;

class NavbarTest extends TestCase
{
    /** @test */
    public function render_navbar()
    {
        $view = $this->blade(
            '<x-bs-navbar />'
        );

        $view->assertSeeInOrder(['<nav', '</nav>'], false);
    }
}
