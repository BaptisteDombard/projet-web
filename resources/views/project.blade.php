<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section WEB HEPL - Projects</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
<h1 class="hidden">Section WEB HEPL - Projects</h1>
<x-partials.header></x-partials.header>
<main class="projectmain">
    <h2 class="projectmain__title">Projets d'étudiants</h2>
    <p class="projectmain__subtitle">Le projet étant au centre de notre bachelier, nos élèves sont heureux de vous proposer le produits de leur dur labeur.</p>
    <div class="projectmain__container">
        @for($i = 0; $i < 6; $i++)
            <x-partials.projectcard></x-partials.projectcard>
        @endfor
    </div>
    <p class="temporary">Pagination</p>

</main>
<x-partials.footer></x-partials.footer>
</body>
</html>
