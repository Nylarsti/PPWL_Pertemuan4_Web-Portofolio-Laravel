<header class="navbar">
    <div class="navbar-inner container">
        <a href="{{ route('home') }}" class="brand">⋆. 𐙚˚࿔ My Portfolio 𝜗𝜚˚⋆</a>

        <nav class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">Education</a>
            <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        </nav>
    </div>
</header>
