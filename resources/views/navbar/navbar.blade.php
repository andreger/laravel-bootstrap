<nav class="{{ $classValue }}">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ $slot }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarItems">
            @include('bs::nav.nav', ['classValue' => 'navbar-nav me-auto mb-2 mb-lg-0', 'items' => $items, 'selected' => $selected])
        </div>
    </div>
</nav>
