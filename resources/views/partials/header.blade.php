<header>
    <div class="p-4 bg-dark text-light">
        <ul class="nav nav-pills">
            <li class="nav-item me-3 {{ Route::currentRouteName() === 'home' ? 'bg-gradient' : '' }}">
                <a class="nav-link text-light {{ Route::currentRouteName() === 'home' ? 'border' : '' }}"
                    href="/">Home</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'catalogue' ? 'bg-gradient' : '' }}">
                <a class="nav-link text-light {{ Route::currentRouteName() === 'catalogue' ? 'border' : '' }}"
                    href="/catalogo">Catalogo</a>
            </li>
        </ul>
    </div>

</header>
