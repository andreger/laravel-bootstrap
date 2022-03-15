<?php

namespace Andreger\Bootstrap\Tests\Unit;

use Andreger\Bootstrap\Tests\TestCase;

class DropdownButtonTest extends TestCase
{
    /** @test */
    public function render_dropdown_button()
    {
        $view = $this->blade(
            '<x-bs-dropdown />',
        );

        $view->assertSeeInOrder(['<button', 'dropdown', '</button>'], false);
    }
}
