<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section WEB HEPL - Forum</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
<h1 class="hidden">Section WEB HEPL - Forum</h1>
<x-partials.header></x-partials.header>
<main class="forummain">
    <h2 class="forummain__title">Notre Forum</h2>
    <div class="forumform__container">
        <form action="" method="GET" class="keyword__forumform">
            <label for="keyword" class="hidden">Mots-clés</label>
            <input type="text" class="keyword__foruminput" id="keyword">
            <button type="submit">Rechercher</button>
        </form>
        <form action="" method="GET" class="filter__forumform">
            <label for="filter" class="hidden">Filtres</label>
            <select name="filter" id="filter" class="select__filter">
                <option value="ASC">De A à Z</option>
                <option value="DESC">De Z à A</option>
                <option value="ASC">Du plus ancien au plus récent</option>
                <option value="DESC">Du plus récent au plus ancien</option>
            </select>
        </form>
    </div>
    <div class="forum__container">
        @for($i = 0; $i < 8; $i++)
            <x-partials.forumcard></x-partials.forumcard>
        @endfor
    </div>
    <p class="temporary">Pagination</p>
    <section class="newssection" aria-labelledby="newssection__title">
        <h2 role="heading" aria-level="2" id="newssection__title" class="hidden">Voir nos actualités ?</h2>
        <p class="newssection__excerpt">Vous souhaitez en savoir plus les actualités de notre section et du web ?</p>
        <a href="/blog" class="newssection__link">Consulter nos actualités</a>
    </section>
</main>
<x-partials.footer></x-partials.footer>
</body>
</html>
