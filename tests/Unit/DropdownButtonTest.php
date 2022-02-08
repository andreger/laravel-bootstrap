<?php

namespace LaravelBootstrap\Tests\Unit;

use LaravelBootstrap\Tests\TestCase;

class DropdownButtonTest extends TestCase
{
    /** @test */
    public function render_dropdown_button()
    {
        $view = $this->blade(
            '<x-bs-dropdown-button />',
        );

        $view->assertSeeInOrder(['<button', 'dropdown', '</button>'], false);
    }
}
