<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section WEB HEPL</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
    <h1 class="hidden">Section WEB HEPL</h1>
    <x-partials.header></x-partials.header>
    <main class="main">
        <div class="main__banner">
            <p class="main__banner-firsttext">N'ayez plus peur du chômage,</p>
            <p class="main__banner-secondtext">venez découvrir notre section.</p>
            <p class="main__banner-excerpt">La section web du bachelier en technique graphique enseigne les meilleurs pratiques dans le monde du web.
                <br>Dans une ambiance convivial, les deux années sont rythmées par différent projets.</p>
            <a class="main__banner-button" href="">Voir plus sur la section</a>
        </div>
        <section class="main__lastnews lastnews" aria-labelledby="lastnews__title">
            <h2 class="lastnews__title" id="lastnews__title" role="heading" aria-level="2">Nos dernières news</h2>
            <div class="lastnews__container">
                @for($i = 0; $i < 3; $i++)
                    <x-partials.newscard></x-partials.newscard>
                @endfor
            </div>
            <a class="lastnews__link" href="">Voir toutes nos actualités</a>
        </section>
        <section class="main__projects projects" aria-labelledby="projects__title">
            <h2 class="projects__title" id="projects__title" role="heading" aria-level="2">Quelques projets d'étudiants</h2>
            <div class="projects__container">
                @for($i = 0; $i < 3; $i++)
                    <x-partials.projectcard></x-partials.projectcard>
                @endfor
            </div>
            <a class="projects__link" href="">Voir toutes les projets</a>
        </section>
        <div class="navtrans">
            <p class="navtrans__excerpt">Vous vous posez des questions ?
                <br>Vous ne savez pas trop vers où vous diriger ?</p>
            <div class="navtrans__container">
                <a class="navtrans__link" href="">Parcourez notre forum</a>
                <a class="navtrans__link" href="">Informez vous sur nos alumnis</a>
            </div>
        </div>
    </main>
    <x-partials.footer></x-partials.footer>
</body>
</html>
