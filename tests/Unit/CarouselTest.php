<?php

namespace Andreger\Bootstrap\Tests\Unit;

use Andreger\Bootstrap\Tests\TestCase;

class CarouselTest extends TestCase
{
    private $slides = [
        [
            'image' => 'image1.jpg',
            'title' => 'Title 1',
            'description' => 'Description 1',
        ],
        [
            'image' => 'image2.jpg',
            'title' => 'Title 2',
            'description' => 'Description 2',
        ]
    ];

    /** @test */
    public function render_minimal_component()
    {
        $view = $this->blade(
            '<x-bs-carousel />',
        );

        $view->assertSeeInOrder(['<div', 'carousel', '</div>'], false);
    }

    /** @test */
    public function render_slides()
    {
        $view = $this->blade(
            '<x-bs-carousel :slides="$slides" />',
            [
                'slides' => $this->slides,
            ]
        );

        $view->assertSeeInOrder(['carousel-item', 'img', 'image1.jpg'], false);
    }

    /** @test */
    public function disable_controls()
    {
        $view = $this->blade(
            '<x-bs-carousel :controls="false" />'
        );

        $view->assertDontSee('carousel-control');
    }

    /** @test */
    public function disable_indicators()
    {
        $view = $this->blade(
            '<x-bs-carousel :indicators="false" />'
        );

        $view->assertDontSee('carousel-indicators');
    }

    /** @test */
    public function enable_crossfade()
    {
        $view = $this->blade(
            '<x-bs-carousel :crossfade="true" />'
        );

        $view->assertSee('carousel-fade');
    }

    /** @test */
    public function disable_touch()
    {
        $view = $this->blade(
            '<x-bs-carousel :touch="false" />'
        );

        $view->assertSee("data-bs-touch='false'", false);
    }

    /** @test */
    public function dark()
    {
        $view = $this->blade(
            '<x-bs-carousel-dark />'
        );

        $view->assertSeeInOrder(['<div', 'carousel', 'carousel-dark', '</div>'], false);
    }
}
