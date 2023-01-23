<header class="header">
    <nav class="header__nav nav">
        <h2 role="heading" aria-level="2" class="hidden">Navigation principale</h2>
        <ul class="nav__list">
            <li class="nav__list-item">
                <a href="/" class="nav__logo-link">
                    <img src="{{ url('images/header/logo-section.svg') }}" alt="Section web" class="nav__logo-img">
                </a>
            </li>
            <li class="nav__list-item"><a href="/" class="nav__list-link">Accueil</a></li>
            <li class="nav__list-item"><a href="/blog" class="nav__list-link">Actualité</a></li>
            <li class="nav__list-item"><a href="/forum" class="nav__list-link">Forum</a></li>
            <li class="nav__list-item"><a href="/project" class="nav__list-link">Projets</a></li>
            <li class=" nav__list-item dropdown__container">
                <div class="dropdown__btn">
                    <a href="" class="dropdown__btn-link">Info</a>
                    <svg class="link__arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10">
                        <path d="M7,0l7,10H0Z" transform="translate(14 10) rotate(180)"/>
                    </svg>
                </div>
                <ul class="dropdown__list">
                    <li class="dropdown__item"><a class="dropdown__link" href="/section">Section web</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="/teacher">Professeurs</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="/placement">Stages</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="/alumni">Alumnis</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="/result">Débouchés</a></li>
                </ul>
            </li>
            <li class="nav__list-item"><a href="/contact" class="nav__list-link">Contacts</a></li>
            @guest
                <li class="nav__list-item"><a href="/new" class="inscripiton__link">S'inscrire</a></li>
                <li class="nav__list-item"><a href="/login" class="connection__link">Se connecter</a></li>
            @endguest
            @auth
                <li class="nav__list-item"><a href="/" class="connected__user">{{ auth()->user()->name }}</a></li>
                <form action="/logout"
                      method="post">
                    @csrf
                    <button type="submit" class="logout__button">Logout</button>
                </form>
            @endauth
        </ul>
    </nav>
</header>
