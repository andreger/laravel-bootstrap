<?php

namespace LaravelBootstrap\Tests\Unit;

use LaravelBootstrap\Tests\TestCase;

class ProgressTest extends TestCase
{
    /** @test */
    public function render_minimal_component()
    {
        $view = $this->blade(
            '<x-bs-progress />',
        );

        $view->assertSeeInOrder(['<div', 'progress', 'progress-bar'], false);
    }

    /** @test */
    public function render_value()
    {
        $view = $this->blade(
            '<x-bs-progress value="50" />',
        );

        $view->assertSeeInOrder(['style', 'width', '50%'], false);
    }

    /** @test */
    public function render_text()
    {
        $view = $this->blade(
            '<x-bs-progress text="Text Test" />',
        );

        $view->assertSeeInOrder(['>', 'Text Test', '<'], false);
    }

    /** @test */
    public function render_class()
    {
        $view = $this->blade(
            '<x-bs-progress class="mt-3" />',
        );

        $view->assertSeeInOrder(['class', 'mt-3'], false);
    }

    /** @test */
    public function render_height()
    {
        $view = $this->blade(
            '<x-bs-progress height="1" />',
        );

        $view->assertSeeInOrder(['style', 'height', '1px'], false);
    }

    /** @test */
    public function render_striped()
    {
        $view = $this->blade(
            '<x-bs-progress striped="true" />',
        );

        $view->assertSee('progress-bar-striped');
    }

    /** @test */
    public function render_not_striped()
    {
        $view = $this->blade(
            '<x-bs-progress />',
        );

        $view->assertDontSee('progress-bar-striped');
    }

    /** @test */
    public function render_animated()
    {
        $view = $this->blade(
            '<x-bs-progress animated="true" />',
        );

        $view->assertSee('progress-bar-animated');
    }

    /** @test */
    public function render_not_animated()
    {
        $view = $this->blade(
            '<x-bs-progress />',
        );

        $view->assertDontSee('progress-bar-animated');
    }
}
