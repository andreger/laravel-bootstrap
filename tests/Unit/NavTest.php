<?php

namespace Andreger\Bootstrap\Tests\Unit;

use Andreger\Bootstrap\Tests\TestCase;

class NavTest extends TestCase
{
    /** @test */
    public function render_nav()
    {
        $view = $this->blade(
            '<x-bs-nav />',
        );

        $view->assertSeeInOrder(['<ul', '</ul>'], false);
    }

    /** @test */
    public function render_tab()
    {
        $view = $this->blade(
            '<x-bs-tab />',
        );

        $view->assertSeeInOrder(['<ul', 'nav-tabs', '</ul>'], false);
    }

    /** @test */
    public function render_nav_pill()
    {
        $view = $this->blade(
            '<x-bs-nav-pill />',
        );

        $view->assertSeeInOrder(['<ul', 'nav-pills', '</ul>'], false);
    }

    /** @test */
    public function render_vertical_nav()
    {
        $view = $this->blade(
            '<x-bs-vertical-nav />',
        );

        $view->assertSeeInOrder(['<ul', 'flex-column', '</ul>'], false);
    }
}
