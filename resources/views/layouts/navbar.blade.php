<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ route('welcome') }}" class="navbar-brand">CELEP</a>
        <ul class="navbar-links">
            <li><a href="{{-- route('landing') --}}">Beranda</a></li>
            <li><a href="{{-- route('profile') --}}">Profil</a></li>
            <li><a href="{{-- route('quiz.index') --}}">Kuis</a></li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Keluar
            </a></li>
        </ul>
    </div>

    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>