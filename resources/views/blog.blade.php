<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section WEB HEPL - Blog</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
    <h1 class="hidden">Section WEB HEPL - Blog</h1>
    <x-partials.header></x-partials.header>
    <main class="blogmain">
        <h2 class="blogmain__title">Nos actualités</h2>
        <p class="blogmain__subtitle">Voici toutes les actualités concernant notre section ou même des astuces pour les futur développeur</p>
        <div class="form__container">
            <form action="" method="GET" class="keyword__form">
                <label for="keyword" class="hidden">Mots-clés</label>
                <input type="text" class="keyword__input" id="keyword">
                <button type="submit">Rechercher</button>
            </form>
            <form action="" method="GET" class="filter__form">
                <label for="filter" class="hidden">Filtres</label>
                <select name="filter" id="filter" class="select__filter">
                    <option value="ASC">De A à Z</option>
                    <option value="DESC">De Z à A</option>
                    <option value="ASC">Du plus ancien au plus récent</option>
                    <option value="DESC">Du plus récent au plus ancien</option>
                </select>
            </form>
        </div>
        <div class="news">
            @for($i = 0; $i < 4; $i++)
                <x-partials.newscard></x-partials.newscard>
            @endfor
        </div>
        <p class="temporary">Pagination</p>
    </main>
    <x-partials.footer></x-partials.footer>
</body>
</html>
