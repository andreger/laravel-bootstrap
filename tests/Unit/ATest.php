<?php


use LaravelBootstrap\Tests\TestCase;

class ATest extends TestCase
{

    /** @test */
    public function render_minimal_component()
    {
        $view = $this->blade(
            '<x-bs-a />',
        );

        $view->assertSeeInOrder(['<a', '</a>'], false);
    }
}
