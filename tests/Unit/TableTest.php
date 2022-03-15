<?php

namespace Andreger\Bootstrap\Tests\Unit;

use Andreger\Bootstrap\Tests\TestCase;

class TableTest extends TestCase
{
    /** @test */
    public function render_table()
    {
        $view = $this->blade(
            '<x-bs-table />',
        );

        $view->assertSeeInOrder(['<table', '</table>'], false);
    }

    /** @test */
    public function render_empty_table()
    {
        $view = $this->blade(
            '<x-bs-table :data="$data" />',
            ['data' => []]
        );

        $view->assertSeeInOrder(['<table', '</table>'], false);
    }

    /** @test */
    public function render_empty_table_has_head()
    {
        $view = $this->blade(
            '<x-bs-table :data="$data" :hasHead="true" />',
            ['data' => []]
        );

        $view->assertSeeInOrder(['<table', '</table>'], false);
    }

    /** @test */
    public function render_empty_table_has_foot()
    {
        $view = $this->blade(
            '<x-bs-table :data="$data" :hasFoot="true" />',
            ['data' => []]
        );

        $view->assertSeeInOrder(['<table', '</table>'], false);
    }

    /** @test */
    public function render_caption()
    {
        $view = $this->blade(
            '<x-bs-table :caption="true" />',
            ['data' => []]
        );

        $view->assertSeeInOrder(['<table', '<caption>', '</caption>', '</table>'], false);
    }

    /** @test */
    public function render_danger()
    {
        $view = $this->blade(
            '<x-bs-table-danger />',
        );

        $view->assertSeeInOrder(['<table', 'table-danger', '</table>'], false);
    }

    /** @test */
    public function render_dark()
    {
        $view = $this->blade(
            '<x-bs-table-dark />',
        );

        $view->assertSeeInOrder(['<table', 'table-dark', '</table>'], false);
    }

    /** @test */
    public function render_info()
    {
        $view = $this->blade(
            '<x-bs-table-info />',
        );

        $view->assertSeeInOrder(['<table', 'table-info', '</table>'], false);
    }

    /** @test */
    public function render_light()
    {
        $view = $this->blade(
            '<x-bs-table-light />',
        );

        $view->assertSeeInOrder(['<table', 'table-light', '</table>'], false);
    }

    /** @test */
    public function render_primary()
    {
        $view = $this->blade(
            '<x-bs-table-primary />',
        );

        $view->assertSeeInOrder(['<table', 'table-primary', '</table>'], false);
    }

    /** @test */
    public function render_success()
    {
        $view = $this->blade(
            '<x-bs-table-success />',
        );

        $view->assertSeeInOrder(['<table', 'table-success', '</table>'], false);
    }

    /** @test */
    public function render_secondary()
    {
        $view = $this->blade(
            '<x-bs-table-secondary />',
        );

        $view->assertSeeInOrder(['<table', 'table-secondary', '</table>'], false);
    }

    /** @test */
    public function render_warning()
    {
        $view = $this->blade(
            '<x-bs-table-warning />',
        );

        $view->assertSeeInOrder(['<table', 'table-warning', '</table>'], false);
    }
}
