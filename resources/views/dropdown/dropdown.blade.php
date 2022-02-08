<div class="dropup">
    <button class="{{ $classValue }}" type="button" id="{{ $id ?? null }}" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $text }}
    </button>
    @include('bs::dropdown.menu', [
        'classValue' => 'dropdown-menu'
    ])
</div>
